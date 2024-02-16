<?php
include_once('connection.php');
session_start();
$userid=$_POST['userid'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "UPDATE `user` SET `fname`='$firstname',`mname`='$middlename',`lname`='$lastname',`age`='$age', `sex`='$sex',`address`='$address',`username`='$username',`password`='$password',`email`='$email'
 WHERE `userid`='$userid'";

$result = mysqli_query($connection,$query);

if ($result) {
    header('location:mainpage.php');
} else {
    echo "fail: ";
}
?>