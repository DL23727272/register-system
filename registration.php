<?php
include_once('connection.php');
$fname = $_POST['Fname'];
$mname = $_POST['Mname'];
$lname = $_POST['Lname'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "INSERT INTO `user`(`userid`, `Fname`, `Mname`, `Lname`, `age`, `sex`, `address`, `username`, `password`, `email`) 
VALUES ('', '$fname', '$mname', '$lname', '$age','$sex', '$address', '$username', '$password', '$email')";
$result = mysqli_query($connection, $query);

if ($result) {
    header('location: mainpage.php');
    exit(); 
} else {
    echo "fail: " . mysqli_error($connection);
}
?>
