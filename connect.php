<?php
$modelName = $_POST['modelName'];
$color = $_POST['color'];
$drivetrain = $_POST['drivetrain'];

//Database Connection
$conn = new mysqli('localhost', 'root', '', 'car_dealership');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into car(modelName, color, drivetrain) values(?, ?, ?)");
    $stmt->bind_param("sss", $modelName, $color, $drivetrain);
    $stmt->execute();
    //echo 'Car entry registration successful!';
    $stmt->close();
    header('Location: car_entry.php');
    //echo "<meta http-equiv='refresh' content='0'>";
    //$stmt->close();
}
?>