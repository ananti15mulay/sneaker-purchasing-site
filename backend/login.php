<?php
$conn = new mysqli("localhost", "root", "", "sneaker_db");
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header("Location: ../frontend/store.php");
} else {
    echo "Login Failed!";
}
?>
