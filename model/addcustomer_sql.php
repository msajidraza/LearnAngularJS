<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "db_lara1");

$fullname = $_POST['fullname'];
$mobile   = $_POST['mobile'];
$email    = $_POST['email'];
$address  = $_POST['address'];
$city     = $_POST['city'];
$pincode  = $_POST['pincode'];
$state    = $_POST['state'];


$created_at = date('Y-m-d H:i:s');
$outp = "";
$result = $conn->query("INSERT INTO customer (fullname, mobile, email, address, city, pincode, state, created_at) VALUES ('$fullname', '$mobile', '$email', '$address', '$city', '$pincode', '$state', '$created_at')");

//$outp ='{"records":['.$outp.']}';
$outp ='Data submitted Successfully';
$conn->close();

echo($outp);
?>
