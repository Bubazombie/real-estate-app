<?php 

//Import connection
require 'includes/config/database.php';
$db = connectDB();

//Create email & pass
$email = 'example@example.com';
$password = 'helloworld123';
$passwordHash = password_hash($password, PASSWORD_DEFAULT); //another option is PASSWORD_BCRYPT


//Query to create user
$query = "INSERT INTO users (email, password) VALUES ('${email}', '${passwordHash}');";


//Add to DB
mysqli_query($db, $query);