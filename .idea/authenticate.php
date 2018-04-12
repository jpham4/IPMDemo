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