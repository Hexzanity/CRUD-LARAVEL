<?php
session_start();
require 'db.php';
include 'header-sign.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE user='$username' AND pass='$password'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header('Location: http://127.0.0.1:8000/charts');
        exit;
    }

    $query = "SELECT * FROM client WHERE email='$username' AND password='$password'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['client_id'] = $row['client_id'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        header('Location: ../order/dist/order.php');
        exit;
    }

    echo '
    <div class="alert alert-danger" role="alert">
    Incorrect <strong>Email or User / Password!</strong></a>. Try Again.
    <button style="color:Black" type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
  ';
}
?>

<!DOCTYPE html>
<html lang="en">

<script>
    var closeButton = document.querySelector('.alert .close');

// Add a click event listener to the close button
closeButton.addEventListener('click', function() {
  // Get the parent element (the alert div) and remove it from the document
  var alertElement = closeButton.parentNode;
  alertElement.parentNode.removeChild(alertElement);
});
</script>


<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h4>Welcome!</h4>
      </div>
      <div class="card-body text-center">
        <form method="POST" role="form" class="text-start">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Email/User</label>
            <input type="text" class="form-control" name="username">
          </div>
          <div class="input-group input-group-outline mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <div class="form-check form-switch d-flex align-items-center mb-3">
            <input class="form-check-input" type="checkbox" id="rememberMe" checked>
            <label class="form-check-label mb-0 ms-3" for="rememberMe" style="color:black;">Remember me</label>
          </div>
          <div class="text-center">
            <button type="submit" name="login" class="btn-primary">Sign in</button>
          </div>
          <p class="mt-4 text-sm text-center">
            Don't have an account?
            <a href="sign-up.php" class="text-primary">Sign up</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
