<?php
require 'config.php';

session_start();

$email = "";
$password = "";

if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];

}


$q = 'SELECT * FROM users WHERE email=:email AND password=:password';

$query = $dbh->prepare($q);

$query->execute(array(':email' => $email, ':password' => $password));


if($query->rowCount() == 0){
    header('Location: login.php?err=1');
}else{

    $row = $query->fetch(PDO::FETCH_ASSOC);

    session_regenerate_id();
    $_SESSION['sess_user_id'] = $row['id'];
    $_SESSION['sess_email'] = $row['email'];
    $_SESSION['sess_userrole'] = $row['role'];

    echo $_SESSION['sess_userrole'];
    session_write_close();

    if( $_SESSION['sess_userrole'] == "admin"){
        header('Location: admin_index.php');
    }else{
        header('Location: index.php');
    }


}


?>