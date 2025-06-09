<?php
include "database.php";

$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_password'];
$dob = $_POST['dob'];

if ($password !== $confirm) {
    echo "Passwords do not match.";
    exit;
}

$hashed = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (email, password, dob) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $hashed, $dob);

if ($stmt->execute()) {
    echo "Account created successfully. You can now login.";
} else {
    echo "Error: " . $stmt->error;
}
?>