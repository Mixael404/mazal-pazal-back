<?php
header("Access-Control-Allow-Origin: *");

$data = file_get_contents('php://input');

$json = json_decode($data, true);
$name = $json['name'];
$description = $json['description'];
$price = $json['price'];
$phone = $json['phone'];
$category = $json['category'];
$region = $json['region'];

$db = mysqli_connect('localhost', 'root', '', 'mazal');

$isOk = mysqli_query($db, "INSERT INTO product (name,description,price,phone,category,region) VALUES ('$name', '$description', '$price','$phone', '$category', '$region')");

if($isOk) echo "Ok!";