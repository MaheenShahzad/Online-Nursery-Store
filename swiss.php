<?php

$con=mysqli_connect('localhost:3307', 'root', '','gardens_treasure');


$result = mysqli_query($con,"SELECT `plant-name`, `plant-price`, `plant-description` FROM `plant` WHERE `plant-name`='Swiss Cheese Plant';");

while($row = mysqli_fetch_array($result))
{
    $plantname=$row['plant-name'];
    $plantprice=$row['plant-price'];
    $des=$row['plant-description'];
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursery Store</title>
    <style>
        /* CSS styles go here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2ecc71;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .product {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        .product h3 {
            margin: 10px 0;
        }
    </style>
</head>
<body>
<header>
    <h1>Nursery Store</h1>
</header>

<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about%20us.html">About</a></li>
        <li><a href="contact%20us.html#">Contact</a></li>
    </ul>
</nav>



<div class="container">
    <div class="product">
      <span>   <img src="https://thehometome.com/wp-content/uploads/2021/07/monstera-deliciosa-and-monstera-monkey-mask-in-a-white-pots.jpg" width="30%" height="30%" class="center" >
       </span>

        <h1><?php echo $plantname; ?></h1>
        <p><?php echo $des; ?></p>
        <p><b>Price: </b>Rs. <?php echo $plantprice; ?> only</p>


        <a href="register%20l.html"><button type="button">Purchase</button></a>
    </div>

    <!-- More products can be added here -->

</div>
</body>
</html>
