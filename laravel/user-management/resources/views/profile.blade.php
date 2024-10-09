<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* Basic styling for the profile */
  
        .profile-container {
            max-width: 800px;
            margin: auto;
            border: 2px solid #c69c5a;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .profile-header img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
        }
        .profile-info {
            margin: 20px 0;
        }
        .profile-info input, .profile-info textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-weight: 600;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            border: none;
        }
        .btn:hover {
            background-color: #5e4010;
        }
    </style>
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
    <h2 style="text-align: center">User Profile</h2>
    <div class="profile-container">
        <form method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
            @csrf
            <div class="profile-header">
                <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('images/default-avatar.png') }}" alt="Profile Image" class="profile-image">
                <input type="file" name="profile_image">
            </div>
            <div class="profile-info">
                <label>Full Name</label>
                <input type="text" name="full_name" value="{{ old('full_name', $user->full_name) }}">

                <label>Phone Number</label>
                <input type="text" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}">

                <label>Address</label>
                <input type="text" name="address" value="{{ old('address', $user->address) }}">

                <label>City</label>
                <input type="text" name="city" value="{{ old('city', $user->city) }}">

                <label>Country</label>
                <input type="text" name="country" value="{{ old('country', $user->country) }}">

                <label>Bio</label>
                <textarea name="bio">{{ old('bio', $user->bio) }}</textarea>

                @if (session('error'))
                    <p style='color: red;'>{{ session('error') }}</p>
                @endif
                @if (session('success'))
                    <p style='color: green;'>{{ session('success') }}</p>
                @endif

                <button type="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
</body>

</html>
