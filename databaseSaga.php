<?php

//Database Connections
$user = 'root';
$password = '';

$database = 'car_dealership';

$servername = 'localhost:3306';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM car WHERE modelName = 'Saga'";
$result = $mysqli->query($sql);
$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Database</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="database.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="homepage.php">
                <img class="logo" src="images/proton2.png" alt="Proton Logo" />
            </a>
            <a class="navbar-brand" href="#">Car Dealership Management System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customize.html">Customize</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="car_entry.php">Car Entry</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="database.php">Database</a>
                    </li>
                </ul>
            </div>

            <form action="" method="GET">
                <div class="dropdown">
                    <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by Car Model
                    </button>
                    <ul class="dropdown-menu  dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="databaseSaga.php">Proton Saga</a></li>
                        <li><a class="dropdown-item" href="databaseIriz.php">Proton Iriz</a></li>
                        <li><a class="dropdown-item" href="databaseX50.php">Proton X50</a></li>
                        <li><a class="dropdown-item" href="databaseX70.php">Proton X70</a></li>
                        <li><a class="dropdown-item badge badge-danger" href="database.php">Clear Sort</a></li>
                    </ul>
                </div>
            </form>
        </nav>
    </header>

    <main>
        <div class="masthead">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- TABLE CONSTRUCTION -->
                            <table class="table">
                                <tr>
                                    <th>Car ID</th>
                                    <th>Model Name</th>
                                    <th>Color</th>
                                    <th>Drivetrain</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                                <?php
                                // LOOP TILL END OF DATA
                                while ($rows = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                                        <td>
                                            <?php echo $rows['id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['modelName']; ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['color']; ?>
                                        </td>
                                        <td>
                                            <?php echo $rows['drivetrain']; ?>
                                        </td>
                                        <td><a href="update.php?id=<?php echo $rows['id']; ?>"
                                                class="btn btn-primary">Update</a></td>
                                        <td><a href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger"
                                                onclick="DeleteConfirm()">Delete</a></td>
                                        <script>
                                            function DeleteConfirm() {
                                                confirm("Are you sure to delete the record");
                                            }
                                        </script>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
                <i class="fas fa-arrow-up"></i>
            </button>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
        <script src="tothetop.js"></script>
    </main>
</body>

</html>