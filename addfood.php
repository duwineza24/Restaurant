
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
   
   </style>
</head>
<body>


  <nav class="navbar">
    <h1>Admin Panel</h1>
    <div class="nav-actions">
      <a href="admin.php"  class="btn">Back to Dashboard</a>
      <a href="logout.php" class="btn logout">Logout</a>
    </div>
  </nav>
    <form action="db.php" method="POST">
       
        <input  name="id" type="hidden" placeholder="enter your id"><br>
        <label for="image">Image</label><br>  
        <input type="text" name="picture" placeholder="enter the link of image"><br>
        <label for="name">Name</label><br>  
        <input type="text" name="name" placeholder="enter the name of food"><br>
        <label for="note">Description</label><br>
        <textarea name="note" placeholder="Description about the food"></textarea><br>
       <label for="cost">Cost</label>
       <input type="number" name="cost" placeholder="Enter the cost of food">
       <button name="submit">Addfood</button>
    </form>

 
</body>
</html>