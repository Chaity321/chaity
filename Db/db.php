<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="student";
//Create connection
$conn = new mysql($servername, $username, $password, $dbname);
//Check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);

}
$fname = "Chaity";
$lname "gOsh";
$age = 21;
$email = "chaitygosh.9@gmail.com";
$sql = "INSERT INFO student_info(f_name, l_name, age, email) VALUES("