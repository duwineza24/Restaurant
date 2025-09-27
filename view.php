<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:home.php");
    exit;
}

$server = "localhost";
$user = "root";
$password = "";
$database = "restaurant";
$connection = mysqli_connect($server, $user, $password, $database);

// Sanitize the ID to avoid SQL injection
$id = isset($_GET['vd']) ? intval($_GET['vd']) : 0;
$query = "SELECT * FROM admindash WHERE ID='$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

// If no result found
if (!$row) {
    echo "<h2>Item not found.</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>View Food Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f5f5f5;
    }

    .navbar {
      background: #333;
      color: #fff;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar .btn {
      background: #00aaff;
      color: white;
      padding: 8px 12px;
      text-decoration: none;
      border-radius: 4px;
      margin-left: 10px;
    }

    .container {
      max-width: 700px;
      margin: 40px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .container img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 6px;
    }

    .details {
      margin-top: 20px;
    }

    .details h2 {
      margin-bottom: 10px;
    }

    .details p {
      margin: 8px 0;
    }

    .back-link {
      display: inline-block;
      margin-top: 20px;
      background: #007BFF;
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      border-radius: 4px;
    }

    .back-link:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <h1>Food Details</h1>
    <div>
      <a href="user.php" class="btn">Back to Dashboard</a>
      <a href="logout.php" class="btn">Logout</a>
    </div>
  </nav>

  <div class="container">
    <img src="<?= htmlspecialchars($row['picture']); ?>" alt="<?= htmlspecialchars($row['name']); ?>">
    <div class="details">
      <h2><?= htmlspecialchars($row['name']); ?></h2>
      <p><strong>Description:</strong> <?= htmlspecialchars($row['note']); ?></p>
      <p><strong>Price:</strong> $<?= htmlspecialchars($row['cost']); ?></p>
      <a href="comment.php?cd=<?= $row['ID']; ?>" class="back-link">Leave a Comment</a>
    </div>
  </div>
</body>
</html>
