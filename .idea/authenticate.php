<?php
session_start();

// connect to database
$db = mysqli_connect('ipmdb.cks4nsnfrygm.us-east-1.rds.amazonaws.com', 'eddie', 'password', 'ipmdatabse');

// variable declaration

$email    = "";
$errors   = array();

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
    register();
}

// REGISTER USER
function register(){
    // call these variables with the global keyword to make them available in function
    global $db, $errors, $email;

    // receive all input values from the form. Call the e() function
    // defined below to escape form values
    $email       =  e($_POST['email']);
    $password_1  =  e($_POST['password_1']);
    $password_2  =  e($_POST['password_2']);

    // form validation: ensure that the form is correctly filled

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        if (isset($_POST['user_type'])) {
            $user_type = e($_POST['user_type']);
            $query = "INSERT INTO Account (email, user_type, password) 
					  VALUES('$email', '$user_type', '$password')";
            mysqli_query($db, $query);
            $_SESSION['success']  = "New user successfully created!!";
            header('location: admin_index.php');
        }else{
            $query = "INSERT INTO Account ( email, user_type, password) 
					  VALUES('$email', 'user', '$password')";
            mysqli_query($db, $query);

            // get id of the created user
            $logged_in_user_id = mysqli_insert_id($db);

            $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
            $_SESSION['success']  = "You are now logged in";
            header('location: index.php');
        }
    }
}

// return user array from their id
function getUserById($id){
    global $db;
    $query = "SELECT * FROM Account WHERE id=" . $id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

// escape string
function e($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0){
        echo '<div class="error">';
        foreach ($errors as $error){
            echo $error .'<br>';
        }
        echo '</div>';
    }
}

//tells if a user is logged in or not
function isLoggedIn(){
    if (isset($_SESSION['user'])){
        return true;
    }else{
        return false;
    }
}

//log user out if logout button clicked
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
    login();
}

// LOGIN USER
function login(){
    global $db, $email, $errors;

    // grap form values
    $email = e($_POST['email']);
    $password = e($_POST['password']);

    // make sure form is filled properly
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // attempt login if no errors on form
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM Account WHERE email='$email' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) { // user found
            // check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['user_type'] == 'admin') {

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";
                header('location: admin_index');
            }else{
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success']  = "You are now logged in";

                header('location: index.php');
            }
        }else {
            array_push($errors, "Wrong email/password combination");
        }
    }
}

function isAdmin(){
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin'){
        return true;
    }else{
        return false;
    }
}

//call the delete() function if delete_btn is clicked
/*if (isset($_POST['delete_btn'])){
    delete();
}

function delete(){
    global $db;
    $delete_id=$_GET['del'];
    $delete_query="DELETE from Account WHERE id ='$delete_id'";//delete query
    $run=mysqli_query($db,$delete_query);
    if($run)
    {
//javascript function to open in the same window
        echo "<script>window.open('admin_index.php?deleted=user has been deleted','_self')</script>";
    }
}*/