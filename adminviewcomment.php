<?php
session_start();
$id = $_SESSION['id'];

if (!isset($id)) {
    header("location:home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Dashboard - View Comments</title>
  <link rel="stylesheet" href="styles.css">
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

    .nav-actions .btn {
      margin-left: 10px;
      background: #00aaff;
      color: #fff;
      padding: 8px 12px;
      text-decoration: none;
      border-radius: 4px;
    }

    h2.page-title {
      text-align: center;
      margin-top: 30px;
      font-size: 28px;
      color: #333;
    }

    .back-to-dashboard {
      text-align: center;
      margin: 20px 0;
    }

    .back-btn {
      background-color: #28a745;
      padding: 10px 16px;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-weight: 600;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .back-btn:hover {
      background-color: #218838;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      padding: 30px 20px;
    }

    .fetching {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      text-align: left;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .fetching p {
      margin: 0 0 10px;
      color: #333;
      font-size: 16px;
    }

    .fetching small {
      color: #666;
      font-size: 13px;
    }

    .no-comments {
      text-align: center;
      padding: 50px;
      font-size: 18px;
      color: #777;
    }

    @media (max-width: 600px) {
      h2.page-title {
        font-size: 22px;
      }

      .fetching {
        padding: 15px;
      }

      .fetching p {
        font-size: 14px;
      }

      .back-btn {
        font-size: 14px;
        padding: 8px 14px;
      }
    }
</style>
</head>
<body>
  <nav class="navbar">
    <h1>Food Dashboard</h1>
    <div class="nav-actions">
      <a href="admin.php" class="btn">Back</a>
      <a href="logout.php" class="btn logout">Logout</a>
    </div>
  </nav>

  <h2 class="page-title">User Comments</h2>

  <!-- Back to Dashboard Button -->
 
  <div class="grid-container">
    <?php
    $connection = mysqli_connect("localhost", "root", "", "restaurant");

    if (!$connection) {
        echo '<div class="no-comments">Database connection failed.</div>';
        exit;
    }

    $query = "SELECT * FROM comment ORDER BY ID DESC";
    $result = mysqli_query($connection, $query);
     
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $commentId = $row['ID'];
            $comment = htmlspecialchars($row['comment']);
           
          echo "
<div class='fetching'>
  <p>$comment</p>
  <small>Comment ID: $commentId</small>
  <form method='GET' action='delete.php'>
    <input type='hidden' name='comment_id' value='$commentId' />
    <button type='submit' style='margin-top:10px; padding:6px 12px; background-color:#dc3545; color:white; border:none; border-radius:4px; cursor:pointer;'>Delete</button>
  </form>
</div>
";

        }
    } else {
        echo '<div class="no-comments">No comments have been submitted yet.</div>';
    }

    mysqli_close($connection);
    
    ?>
  </div>
   <div class="back-to-dashboard">
    <a href="admin.php" class="back-btn">← Back to Dashboard</a>
  </div>

</body>
</html>
