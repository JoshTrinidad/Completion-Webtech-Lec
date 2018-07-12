<?php
    include "config.php";
    include "db.php";

    session_start();

    if(isset($_SESSION['u_id'])){
        $db = new Db();
        $checkUserId = $_SESSION['u_id'];
        $checkUser = $_SESSION['u_username'];
        $session_query = $db->query("SELECT 'id' , 'username' , 'password' , 'created_at' , 'status' FROM users WHERE username = '$checkUser' WHERE status = 1;");
        $row = mysqli_fetch_array($session_query, MYSQLI_ASSOC);
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
        $created_at = $row['created_at'];
        $status = $row['status'];
    }
    else{
        header("Location: login.php");
        exit;
    }
?>