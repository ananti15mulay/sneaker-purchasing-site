<!DOCTYPE html>
<html>
<head>
  <title>Leave a Review - Sneaker Store</title>
  <!-- <link rel="stylesheet" href="style.css"> -->

</head>
<body>
  <h1>Leave a Review</h1>
  <form action="../backend/review.php" method="POST">
    <textarea name="review" rows="5" cols="40" placeholder="Write your review..."></textarea><br><br>
    <button type="submit">Submit Review</button>
  </form>

  <h2>All Reviews</h2>
  <div>
    <?php include("../backend/load_review.php"); ?>
  </div>
</body>
</html>
