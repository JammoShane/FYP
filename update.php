<?php
//Database Connection
$conn = new mysqli('localhost', 'root', '', 'car_dealership');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

$id = $_GET['id'];
//echo $id;

$sql = "SELECT * FROM car WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$brandName = $row['brandName'];
$modelName = $row['modelName'];
$engineCapacity = $row['engineCapacity'];
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" href="car_entry.css" />

    <title>Car Entry</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Car Dealership Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="customize.html">Customize</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="car_entry.php">Car Entry</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="search.html">Search</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="bill.html">Bill</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="database.php">Database</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="masthead">
            <section>
                <div class="container overlay d-flex justify-content-center align-items-center">
                    <div class="card">
                        <div class="card-header">
                            <h2>Car Entry Field</h2>
                        </div>
                        <div class="card-body">
                            <form method="post" action="update2.php">
                                <input type="hidden" name="id" value=<?php echo $id; ?>>
                                <label for="brandName">Brand Name: </label>
                                <input type="text" id="brandName" name="brandName" value=<?php echo $brandName; ?> /><br /><br />
                                <label for="modelName">Model Name:</label>
                                <input type="text" id="modelName" name="modelName" value=<?php echo $modelName; ?> /><br /><br />
                                <label for="modelName">Engine Capacity:</label>
                                <input type="text" id="modelName" name="engineCapacity" value=<?php echo $engineCapacity; ?> /><br /><br />
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>