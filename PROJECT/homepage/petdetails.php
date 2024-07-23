<?php

require_once('db.php');

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$breed = $_POST['breed'];
$weight = $_POST['weight'];
$color = $_POST['color'];

$sql = "INSERT INTO petdetails (`name`,`age`,`gender`,`breed`,`weight`,`color`) 
VALUES ('$name', '$age', '$gender', '$breed', '$weight', '$color')";
if($conn->query($sql) === TRUE){
    echo "Pet added successfully <a href='petdetails.html'> Go back </a>";
}else{
    echo "something went wrong";
}

?>