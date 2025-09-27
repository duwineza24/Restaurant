
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                    .register-header {
            background: url('https://www.transparenttextures.com/patterns/linen.png');
            background-color: #f4f4f4; /* Light gray fallback */
            color: #333;
            padding: 3rem 1rem;
            text-align: center;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            }
            .register-header .container {
            max-width: 600px;
            margin: 0 auto;
            }

            .register-header h1 {
            font-size: 2.8rem;
            margin-bottom: 0.5rem;
            }

            .register-header p {
            font-size: 1.1rem;
            margin-bottom: 1.2rem;
            font-weight: 500;
            }

            .auth-nav a {
            
            text-decoration: underline;
            font-weight: 600;
            transition: color 0.3s;
            }

                    .a:link {
        color: #0066cc;
        }

        /* Visited links */
        a:visited {
        color: #551a8b;
        }

        /* Hover state */
        a:hover {
        color: #004999;
        text-decoration: underline;
        }

        /* Active (when clicked) */
        a:active {
        color: #003366;
        }
        
     form{
        background-color: rgb(34, 32, 32);
        color: white;
        width: 50%;
        margin-left: 25%;
        font-size: 20px;
        padding:20px;
        border-radius: 20px;

     }
     .input{
        height:30px;
        width: 100%;
        border-radius: 5px;
        box-shadow: 2px 2px 2px black;
        margin-bottom:20px;
     }
     .button{
        background-color: rgb(34, 32, 32);
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
            background-color:blueviolet;
            color: white;
            border-radius: 5px;
        }
        td{
            text-align:center;
        }

    </style>
</head>
<header class="register-header">
  <div class="container">
    <h1>Create Your Account</h1>
    <p>Join us and start enjoying delicious food today!</p>
    <nav class="auth-nav">
      <a href="home.php">Home</a> |
      <a href="login.php">Already have an account? Login</a>
    </nav>
  </div>
</header>

<body>
     <form method="POST" action="db.php">
  
<input type="hidden" name="id"  placeholder="ID"><br>


<label for="firstname">Name</label><br>
<input class="input" type="text" name="name" placeholder="firstname"><br>
<label for="role">Role</label><br>
<label><input type="radio" name="role" value="admin">Admin</label><br>
<label><input type="radio" name="role" value="user">User</label><br><br>
<label for="Email"> Email</label><br>
<input class="input" type="email" name="email" placeholder="email"><br>
<label for="password">Password</label><br>
<input class="input" type="password" name="pw" placeholder="password"><br>

<button  type="submit" name="sub" class="button">submit</button>
 </form>

</body>
</html>