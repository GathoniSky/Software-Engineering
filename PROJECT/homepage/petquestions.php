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
$question = $_POST['question'];

$sql = "INSERT INTO petquestions (`q1`,`q2`,`q3`,`q4`,`q5`,`q6`,`q7`,`q8`, `question`) 
VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$question')";
if($conn->query($sql) === TRUE){
    echo "Form sent successfully";
}else{
    echo "something went wrong";
}

?>