<?php
$conn = mysqli_connect("localhost", "root", "", "sneaker_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, price, image_url FROM sneakers";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="sneaker-card" data-name="' . htmlspecialchars($row['name']) . '">
        <img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['name']) . '">
        <div class="sneaker-name">' . htmlspecialchars($row['name']) . '</div>
        <div class="sneaker-price">₹' . htmlspecialchars($row['price']) . '</div>
        
         <a href="signup.html" class="buy-btn" ><button>BUY </button></a>
         <br></br>
        <a href="review.php" class="buy-btn" ><button>SEE REVIEWS </button></a>



    </div>';
}
?>
