<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="homepage.css" />

  <title>Home Page</title>
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
            <a class="nav-link" href="homepage.html">Home <span class="sr-only">(current)</span></a>
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

  <main class="body my-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/idea.jpg" alt="image of a Bughatti Chiron" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <h1>Car Customization System</h1>
          <p>Customize an existing car's details to your liking</p>
          <button type="button" class="btn btn-primary" onclick="location.href = 'customize.html' ">
            Customize!
          </button>
        </div>
      </div>

      <br />

      <div class="row">
        <div class="col-md-6">
          <img src="images/chiron.jpg" alt="image of a Bughatti Chiron" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <h1>Car Entry</h1>
          <p>Add cars and their details to the existing database</p>
          <button type="button" class="btn btn-primary" onclick="location.href = 'car_entry.php' ">
            Enter!
          </button>
        </div>
      </div>

      <br />

      <div class="row">
        <div class="col-md-6">
          <img src="images/search.jpg" alt="image of a magnifying glass" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <h1>Search Entry</h1>
          <p>Search for cars and their details to the existing database</p>
          <button type="button" class="btn btn-primary" onclick="location.href = 'search.html' ">
            Search!
          </button>
        </div>
      </div>

      <br />

      <div class="row">
        <div class="col-md-6">
          <img src="images/bill.jpg" alt="image of a receipt" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <h1>Bill Generator</h1>
          <p>bing chilling</p>
          <button type="button" class="btn btn-primary" onclick="location.href = 'bill.html' ">
            Generate!
          </button>
        </div>
      </div>

      <br />

      <div class="row">
        <div class="col-md-6">
          <img src="images/server.jpg" alt="image of a server room" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <h1>Database</h1>
          <p>View the current database and its entries</p>
          <button type="button" class="btn btn-primary" onclick="location.href = 'database.php' ">
            View!
          </button>
        </div>
      </div>
    </div>

    <footer>
      <p class="my-5">
        Copyright © 2022 – All Rights Reserved By Unreal Devs Academy
      </p>
    </footer>
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