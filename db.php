
<?php  
$server="localhost";
$user="root";
$password="";
$database="restaurant";
$connection=mysqli_connect($server,$user,$password,$database);

if(isset($_POST['sub'])){
    $id=$_POST['id'];
    $role=$_POST['role'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pw=$_POST['pw'];

    $pw_hash=password_hash($pw,PASSWORD_DEFAULT);

    $query="INSERT INTO food(ID,role,name,email,pw) VALUES ('$id','$role','$name','$email','$pw_hash')";

    if(mysqli_query($connection,$query)){
        header("location:login.php");
    }
}

if(isset($_POST['signin'])){
    $email=$_POST['EMAIL'];
    $pass=$_POST['PW'];

    $query="SELECT * FROM food WHERE email='$email'";

    $result=mysqli_query($connection,$query);

    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);

        if(password_verify($pass,$row['pw'])){
          session_start();

          $_SESSION['id']=$row['ID'];
          $_SESSION['role']=$row['role'];
          $_SESSION['name']=$row['name'];
          $_SESSION['email']=$row['email'];

       if ($row['role'] == 'admin') {
                header('Location: admin.php');
                
            } else if ($row['role'] == 'user') {
                header("Location: user.php");
               
            }
        } else {
            echo "Incorrect password.";
        }

        
    }
    else{
        // echo "user not found";
        header("location:login.php?message='User not found'");
    }
}



if(isset($_POST['submit'])){
    $id=$_POST['ID'];
    $img=$_POST['picture'];
    $name=$_POST['name'];
    $note=$_POST['note'];
    $cost=$_POST['cost'];
    

    $Query="INSERT INTO admindash(ID,picture,name,note,cost) VALUES ('$id','$img','$name','$note','$cost')";

    if(mysqli_query($connection,$Query)){
        header("location:admin.php");
    }
    else{
        echo"not saved";
    }

}

if(isset($_POST['updatesubmit'])){
    $id=$_POST['id'];
    $img=$_POST['picture'];
    $name=$_POST['name'];
    $note=$_POST['note'];
    $cost=$_POST['cost'];

    $Query="UPDATE admindash SET picture='$img', name='$name', note='$note', cost='$cost' WHERE ID='$id'";

    if(mysqli_query($connection,$Query)){
        header("location:admin.php");
    }
}


if(isset($_POST['subcom'])){
    $id=$_POST['id'];
    $comment=$_POST['comment'];

   

    $query="INSERT INTO comment(ID,comment) VALUES ('$id','$comment')";

    if(mysqli_query($connection,$query)){
        header("location:user.php");
    }
}

?>
