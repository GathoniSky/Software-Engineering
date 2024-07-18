<?php

include_once ('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$name = $_POST['name'];
$licence = $_POST['license'];
$yos = $_POST['yos'];
$specialization = $_POST['specialization'];
$ho = $_POST['ho'];
$days = $_POST['days'];

$sql = "INSERT INTO vetregister (`name`,`email`,`phone`,`password`,`licence`,`yos`,`specialization`,`ho`,`days`) 
VALUES ('$name', '$email', '$phone', '$password', '$licence', '$yos', '$specialization', '$ho', '$days')";

if($conn->query($sql) === TRUE){
    echo "signup successfully";
    header("location: vetaccount.html");
}else{
    echo "something went wrong";
}

?>