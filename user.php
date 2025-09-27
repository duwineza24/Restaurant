<?php
session_start();
$id=$_SESSION['id'];

if(!isset($id)){
    header("location:home.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>User Dashboard - Food Menu</title>
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
      .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Adjust 3 or 4 per row */
      gap: 20px;
      padding: 20px;
    }

    .fetching {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .fetching img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 4px;
    }

    .fetching h2 {
      margin: 10px 0 5px;
    }

    .fetching p {
      margin: 5px 0;
    }

    .fetching button {
      margin: 5px;
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      background-color: #007BFF;
      color: white;
      cursor: pointer;
    }

    .fetching button:hover {
      background-color: #0056b3;
    }

 </style>
</head>
<body>
  <nav class="navbar">
    <h1>Food Dashboard</h1>
    <div class="nav-actions">
     
      <a href="logout.php" class="btn logout">Logout</a>
    </div>
  </nav>
 
    <div class="grid-container">
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
    <div class="fetching">
        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
        <h2><?php echo $name; ?></h2>
        <p><?php echo $note; ?></p>
        <p>$<?php echo $cost; ?></p>
        <a href="view.php?vd=<?php echo $id ?>"><button>View details</button></a>
        
        <a href="viewcomment.php?cd=<?php echo $id ?>"><button>View Comment</button></a>
    </div>
<?php } ?>
</div>
 

</body>
</html>
