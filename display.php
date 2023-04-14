<?php

$conn = new mysqli('localhost', 'root', '', 'car_dealership');

if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

$sql = "SELECT id, modelName, drivetrain, color FROM car";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Model Name: " . $row["modelName"] . " Drivetrain: " . $row["drivetrain"] . " Color: " . $row["color"] . "<br>";
    }
} else {
    echo "0 results";
}

?>