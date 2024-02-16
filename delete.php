<?php
include_once('connection.php');
$userid = $_GET['userid'];
$query = "DELETE FROM `user` WHERE 'userid' ='userid'";

$result = mysqli_query($connection,$query);

if ($result) {
    header('location:mainpage.php');
} else {
    echo "fail: ";
}
?>