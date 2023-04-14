<?php

$conn = new mysqli('localhost', 'root', '', 'car_dealership');
if ($conn->connect_error) {
  die('Connection Failed : ' . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {

  function validate($data)
  {

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

  }

  $uname = validate($_POST['username']);

  $pass = validate($_POST['password']);

  if (empty($uname)) {

    //header("Location: index.php?error=User Name is required");


    exit();

  } else if (empty($pass)) {

    //header("Location: index.php?error=Password is required");

    exit();

  } else {

    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

      $row = mysqli_fetch_assoc($result);

      if ($row['username'] === $uname && $row['password'] === $pass) {

        echo "Logged in!";

        $_SESSION['username'] = $row['username'];

        //$_SESSION['name'] = $row['name'];

        $_SESSION['id'] = $row['id'];

        header("Location: homepage.php");

        exit();

      } else {

        //header("Location: index.php?error=Incorect User name or password");
        header("Location: error.php");

        exit();

      }

    } else {

      //header("Location: index.php?error=Incorect User name or password");
      //echo "<h2><center> Login Failed! Incorrect username or password.</center></h2>";
      header("Location: error.php");
      exit();

    }

  }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="login.css">

    <title>Log In</title>

  </head>

<body>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8 px-0 d-none d-sm-block">
          <img src="images/x70.png" alt="picture of a Proton X70" class="w-100 vh-100"
            style="object-fit: cover; object-position: left;">
        </div>
        <div class="col-sm-4 text-black ">
          <div class="row">
            <div class="col-sm-4">
              </br>
              <img src="images/proton2.png" class="logo"></i>
            </div>
            <div class="col-sm">
              </br>
              </br>
              <h3 class="fw-bold mb-0">Dealership Management System</h3>
            </div>
          </div>

          </br>
          </br>

          <div
            class="d-flex justify-content-center align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form action="#" method="post" style="width: 20rem;">

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log In</h3>

              <div class="form-outline mb-4">
                <input type="text" id="form2Example18" class="form-control form-control-lg" name="username" required>
                <label class="form-label" for="form2Example18">Username</label>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="form2Example28" class="form-control form-control-lg" name="password" required>
                <label class="form-label" for="form2Example28">Password</label>
              </div>

              <div class="pt-1 mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
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