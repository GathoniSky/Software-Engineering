<?php

include 'db.php';

$sql = "SELECT question, email FROM petquestions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='item'>";
        echo "<h3>" . $row["email"] . "</h3>";
        echo "<h3>" . $row["question"] . "</h3>";
        echo "</div>";
    }
} else {
    echo "No consults available.";
}
$conn->close();

?>