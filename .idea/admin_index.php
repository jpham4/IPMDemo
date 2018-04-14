<?php
session_start();
$role = $_SESSION['sess_userrole'];
if(!isset($_SESSION['sess_email']) || $role!="admin"){
    header('Location: login.php?err=2');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="C:\Users\jpham\IdeaProjects\IPMDemo\bootstrap-4.1.0-dist\css">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">IPM</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a href="#"><?php echo $_SESSION['sess_email'];?></a>
            <a class="nav-link" href="logout.php">Sign out</a>
        </li>
    </ul>
</nav>
</body>
</html>
