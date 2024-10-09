<?php
include 'connect.php';

function registerUser($username, $email, $password) {
    global $pdo;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    return $stmt->execute([$username, $email, $hashedPassword]);
}

function loginUser($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        return true;
    }
    return false;
}

// Function to reset password (this example just verifies email)
function resetPassword($email) {
    // This is a placeholder for actual password reset logic
    // You would typically send an email with a reset link here
    return true;
}

function getUserById($id) {
    global $pdo; // Assume you have a PDO connection
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateUserProfile($id, $fullName, $phoneNumber, $address, $city, $country, $bio, $profileImage) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE users SET full_name = ?, phone_number = ?, address = ?, city = ?, country = ?, bio = ?, profile_image = ? WHERE id = ?");
    return $stmt->execute([$fullName, $phoneNumber, $address, $city, $country, $bio, $profileImage, $id]);
}


?>
