<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home - Our Restaurant</title>
  <link rel="stylesheet" href="styles.css">
    <style>
         .hero {
          height: 300px;
          background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1500&q=80');
          background-size: cover;
          background-position: center;
          position: relative;
        }
        
        body {
          font-family: 'Segoe UI', sans-serif;
          background-color: #f9f9f9;
          color: #333;
        }

        
        .hero-overlay {
          background-color: rgba(0, 0, 0, 0.7);
          height: 100%;
          width: 100%;
          color: #fff;
          text-align: center;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
        }
        .hero-overlay h1 {
          font-size: 3rem;
          margin-bottom: 10px;
        }
        .hero-overlay p {
          font-size: 1.2rem;
          margin-bottom: 20px;
        }
        .hero-btn {
          padding: 10px 20px;
          background-color: #ff6347;
          color: white;
          text-decoration: none;
          border-radius: 4px;
          font-size: 1rem;
        }
        .hero-btn:hover {
          background-color: #e5533f;
        }

        /* Section title */
        .section-title {
          text-align: center;
          margin: 1rem 0 1rem;
          font-size: 2rem;
          color: #333;
        }

        /* Menu Grid */
        .menu-section {
          padding: 0 2rem 3rem;
        }
        .menu-grid {
          display: grid;
          grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
          gap: 20px;
        }

        /* Menu Card */
        .menu-card {
          background-color: #fff;
          border-radius: 10px;
          overflow: hidden;
          box-shadow: 0 2px 10px rgba(0,0,0,0.1);
          transition: transform 0.2s ease;
        }
        .menu-card:hover {
          transform: translateY(-5px);
        }
        .food-img {
          width: 100%;
          height: 180px;
          object-fit: cover;
        }
        .menu-info {
          padding: 15px;
        }
        .menu-info h3 {
          margin-bottom: 10px;
        }
        .menu-info p {
          font-size: 0.95rem;
          margin: 5px 0;
        }
        .price {
          font-weight: bold;
          color: #28a745;
        }

        /* Button */
        .btn.view-btn {
          margin-top: 10px;
          display: inline-block;
          padding: 8px 12px;
          background-color: #007bff;
          color: white;
          text-decoration: none;
          border-radius: 4px;
        }
        .btn.view-btn:hover {
          background-color: #0056b3;
        }

  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay">
      <h1>Welcome to TasteTime</h1>
      <p>Delicious Food. Fresh Ingredients. Served with Love.</p>
      <a href="login.php" class="btn hero-btn">Login</a>
    </div>
  </section>

  <!-- Food Items -->
  <main class="menu-section">
    <h2 class="section-title">Our Menu</h2>
    <div class="menu-grid">
      <?php
        $connection = mysqli_connect("localhost", "root", "", "restaurant");
        $query = "SELECT * FROM admindash";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['ID'];
            $image = $row['picture'];
            $name = $row['name'];
            $note = $row['note'];
            $cost = $row['cost'];
      ?>
      <div class="menu-card">
        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" class="food-img">
        <div class="menu-info">
          <h3><?php echo $name; ?></h3>
          <p><?php echo substr($note, 0, 60); ?>...</p>
          <p class="price">$<?php echo $cost; ?></p>
          <a href="login.php?id=<?php echo $id; ?>" class="btn view-btn">View Details</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </main>

</body>
</html>
