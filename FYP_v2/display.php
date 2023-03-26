<?php

$conn = new mysqli('localhost', 'root', '', 'car_dealership');

if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

$sql = "SELECT id, brandName, modelName, engineCapacity FROM car";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Brand Name: " . $row["brandName"] . " Model Name: " . $row["modelName"] . " Engine Capacity: " . $row["engineCapacity"] . "<br>";
    }
} else {
    echo "0 results";
}

?>