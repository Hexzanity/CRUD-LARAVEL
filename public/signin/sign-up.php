<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $insertQuery = "INSERT INTO clients (first_name, last_name, birthdate, address, email, password) VALUES ('$first_name','$last_name', '$birthdate', '$address', '$email', '$password')";

    if (mysqli_query($db, $insertQuery)) {
        echo '<div class="container justify-content-center mt-4">';
        echo '<div class="alert alert-success">Account added successfully.</div>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '
    <div class="alert alert-danger" role="alert">
    Incorrect <a href="#" class="alert-link">Please fill the empty field</a>. Try Again.
    <button style="color:Black" type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
  ';
    }
}

mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">

<style>
    body {
      background-image: url('../images/pic05.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 300px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    .btn {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .btn:hover {
      background-color: #45a049;
    }

    .text-center {
      text-align: center;
    }

    .mb-2 {
      margin-bottom: 2px;
    }

    .text-primary {
      color: #007bff;
    }

    .text-gradient {
      background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .font-weight-bold {
      font-weight: bold;
    }
  </style>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
              style="background-image: url('../images/fx.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="login">
      <div class="container text-center">
        <h1>Sign Up!<br> Your account</h1>

        <div class="login-form text-center">
        <form method="POST">
                    <div class="input-group input-group-outline mb-3">
                      <label for="first_name" class="form-label">First Name</label>
                      <input type="text" id = "first_name" name="first_name" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label for="last_name" class="form-label">Last Name</label>
                      <input type="text" id = "last_name" name="last_name" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label for="birthdate" class="form-label">birthdate</label>
                      <input type="date" id ="birthdate" name="birthdate" class="form-control text-center">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" id = "address" name="address" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" id = "email" name="email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" id ="password" name="password" class="form-control">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="submit"class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>

                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="sign-in.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.5"></script>
</body>

</html>
