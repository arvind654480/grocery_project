
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .cart-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cart-table {
            width: 100%;
            border-collapse: collapse;
        }
        .cart-table th, .cart-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .cart-table th {
            background-color: #f0f0f0;
        }
        .cart-total {
            font-weight: bold;
            font-size: 18px;
        }
        .cart-buttons {
            margin-top: 20px;
        }
        .cart-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
        .cart-buttons button:hover {
            background-color: #3e8e41;
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
        .b{
            display: flex;  
            background-color: rgb(21, 217, 60);
        }
        .h1{
            background-color: aquamarine;
            
        }
        .a{
            width: 900px; 
            height: 80px;
            border: 1px ;
            margin: 20px;
            background-color: bisque;padding-left: 50px;
        }
    </style>
</head>
<body>
<div style="background-color: blanchedalmond;">
    <div class="b">
        <div><img src="ar logo.jpeg" style="width: 150px; height: 100px;"></div>
        <div class="a"><h1 class="h1">CART page</h1></div>
    </div>
    <br>
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

    $id=$_GET['Id'];
    $sql="SELECT Url,pro_name,price,pro_discription,GST FROM product where id='".$id."'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc();
        $img=$row['Url'];
        $name=$row['pro_name'];
        $price=$row['price'];
        $dis=$row['pro_discription'];
        $gst=$row['GST'];
    }
    
    ?>
    <div align="CENTER">
        <h2>Cart</h2>
        <table Border="6" cellspacing="4" cellpadding="5">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>GST</th>
                    <th>Grand Total</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" value="<?php echo $name ?>" disabled></td>
                    <td><input type="number" min="1" id="qty" value="1" ></td>
                    <td><input type="text" id="price" value="<?php echo $price ?>" disabled></td>
                    <td><input type="text" id="total" disabled></td>
                    <td><input type="text" id="gst" value="<?php echo $gst ?>" disabled></td>
                    <td><input type="text" id="gt" disabled></td>
                </tr>
            </tbody>
        </table>
        <?php
        echo "<td><img class='aab' height='250px' width='200px' src='".$row["Url"]."'><br>".$row["pro_name"]."<br>".$row["price"]."<br>".$row["pro_discription"]."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='hidden' name='name' value='".$row["pro_name"]."'><input type='hidden' name='price' value='".$row["price"]."'>";
        echo "";
        ?>
        <script>
            document.getElementById('qty').addEventListener('input', function() {
            var quantity = this.value;
            var price = document.getElementById('price').value;
            var gst = document.getElementById('gst').value;

            // Calculate Total
            var total = quantity * price;
            document.getElementById('total').value = total;

            // Calculate Grand Total (Total + GST)
            var grandTotal = total + (total * gst / 100);
            document.getElementById('gt').value = grandTotal;
          });
        </script>
        <div class="cart-buttons">
            <a href="payment.php"><button>MAKE PAYMENT</button></a>
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
