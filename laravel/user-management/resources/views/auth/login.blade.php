<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="header">
        <!-- Logo -->
        <div class="logo">
            <img src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/61f1783102af823e148740c8_Logo.svg"
                width="135" alt="Capital logo" />
        </div>
        <div class="contact">
            Having trouble? <span class="cont">Contact us</span>
        </div>
    </div>

    <!-- Container -->
    <div class="login-page">
        <!-- Login Form Container -->
        <h2>Welcome back</h2>
        <div class="form-container">
            @if(session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed!',
                    text: '{{ session('error') }}',
                    timer: 3000
                });
            </script>
            @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf
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
                    <a href="{{ route('register.show') }}">Register</a> |
                    <a href="#">Forgotten Password</a>
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
