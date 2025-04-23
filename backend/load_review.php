<?php
$conn = mysqli_connect("localhost", "root", "", "sneaker_db");

$result = mysqli_query($conn, "SELECT content FROM reviews ORDER BY id DESC");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<p>" . $row['content'] . "</p><hr>"; // No escaping = XSS risk
}
?>
