<?php
$conn = mysqli_connect("localhost", "root", "", "sneaker_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password before storing (for security)
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Use prepared statement
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    // Redirect to login page after successful sign up
    header("Location: ../frontend/login.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
?>
