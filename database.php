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
$sql = " SELECT * FROM car ";
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
  <link rel="stylesheet" href="database.css" />
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
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <!-- TABLE CONSTRUCTION -->
              <table class="table">
                <tr>
                  <th>Car ID</th>
                  <th>Brand Name</th>
                  <th>Model Name</th>
                  <th>Engine Capacity</th>
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
                      <?php echo $rows['brandName']; ?>
                    </td>
                    <td>
                      <?php echo $rows['modelName']; ?>
                    </td>
                    <td>
                      <?php echo $rows['engineCapacity']; ?>
                    </td>
                    <td><a href='#' class="btn btn-primary">Update</a></td>
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
    </div>

    <footer>
      <p class="my-5">
        Copyright © 2022 – All Rights Reserved By Unreal Devs Academy
      </p>
    </footer>
  </main>
</body>

</html>