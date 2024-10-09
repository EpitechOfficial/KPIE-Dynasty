<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    if (resetPassword($email)) {
        echo "Password reset link has been sent to your email.";
    } else {
        echo "Failed to send reset link.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="header">
        <!-- Logo -->
        <div class="logo">
            <img
            src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/61f1783102af823e148740c8_Logo.svg"
            width="135"
            alt="Capital logo"
            />
        </div>

        <div class="contact">
            Need help? <span class="cont">Contact us</span>
        </div>
    </div>
    
    <!-- Container -->
    <div class="login-page">
        <!-- Forgot Password Form Container -->
        <h2>Reset Your Password</h2>
        <div class="form-container">
            <form method="POST">
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <button type="submit" class="btn">Send Reset Link</button>
                <p class="help-text">Remember your password? <a href="login.php">Sign in</a></p>
            </form>
        </div>

        <!-- Footer -->
        <footer>
            <p>Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full details can be viewed <a href="#">here</a>.</p>
        </footer>
    </div>
</body>
</html>
