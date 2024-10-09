<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    if ($password === $confirmPassword) {
        if (registerUser($username, $email, $password)) {
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Successful!',
                    text: 'Your account has been created successfully.',
                    confirmButtonText: 'Login',
                    timer: 3000
                }).then((result) => {
                    if (result.isConfirmed || result.isDismissed) {
                        window.location.href = 'login.php';
                    }
                });
            });
          </script>";
        } else {
            echo "Registration failed. Please try again.";
        }
    } else {
        $error = "Passwords do not match.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="login.css">
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const passwordField = document.getElementById('password');
            const confirmPasswordField = document.getElementById('confirm-password');
            const passwordError = document.getElementById('password-error');
            const form = document.querySelector('form');

            confirmPasswordField.addEventListener('input', () => {
                if (confirmPasswordField.value !== passwordField.value) {
                    passwordError.style.display = 'block';
                } else {
                    passwordError.style.display = 'none';
                }
            });

            form.addEventListener('submit', (e) => {
                if (confirmPasswordField.value !== passwordField.value) {
                    e.preventDefault(); // Prevent form submission
                    passwordError.style.display = 'block';
                }
            });
        });
    </script>
</head>

<body>
    <div class="header">
        <!-- Logo -->
        <div class="logo">
            <img src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/61f1783102af823e148740c8_Logo.svg"
                width="135" alt="Capital logo" />
        </div>

        <div class="contact">
            Need help? <span class="cont">Contact us</span>
        </div>
    </div>

    <!-- Container -->
    <div class="login-page">
        <!-- Register Form Container -->
        <h2>Create an Account</h2>
        <div class="form-container">
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username <span class="required">*</span></label>
                    <input type="text" name="username" id="username" placeholder="Choose a username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password <span class="required">*</span></label>
                    <input type="password" name="password" id="password" placeholder="Create a password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                    <input type="password" name="confirm-password" id="confirm-password"
                        placeholder="Confirm your password" required>
                </div>
                <p id="password-error" class="error-message">Passwords do not match.</p>
                <button type="submit" class="btn">Register</button>
                <p class="help-text">Already have an account? <a href="login.php">Sign in</a></p>
            </form>
        </div>

        <!-- Footer -->
        <footer>
            <p>Regulated activities are carried out on behalf of the Capital International Group by its licensed member
                companies. Full details can be viewed <a href="#">here</a>.</p>
        </footer>
    </div>
</body>

</html>