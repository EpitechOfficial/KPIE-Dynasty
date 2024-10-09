<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const passwordField = document.getElementById('password');
            const confirmPasswordField = document.getElementById('password_confirmation');
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
                    e.preventDefault();
                    passwordError.style.display = 'block';
                }
            });
        });
    </script>
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/61f1783102af823e148740c8_Logo.svg" width="135" alt="Capital logo" />
        </div>
        <div class="contact">
            Need help? <span class="cont">Contact us</span>
        </div>
    </div>

    <div class="login-page">
        <h2>Create an Account</h2>
        <div class="form-container">
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Username <span class="required">*</span></label>
                    <input type="text" name="username" id="username" placeholder="Choose a username" value="{{ old('username') }}" required>
                    @error('username') <p class="error-message">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                    @error('email') <p class="error-message">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password <span class="required">*</span></label>
                    <input type="password" name="password" id="password" placeholder="Create a password" required>
                    @error('password') <p class="error-message">{{ $message }}</p> @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password <span class="required">*</span></label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required>
                </div>
                <p id="password-error" class="error-message" style="display:none;">Passwords do not match.</p>
                <button type="submit" class="btn">Register</button>
                <p class="help-text">Already have an account? <a href="{{ route('login.show') }}">Sign in</a></p>
            </form>
        </div>

        <footer>
            <p>Regulated activities are carried out on behalf of the Capital International Group by its licensed member
                companies. Full details can be viewed <a href="#">here</a>.</p>
        </footer>
    </div>

    @if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get("success") }}',
            confirmButtonText: 'Login',
        }).then((result) => {
            if (result.isConfirmed || result.isDismissed) {
                window.location.href = '{{ route("login.show") }}';
            }
        });
    </script>
    @endif

</body>

</html>
