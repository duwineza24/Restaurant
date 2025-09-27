<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: home.php");
    exit;
}

$sdid = isset($_GET['sdid']) ? intval($_GET['sdid']) : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Deletion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 50px;
            text-align: center;
        }

        .box {
            background: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .btn {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-cancel {
            background-color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Are you sure you want to delete this item?</h2>
        <a href="delete.php?sdid=<?= $sdid ?>" class="btn btn-danger">Yes, Delete</a>
        <a href="admin.php" class="btn btn-cancel">Cancel</a>
    </div>
</body>
</html>
