<?php
$DATABASE_HOST = "localhost:3307";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "gardens_treasure";

$con = mysqli_connect('localhost:3307', 'root', '','gardens_treasure');


$txtEmail = $_POST['email'];
$txtName = $_POST['name'];
$txtAdd=$_POST['address'];
$txtPhone=$_POST['phone-no'];

$sql = "INSERT INTO `customer` (`id`, `email`,  `name`,`address`,`phone-no`) VALUES ('0', '$txtEmail',  '$txtName','$txtAdd','$txtPhone');";

$rs = mysqli_query($con, $sql);


function function_alert($message) {

    // Display the alert box
    echo "<script>alert('$message');</script>";
    echo '<a href="index.html">Click Here to go back to main Page</a>';
}


if (array_key_exists('button1', $_POST)) {
    function_alert("Your Order has been successfully placed and will be at your door in 2-3 working days");
}

?>
