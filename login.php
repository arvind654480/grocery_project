<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('fruits.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            
        }
        .a{
            background-image: url('download.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            background-color: aliceblue;
            height: 400px;
            width: 500px;
            margin-left: 400px;
            margin-top: 200px;
        }
        .h1{
            background-color: blanchedalmond;

        }
    </style>
</head>
<body>
    <div style="background-color: aquamarine;"><h1>back to main page>>>>>><a href="start.php">Main</a></h1></div>
    <form method="POST" >
    <div class="a">
        <table style="background-color: yellow;" align="center" border="8" cellpadding="5" cellspacing="5" width="250px" height="250px">
            <caption><h1 class="h1">AR MART</h1></caption>
            <thead>
                <tr>
                    <th colspan="2">LOGIN PAGE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th>Name</th>
                <td><input type="text" name="name" id="name" placeholder="name required" required></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password" id="password" maxlength="6" placeholder="minimum 6 length" required></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name='s1' value="Login"></a></th>
            </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">New user?<a href="registration.php">Register</a></th>
                </tr>
                <tr><th colspan='2'><p id='p1'></p></th></tr>
            </tfoot>
        </table>
    </div></form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['s1'])) {
    $name=$_POST['name'];
    $passw=$_POST['password'];

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "arvind";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="select name from registration where password='".$passw."'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $passw==$row['password'];
        header("Location:home.php");
    
}}
    else{
        echo "<script>document.getElementById('p1').innerHTML='password dont match';</script>";
    }

    $sql="INSERT INTO login(name,PASSWORD) VALUES('".$name."','".$passw."')";
        if($conn->query($sql)==TRUE)
        {
            echo "";
        }
        else {
              echo "ERROR.....".$sql."<br>".$conn->error;
        }
    $conn->close();
}

?>
