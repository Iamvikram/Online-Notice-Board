<?php
include("../connection.php");

$id =  $_GET['id'];
$sql = mysqli_query($conn,"delete from user where user_id='$id'");
header('location:index.php?page=manage_user.php');

?>