<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .a{
            width: 900px; 
            height: 80px;
            border: 1px ;
            margin: 20px;
            background-color: bisque;padding-left: 50px;
        }
        .b{
            display: flex;  
            background-color: rgb(21, 217, 60);
        }
        .h1{
            background-color: aquamarine;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .footer-content {
            display: inline-block;
            width: 30%;
            vertical-align: top;
            margin-right: 20px;
        }

        .footer-content h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-content p {
            font-size: 14px;
            color: #ccc;
        }

        .footer-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-content li {
            margin-bottom: 10px;
        }

        .footer-content a {
            color: #ccc;
            text-decoration: none;
        }

        .footer-content a:hover {
            color: #fff;
        }

        .footer-bottom {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
            clear: both;
        }

        .footer-bottom p {
            font-size: 14px;
            color: #ccc;
        }
    </style>
</head>
<body>
<hr>
    <hr>
    <div style="display: flex;  background-color: rgb(21, 217, 60);">
        <div><img src="ar logo.jpeg" style="width: 150px;height: 100px;"></div>
        <div style="width: 900px; height: 80px;border: 1px ;margin: 20px;background-color: bisque;padding-left: 50px;"><h1>WELCOME TO THE AR MART</h1></div>
    </div>
    <div style="background-color: rgb(61, 216, 71);">
        <hr>
        
    </div><br><br><br>
    <div style="background-color: aquamarine; width: 800px;margin-left: 300px; font-size: xx-large;">
    <h1>Payment Sucessfull!!! </h1>
    </div>
    <div style="background-color: aquamarine; width: 200px;margin-left: 500px;">
        <a href="home.php"><h1><button style="width: 200px;height: 60px; background-color: bisque;">Continue shopping</button></h1></a>
    </div>
    <br><br><br><br>


<footer>
        <div class="footer-content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        </div>
        <div class="footer-content">
        <h3>Quick Links</h3>
        <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
        </div>
        <div class="footer-content">
        <h3>Follow Us</h3>
        <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
        </ul>
        </div>
        <div class="footer-bottom">
        <p>&copy; 2024 AR Mart Grocery. All rights reserved.</p>
        </div>
        </footer>
</body>
</html>