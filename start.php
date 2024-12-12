<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR MART</title>
    <style>
        .h1{
            font-size: 50px;
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
<body  onload="changeImage()" style="background-color: aqua;">
    <hr>
    <hr>
    <div style="display: flex;  background-color: rgb(21, 217, 60);">
        <div><img src="ar logo.jpeg" style="width: 150px;height: 100px;"></div>
        <div style="width: 900px; height: 80px;border: 1px ;margin: 20px;background-color: bisque;padding-left: 50px;"><h1>WELCOME TO THE AR MART</h1></div>
    </div>
    <div style="background-color: rgb(61, 216, 71);">
        <hr>
    
    <div style="display: flex;justify-content: space-between;">
        <div style="background-color:rgb(88, 219, 68);text-align: center; width: 900px; height: 49px;border: 1px ;margin: 10px;">
        <h2>Get start your shopping with the AR mart click here>>>>></h2>
    </div>
    <div style=" width: 250px; height: 48px;border: 1px ;margin: 20px;background-color: aliceblue;text-align: center;">
        <a href="login.php" value="login">Login</a></div>
    </div>
    <hr></div>
    <div style="background-image: url('mart.jpeg');" >
        <div style="background-color: blanchedalmond;text-align: center;">
            <p><h1 class="h1">20% off on any 1000 and above shopping</h1></p>
            <img id="img" src="grocery.jpeg" style=" width: 600px; height: 400px;">
            <script>
                var x=0;
                function changeImage(){
                    if(x==0){
                        document.getElementById("img").src="grocery.jpeg";
                    }
                    else if(x==1){
                        document.getElementById("img").src="fruits.jpeg";
                    }
                    else if(x==2){
                        document.getElementById("img").src="rice.jpeg";
                    }
                    else if(x==3){
                        document.getElementById("img").src="vegitable.jpeg";
                    }
                    else if(x==4){
                        document.getElementById("img").src="wheat.jpeg";
                    }
                    x++
                    if(x>4)
                    x=0
                timerid=setTimeout(changeImage,1000);
                }
            </script>
            
        </div>
    </div>
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