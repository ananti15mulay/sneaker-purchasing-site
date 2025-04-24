<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sneaker Store</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
  font-family: 'Segoe UI', sans-serif;
  background: #f3f4f6;
  margin: 0;
  padding: 20px;
}

.store-container {
  max-width: 90%;
  margin: auto;
}

.search-bar {
  display: flex;
  justify-content: center;
  margin-bottom: 30px;
}

input[type="text"] {
  padding: 10px;
  width: 400px;
  border: 1px solid #ccc;
  border-radius: 8px;
  outline: none;
}

.sneakers-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 25px;
  justify-items: center;
}

.sneaker-card {
  background: white;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  padding: 15px;
  text-align: center;
  transition: transform 0.3s ease;
  width: 100%;
  max-width: 300px;
}

.sneaker-card:hover {
  transform: translateY(-5px);
}

.sneaker-card img {
  width: 100%;
  height: 200px;
  object-fit: contain;
  border-radius: 8px;
}

.sneaker-name {
  font-weight: bold;
  margin: 10px 0 5px;
  text-transform: capitalize;
}

.sneaker-price {
  color: #10b981;
  font-size: 1.1em;
}

  </style>
</head>
<body>
  <div class="store-container">
    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Search for sneakers" onkeyup="filterSneakers()">
    </div>
    <div class="sneakers-grid" id="sneakersGrid">
      <?php include("../backend/fetch_sneakers.php"); ?>
    </div>
  </div>

  <script>
    function filterSneakers() {
      const input = document.getElementById("searchInput").value.toLowerCase();
      const cards = document.querySelectorAll(".sneaker-card");

      cards.forEach(card => {
        const name = card.getAttribute("data-name").toLowerCase();
        card.style.display = name.includes(input) ? "block" : "none";
      });
    }
  </script>
</body>
</html>
