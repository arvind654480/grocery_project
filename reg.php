<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pass =$_POST['password'];
    $repassword=$_POST['repassword'];
    // Validate user input

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "arvind";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // Check if passwords match
    if ($pass === $repassword) {
        echo "";
        
    }else{
        echo "<h1>Password dont match<h1>";
    }
    $sql="SELECT * FROM registration WHERE email='".$email."'";
    echo $sql."<br>";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        echo "<h1 align='center'>This email id already exist</h1>";
    }
    else{
        $sql="INSERT INTO registration(Name,Gender,Email,Phone_no,Address,password) VALUES('".$name."','".$gender."','".$email."',".$phone.",'".$address."','".$pass."')";
        echo $sql;
        if($conn->query($sql)==TRUE)
        {
            header("Location:login.php");
        }
        else {
              echo "ERROR.....".$sql."<br>".$conn->error;
        }
        $conn->close();
    }
}



?>