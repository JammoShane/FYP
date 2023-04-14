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
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <link rel="stylesheet" href="car_entry.css" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

  <title>Car Entry</title>
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
            <a class="nav-link" href="saga.html">Customize</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="car_entry.php">Car Entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="database.php">Database</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 px-0 d-none d-sm-block">
          <img src="images/x50_.png" alt="picture of a Proton X70" class="w-100 vh-100"
            style="object-fit: cover; object-position: left;">
        </div>
        <div class="col-sm-4 text-black ">
          <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm">
              </br>
              <h3 class="fw-bold mb-0">Car Entry Field</h3>
              </br>
            </div>
          </div>

          </br>
          </br>

          <div
            class="d-flex justify-content-center align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form action="connect.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <label for="modelName">Model Name: </label>
                </div>
                <div class="col-md-6">
                  <input class="input-group" type="text" id="modelName" name="modelName" required><br />
                </div>
              </div>
              </br>
              <div class="row">
                <div class="col-md-6">
                  <label for="color">Color:</label>
                </div>
                <div class="col-md-6">
                  <input class="input-group" type="text" id="color" name="color" required><br />
                </div>
              </div>
              </br>
              <div class="row">
                <div class="col-md-6">
                  <label for="drivetrain">Drivetrain:</label>
                </div>
                <div class="col-md-6">
                  <input class="input-group" type="text" id="drivetrain" name="drivetrain" required><br />
                </div>
              </div>
              </br>
              <div class="text-center">
                <button type="submit" class="btn btn-block btn-primary" onClick="EntrySuccess()">
                  Submit
                </button>
                <script>
                  function EntrySuccess() {
                    confirm("Record inserted successfully!");
                  }
                </script>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>

</html>