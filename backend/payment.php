<?php
$card = $_POST['card'];
$expiry = $_POST['expiry'];
$cvv = $_POST['cvv'];
echo "<p>Payment processed for card ending in " . substr($card, -4) . ". (Data was not encrypted!)</p>";
?>