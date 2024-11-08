<<?php
session_start();
include 'includes/db.php';
include 'includes/functions.php';



if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    login_user($username, $password);
}
?>