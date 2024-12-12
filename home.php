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
        .table{
            margin-left: 90px;
        }
        .aab{
            transform:transform 0.2s ease-in-out;
        }
        .aab:hover{
            transform:translateY(-10px);
        }
        .h{
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
        .mar{
            margin-left:90px;
        }
    </style>
</head>
<body>
    <div style="background-color: blanchedalmond;">
    <div class="b">
        <div><img src="ar logo.jpeg" style="width: 150px; height: 100px;"></div>
        <div class="a"><marquee><h1 class="h1">BEST PRODUCT ON AR MART WITH BEST DISCOUNT</h1></marquee></div>
    </div>
    <br>
    <div>
        <table width="88.3%" class="mar" border="8" cellpadding="5" cellspacing="5" >
            <tr>
                <td rowspan="2">Filter</td>
                <td>Type</td>
                <td>price</td>
                <td>company</td>
                <td>Type</td>
            </tr>
            <tr>
                <td>
                    <select name="cate" id="cate">
                        <option>rice</option>
                        <option>wheat</option>
                        <option>oil</option>
                        <option>masala</option>
                    </select>
                </td>
                <td><select name="price" id="price">
                    <option><20rs</option>
                    <option>>80</option>
                    <option><100</option>
                </select>
                </td>
                <td><select name="company" id="company">
                    <option>Uniliver</option>
                    <option>ITC</option>
                    <option>Smith & jones</option>
                </select>
                </td>
                <td><select name="type" id="type">
                    <option>big</option>
                    <option>small</option>
                    <option>mesium</option>
                </select></td>

            </tr>
        </table><br>
    </div>
    <table border="8" cellpadding="5" cellspacing="5" class="table">
        <tr>
        <?php
        $servername="localhost:3306";
        $username="root";
        $password="";
        $dbname="arvind";
    
        $conn=new mysqli($servername,$username,$password,$dbname);
    
        if($conn->connect_error)
        {
            die("connected failed: ".$conn->connect_error);
        }
    
        $sql="SELECT Id,Url,pro_name,price,pro_discription FROM product";
        $result=$conn->query($sql);
    
        
    
        if($result->num_rows>0)
        {
            $count=0;
            while($row=$result->fetch_assoc()) {
            echo "<td><img class='aab' height='250px' width='200px' src='".$row["Url"]."'><br>".$row["pro_name"]."<br>".$row["price"]."<br>".$row["pro_discription"]."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form action='cart.php' method='post'><input type='hidden' name='name' value='".$row["pro_name"]."'><input type='hidden' name='price' value='".$row["price"]."'><button><a href='cart.php?Id=".$row["Id"]."'>Add to Cart</a></button>";
          $count++;
          if($count==5){
            echo "</tr><tr>";
            $count=0;
          }
        }}
          else
          {
            echo "No record found";
          }
          $conn->close();
        
        ?>
    </tr></table>    
    </div>
    <br>
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