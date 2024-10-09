<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (loginUser($username, $password)) {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Login Successful!',
                text: 'Your account has been logged in successfully.',
                confirmButtonText: 'Go To Profile',
                timer: 3000
            }).then((result) => {
                if (result.isConfirmed || result.isDismissed) {
                    window.location.href = 'profile.php';
                }
            });
        });
      </script>";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
        <!-- Include SweetAlert CSS and JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div class="header">
        <!-- Logo -->
        <div class="logo">
            <img
            src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/61f1783102af823e148740c8_Logo.svg"
            width="135"
            alt="Capital logo"
          />        </div>

          <div class="contact">
            Having trouble? <span class="cont">Contact us</span>
          </div>
        
    </div>
    
    <!-- Container -->
    <div class="login-page">
        <!-- Login Form Container -->
        <h2>Welcome back</h2>
        <div class="form-container">
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username <span class="required">*</span></label>
                    <input type="text" name="username" id="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password <span class="required">*</span></label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn">Sign in</button>
                <p class="help-text">Having trouble signing in?</p>
                <div class="links">
                    <a href="register.php">Register</a> | 
                    <a href="forgot-password.php">Forgotten Password</a>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <footer>
            <p>Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full details can be viewed <a href="#">here</a>.</p>
        </footer>
    </div>
</body>
</html>
