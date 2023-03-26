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

    <link rel="stylesheet" href="login.css">

    <title>Log In</title>

  </head>

<body>
  <div class="masthead">
    <section>
      <div class="container overlay d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="card-header text-center">
            Welcome Back
          </div>
          <div class="card-body">
            <div class="text-center">
              <h2></h2>
              <form action="#" method="post">
                <div class="mb-3">
                  <label for="exampleInputUsername1" class="form-label">Username</label>
                  <input type="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp"
                    placeholder="Enter Username" name="username" required>
                </div>
                <div class=" mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password"
                    name="password" required>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>
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
</body>

</html>