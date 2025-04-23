<?php
$conn = mysqli_connect("localhost", "root", "", "sneaker_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$review = $_POST['review'];

// Use prepared statement to safely insert review (prevents SQL injection)
$stmt = $conn->prepare("INSERT INTO reviews (content) VALUES (?)");

if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $review);

if ($stmt->execute()) {
    header("Location: ../frontend/review.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
?>
