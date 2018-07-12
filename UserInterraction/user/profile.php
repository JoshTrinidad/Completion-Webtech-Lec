<?php
include "../includes/config.php";
include "../includes/db.php";

session_start();
if(isset($_SESSION['id'])){
    $checkUserId = $_SESSION['id'];
    $checkUser = $_SESSION['username'];
    
    $db = new Db();
    $sessionSql = $db->query("SELECT id, username, email, status
                            FROM users 
                            WHERE id = '$checkUserId'
                            AND status = 1;");
    while($row = $sessionSql->fetch_assoc()){
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $status = $row['status'];
    }
    $greeting = 'Welcome '.$username;
}else{
    header("location: ../login/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "../modules/head.php";
    ?>
    <title>My Profile</title>
</head>
<body>
    <?php 
    echo $greeting ;
    ?>
    <a href = "../logout.php">Logout</a>
</body>
</html>