<?php
//require main_page.php; 

$id = $_GET['id'];
$query = "DELETE FROM car WHERE id = '$id';";

$conn = new mysqli('localhost', 'root', '', 'car_dealership');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

$result = mysqli_query($conn, $query);
if ($result) {
    mysqli_close($conn);
    header("location:database.php");
    exit();
} else {
    echo "Error deleting record";
}

/*$id = (int) $_POST['id'];
$update = $conn->prepare("DELETE FROM car WHERE id = ?");
$update->bind_param('i', $id);
$update->execute();
/*if(isset($_GET['deleteid'])){
$is=$_GET['deleteid']; 
}*/



?>