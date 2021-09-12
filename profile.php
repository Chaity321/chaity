<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <h2>profile</h2>
<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $date =$_POST['date'];
        $number = $_POST['number'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password =$_POST['password'];
        echo "<hr>";
        echo "First name: ". $fname."<br>";
        echo "Last name: ". $lname."<br>";
        echo "date: ". $date."<br>";
        echo "Number: ". $number."<br>";
        echo "Address: ". $address."<br>";
        echo "Email: ". $email."<br>";
        echo "Password: ". $password."<br>";
    }
 
 
?>
<a href= "registration.php">back</a>
<p>Thank You</p>
</body>
</html>
