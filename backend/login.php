<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "sneaker_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        $_SESSION['username'] = $username;
        header("Location: ../frontend/review.php");
        exit();
    }
}

echo "Login Failed";
?>
