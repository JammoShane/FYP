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

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

  <title>Home Page</title>
</head>

<body style="background-color:#1b2430">
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
          <li class="nav-item active">
            <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="saga.html">Customize</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="car_entry.php">Car Entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="database.php">Database</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Car Customizer</h1>
            </div>
            <div class="card-body">
              <img src="images/gears.png" alt="image of gears" class="img-fluid" />
              </br>
              </br>
              <p class="text-dark text-center">Customize an existing car's details to your liking</p>
              <button type="button" class="btn btn-block btn-primary" onclick="location.href = 'saga.html' ">
                Customize!
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Car Entry</h1>
            </div>
            <div class="card-body">
              <img src="images/x50_.png" alt="image of a Proton X50" class="img-fluid" />
              </br>
              </br>
              <p class="text-dark text-center">Add cars and their details to the existing database</p>
              <button type="button" class="btn btn-block btn-primary" onclick="location.href = 'car_entry.php' ">
                Enter!
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h1>Database</h1>
            </div>
            <div class="card-body">
              <img src="images/server.png" alt="image of a server room" class="img-fluid" />
              </br>
              </br>
              <p class="text-dark text-center">View existing car entries within the database</p>
              <button type="button" class="btn btn-block btn-primary" onclick="location.href = 'database.php' ">
                View!
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- Footer -->
  <footer class="text-center text-lg-start">
    </br>
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-car me-3"></i></i>Proton
            </h6>
            <!-- Links -->
            <p>
              <a href="https://www.facebook.com/ProtonCarsOfficial/" class="text-reset">
                <i class="fab fa-facebook-f me-3"></i>
                Facebook
              </a>
            </p>
            <p>
              <a href="https://www.instagram.com/protoncars/" class="text-reset">
                <i class="fab fa-instagram me-3"></i>
                Instagram
              </a>
            </p>
            <p>
              <a href="https://www.youtube.com/protoninteractive" class="text-reset">
                <i class="fab fa-youtube me-3"></i>
                Youtube
              </a>
            </p>
            <p>
              <a href="https://github.com/JammoShane/FYP" class="text-reset">
                <i class="fab fa-github me-3"></i>
                Github
              </a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Lengkok Dumbar, Jelutong, Penang</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              protonsupport@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i>018-245-4617</p>
            <p><i class="fas fa-print me-3"></i>019-505-1072</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.1);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://www.proton.com/en">www.proton.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>