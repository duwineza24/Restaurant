
<?php 
$server="localhost";
$user="root";
$password="";
$databasa="restaurant";
$connection=mysqli_connect("localhost","root","","restaurant");

if(isset($_GET['sdid'])){
    $id=$_GET['sdid'];

    $deleteQuery="DELETE FROM admindash where ID='$id'";

    if(mysqli_query($connection,$deleteQuery)){
        header("location:admin.php");
    }
}
if(isset($_GET['sdid'])){
    $id=$_GET['sdid'];

    $deleteQuery="DELETE FROM admindash where ID='$id'";

    if(mysqli_query($connection,$deleteQuery)){
        header("location:admin.php");
    }
}



if (isset($_GET['comment_id'])) {
    $commentId = $_GET['comment_id'];
    $connection = mysqli_connect("localhost", "root", "", "restaurant");

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "DELETE FROM comment WHERE ID = $commentId";
    if (mysqli_query($connection, $query)) {
        header("Location: adminviewcomment.php"); // redirect back after deletion
        exit;
    } else {
        echo "Error deleting comment: " . mysqli_error($connection);
    }

    mysqli_close($connection);
} else {
    echo "Invalid request.";
}



?>