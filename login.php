
<?php 
if(isset($message)){
    $message=$_GET['message'];
}
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>

                    /* Header Styles */
            .creative-login-header {
            background: linear-gradient(135deg, #4e4376, #2b5876);
            color: #fff;
            padding: 1.5rem 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            }

            .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            }

            .logo {
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            }

            .auth-nav a {
            margin-left: 1.5rem;
            color: #ddd;
            text-decoration: none;
            font-weight: 500;
            position: relative;
            padding-bottom: 4px;
            transition: color 0.3s;
            }

            .auth-nav a:hover {
            color: #fff;
            }

            .auth-nav .highlight {
            background: #ff9a76;
            color: #2b5876;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: bold;
            transition: background 0.3s, color 0.3s;
            }

            .auth-nav .highlight:hover {
            background: #ff8060;
            color: #fff;
            }

            
        form{
            margin-top: 20px;
            background-color: rgb(56, 53, 53);
            color: white;
            width: 50%;
            margin-left: 25%;
            font-size: 20px;
            padding:20px;
            border-radius: 20px;

        }
        input{
            height:30px;
            width: 100%;
            border-radius: 5px;
            box-shadow: 2px 2px 2px black;
            margin-bottom:20px;
        }
        .button{
            background-color: rgb(63, 59, 59);
            color: white;
            font-size: 20px;
            width: 20%;
            margin-top:10px;
            margin-left: 15%;
            border-radius: 20px;
        }
        button:hover {
          background-color: #4CAF50; 
        color: white;
        }

            button{
                background-color: rgb(34, 32, 32);
                color: white;
                border-radius: 20px;
            }
            table{
                width: 100%;
                font-size: 20px;
                
            }
            th{
                background-color: blueviolet;
                color: white;
                border-radius: 5px;
            }
            td{
                text-align:center;
            }

    </style>
</head>
<header class="creative-login-header">
  <div class="container header-inner">
    <h1 class="logo">🍽️ TasteTime</h1>
    <nav class="auth-nav">
      <a href="home.php">Home</a>
      <a href="index.php" class="highlight">Register</a>
    </nav>
  </div>
</header>

<body>
     <form method="POST" action="db.php">
  
<input type="hidden" name="id"  placeholder="ID"><br>

<label for="Email"> Email</label><br>
<input type="email" name="EMAIL" placeholder="email"><br>
<p><?=(isset($message))?$message:'';?></p>
<label for="password">Password</label><br>
<input type="password" name="PW" placeholder="password"><br>

<button  type="submit" name="signin" class="button">submit</button>

 </form>

</body>
</html>