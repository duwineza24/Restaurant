
<?php
$server="localhost";
$user="root";
$password="";
$database="restaurant";
$connection=mysqli_connect($server,$user,$password,$database);

$id=$_GET['id'];
$query="SELECT * FROM admindash WHERE ID='$id'";
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         
        form{
            margin-top:20px;
            color: brown;
            background-color: black;
            font-size: 20px;
            width: 50%;
            margin-left: 20%;
            padding: 20px;
            border-radius: 10px;
        }
        input{
            width: 100%;
            height: 30px;
            margin-bottom: 10px;
             border-radius: 5px;
        }
        textarea{
            width: 100%;
            margin-bottom: 10px;
             border-radius: 5px;
        }
        button:hover{
            background-color: blueviolet;
            color: rgb(7, 7, 7);
        }
        button{
            width: 100px;
            height: 35px;
            border-radius: 5px;
            font-size: 15px;
        }
        /* Admin Header */
        .admin-header {
        background: #333;
        color: #f8f8f8;
        padding: 1rem 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }

        .header-inner {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .logo {
        font-size: 1.8rem;
        font-weight: bold;
        }

        .nav a {
        color: #ddd;
        text-decoration: none;
        margin-left: 20px;
        font-weight: 500;
        transition: color 0.3s;
        }

        .nav a:hover {
        color: #fff;
        }

        .nav .cta {
        background-color: #ff6347;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        color: #fff;
        }

        .nav .cta:hover {
        background-color: #e5533f;
        }

    </style>
</head>
<body>
    <header class="admin-header">
  <div class="container header-inner">
    <h1 class="logo">🍽️ TasteTime Admin</h1>s
    <nav class="nav">
      <a href="admin.php">Dashboard</a>
      <a href="addfood.php">Add Food</a>
      <a href="logout.php" class="cta">Logout</a>
    </nav>
  </div>
</header>

     <form action="db.php" method="POST">
       
        <input  name="id" type="hidden" value="<?=$row['ID']; ?>" placeholder="enter your id"><br>
        <label for="image">Image</label><br>  
        <input type="text" name="picture" value="<?=$row['picture']; ?>" placeholder="enter the link of image"><br>
        <label for="name">Name</label><br>  
        <input type="text" name="name" value="<?=$row['name']; ?>" placeholder="enter the name of food"><br>
        <label for="note">Description</label><br>
        <textarea name="note" placeholder="Description about the food"><?=$row['note']; ?></textarea><br>
       <label for="cost">Cost</label>
       <input type="number" name="cost" value="<?=$row['cost']; ?>" placeholder="Enter the cost of food">
       <button name="updatesubmit">Addfood</button>
    </form>
</body>
</html>