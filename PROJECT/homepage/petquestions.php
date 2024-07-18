<?php

include_once ('db.php');

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];

$sql = "INSERT INTO petquestions (`q1`,`q2`,`q3`,`q4`,`q5`,`q6`,`q7`,`q8`) 
VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8')";
if($conn->query($sql) === TRUE){
    
}else{
    echo "something went wrong";
}

?>