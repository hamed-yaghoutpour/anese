<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "anese";	
$conn = mysqli_connect($servername,$username,$password);
mysqli_set_charset($conn,"utf8");
$sql = "create database if not exists $db_name character set utf8mb4 collate utf8mb4_unicode_ci";
mysqli_query($conn,$sql);
$conn = mysqli_connect($servername,$username,$password,$db_name);
mysqli_set_charset($conn,"utf8");

	$sql = "
        create table if not exists main(
            id int(9) PRIMARY KEY AUTO_INCREMENT,
            key_name varchar(200),
            key_value varchar(200)
        );
    ";
    mysqli_query($conn,$sql);


    $sql = "
		CREATE TABLE if not exists users(
			id int(9) PRIMARY KEY AUTO_INCREMENT,
			username varchar(200),
			password varchar(200)
		);
    ";
	mysqli_query($conn,$sql);

	
    $sql = "
        create table if not exists chats(
            id int(9) PRIMARY KEY AUTO_INCREMENT,
			name varchar(200),
			image_path varchar(200)
        );
    ";
	mysqli_query($conn,$sql);
    $sql = "
        create table if not exists group_messages(
			id int(9) PRIMARY KEY AUTO_INCREMENT,
			chat_id int(9),
			sender varchar(200),
			message varchar(200)
        );
    ";
	mysqli_query($conn,$sql);
    $sql = "
        create table if not exists pv_messages(
			id int(9) PRIMARY KEY AUTO_INCREMENT,
			sender varchar(200),
			receiver varchar(200),
			message varchar(200)
        );
    ";
	mysqli_query($conn,$sql);
    $sql = "
        create table if not exists members(
			id int(9) PRIMARY KEY AUTO_INCREMENT,
			chat_id int(9),
			username varchar(200)
        );
    ";
	mysqli_query($conn,$sql);

    $sql = "
		create table if not exists posts(
			id int(9) PRIMARY KEY AUTO_INCREMENT,
			title varchar(200),
			caption varchar(200),
			sender_username varchar(200),
			image_path varchar(200),
			video_path varchar(200)
		);
    ";
	mysqli_query($conn,$sql);
    $sql = "
        create table if not exists comments(
			id int(9) PRIMARY KEY AUTO_INCREMENT,
			post_id int(9),
			username varchar(200),
			comment varchar(200)
        );
    ";
	mysqli_query($conn,$sql);
    $sql = "
        create table if not exists likes(
        id int(9) PRIMARY KEY AUTO_INCREMENT,
        post_id int(9),
        username varchar(200)
        );
    ";
	mysqli_query($conn,$sql);
    

?>






