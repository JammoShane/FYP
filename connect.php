<?php
$modelName = $_POST['modelName'];
$brandName = $_POST['brandName'];
$engineCapacity = $_POST['engineCapacity'];

//Database Connection
$conn = new mysqli('localhost', 'root', '', 'car_dealership');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into car(brandName, modelName, engineCapacity) values(?, ?, ?)");
    $stmt->bind_param("ssi", $brandName, $modelName, $engineCapacity);
    $stmt->execute();
    echo 'Car entry registration successful!';
    $stmt->close();
    $stmt->close();
}
?>