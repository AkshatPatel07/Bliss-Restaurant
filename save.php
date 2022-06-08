<?php

$fullname = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$dish = $_POST["dish"];
$quantity = $_POST["quantity"];
$details = $_POST["details"];
$message = $_POST["message"];

$conn = mysqli_connect("localhost", "root", "", "bliss2") or die("connection failed");

$sql = "INSERT INTO order_table(Fullname,Email,Phone,Dishname,Quantity,Orderdetails,Custaddress) VALUES ('{$fullname}', '{$email}', '{$phone}', '{$dish}', '{$quantity}', '{$details}', '{$message}')";
$result = mysqli_query($conn, $sql) or die("Query Failed");
header("location: http://localhost/bliss/index.php#order");
mysqli_close($conn);
?>