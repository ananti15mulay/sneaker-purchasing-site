<?php
$conn = mysqli_connect("localhost", "root", "", "sneaker_db");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // echo "Login Successful";
    $_SESSION['username'] = $username;
    // header("Location: ../frontend/dashboard.html");
    header("Location: ../frontend/review.php");

    exit();
} else {
    echo "Login Failed";
}
?>
