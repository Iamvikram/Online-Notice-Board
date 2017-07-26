<?php
//create connection variables
$host="localhost";
$user="vikram";
$pass="8989216681";
// create connection
$conn = mysqli_connect($host,$user,$pass);
//create database
 $sql = "CREATE DATABASE online_notice";
 //pass db_name in query function
  mysqli_query($conn,$sql);
  mysqli_select_db($conn,"online_notice");
//create user table
$sql = "CREATE TABLE user (
            user_id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY, 
			name char(20)  NOT NULL,
			email VARCHAR(50) NOT NULL UNIQUE KEY,
			password VARCHAR(50) NOT NULL ,
			mobile BIGINT NOT NULL,
			gender ENUM('m','f') NOT NULL,
			hobbies VARCHAR(50) NOT NULL,
			image VARCHAR(50) NOT NULL,
			dob DATE NOT NULL
			)";
		$val=	mysqli_query($conn,$sql);
$sql = "ALTER TABLE user CHANGE password  password VARCHAR(500) NOT NULL";
         $val=	mysqli_query($conn,$sql);
  $sql = "CREATE TABLE notice (
               notice_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
			   user VARCHAR(50) NOT NULL,
			   subject VARCHAR(100) NOT NULL,
			   description TEXT NOT NULL,
			   date DATETIME NOT NULL
			  )";
			$val=	mysqli_query($conn,$sql);
			$sql = "CREATE TABLE admin (
               admin_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
			   name VARCHAR(50) NOT NULL,
			   email VARCHAR(100) NOT NULL UNIQUE KEY,
			   password TEXT NOT NULL
			  )";
			$val=	mysqli_query($conn,$sql);
			
?>