<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
    background-image: url('vegetable.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}

.container {
    background-color: rgb(31, 154, 35);
    width: 650px;
    height: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f0f0f0;
}
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="reg.php">
            <h1>Registration Form</h1>
            <table>
                <tr>
                    <th>Name:</th>
                    <td><input type="text" name="name" placeholder="Enter name" required></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Others">Others
                    </td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><input type="email" name="email" placeholder="Enter email" required></td>
                </tr>
                <tr>
                    <th>Phone No:</th>
                    <td><input type="number" name="phone" placeholder="Enter phone number" required></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><input type="text" name="address" placeholder="Enter address" required></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" name="password" placeholder="Enter password" required></td>
                </tr>
                <tr>
                    <th>Re-type Password:</th>
                    <td><input type="password" name="repassword" placeholder="Re-type password" required></td>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" name="submit" value="Register"></th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
