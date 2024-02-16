<?php
include_once('connection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT `username`, `password` FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)== 1){
    $_SESSION['Email'] = $email;
    echo "Sesssion username: " . $_SESSION['username'];
    header('location:mainpage.php');
    exit;
} else{
    header('location:logininterface.php?error');
    exit;
}
?>