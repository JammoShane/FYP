<?php



//Database Connections
$conn = new mysqli('localhost', 'root', '', 'car_dealership');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

//$id = $_GET['id'];
//print_r($_GET);

/*
// SQL query to select data from database
$sql = " SELECT * FROM car ";
$result = $mysqli->query($sql);
$mysqli->close();
*/


//if (isset($_POST['submit'])) {
$id = $_POST['id'];
$modelName = $_POST['modelName'];
$color = $_POST['color'];
$drivetrain = $_POST['drivetrain'];

echo $id;
echo $modelName;

$sql = " UPDATE car SET modelName = '$modelName', color = '$color', drivetrain = '$drivetrain' WHERE id = $id";

//$result = mysqli_query($conn, $query);
if ($conn->query($sql) === TRUE) {
    //mysqli_close($conn);
    header('location:database.php');
    //exit();
    //echo "Updated Successfully";
} else {
    echo "Update Unsuccessful";
    //die(mysqli_error($conn));
}
//}
?>