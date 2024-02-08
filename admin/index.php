<?php

// session_start();


// // Check if the user is logged in
// if(isset($_SESSION['email']) && $_SESSION['access_level'] === 1) {
//     // Redirect to another page (dashboard, home, etc.)
    
 
//     header("Location: views/dashboard_admin.php");
//     exit;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      max-width: 400px;
      margin: auto;
      margin-top: 100px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2>Admin Panel Login</h2>
  <form method="POST" action="backend/login">
    <div class="form-group">
      <label for="username">Email</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="email@email.com">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="password">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

