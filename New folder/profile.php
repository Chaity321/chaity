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
        $age =$_POST['age'];
        $designnation = $_POST['designnation'];
        $Preferredlanguage = $_POST['Preferredlanguage'];
        $email = $_POST['email'];
        $password =$_POST['password'];
        $Pleasechooseafile =$_POST['Pleasechooseafile'];
        echo "First name: ". $fname."<br>";
        echo "Last name: ". $lname."<br>";
        echo "age: ". $age."<br>";
        echo "designnation: ". $designnation."<br>";
        echo "Preferredlanguage: ". $Preferredlanguage."<br>";
        echo "Email: ". $email."<br>";
        echo "Password: ". $password."<br>";
        echo "Pleasechooseafile: ". $Pleasechooseafile."<br>";
    }
 
 
?>


</body>
</html>
