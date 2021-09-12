<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output</title>
</head>
<body>
    <h2>output</h2>
<?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
         $password =$_POST['password'];
        echo "<hr>";
        echo "First name: ". $fname."<br>";
        echo "Last name: ". $lname."<br>";
        echo "Password: ". $password."<br>";
    }
 
 
?>
<a href= "form.php">back</a>
</body>
</html>
