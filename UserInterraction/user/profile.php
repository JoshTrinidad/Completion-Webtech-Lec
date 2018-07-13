<?php
include "../includes/config.php";
include "../includes/db.php";
$db = new Db();
session_start();


$checkUserId = $_SESSION['id'];
$checkUser = $_SESSION['username'];
    
if(isset($_SESSION['id'])){
    
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
        include "../modules/navbar.php";
        echo $greeting ;
    ?>
    <a href = "../logout.php">Logout</a>
    <div class="container-fluid">
        <div class="row flex-row flex-nowrap">
            <div class="row col-5">
                <div class="col-6 border">
                    <?php 
                    $id=$_SESSION['id'];
        			$forums = $db -> query("SELECT * FROM forum WHERE `user_id`='$id' AND status = 1 ORDER BY created_at DESC; ");

                    $noForums = '
                        <div class="card">
                            <h5 class="card-header">Start a Forum</h5>
                            <div class="card-body">
                                <h5 class="card-title">Shout Out a Topic</h5>
                                <p class="card-text">
                                <p>You have not written any forums yet.</p>
        						<a href="forum.php" role="button" class="btn btn-outline-dark" id="create">Start a Forum</a></p>
                            </div>
                        </div>
                    ';
                    
                    $latestblog = '
                        <div class="card">
                            <h5 class="card-header">Your Latest Forum</h5>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text">
                                    <p>You have not written any forums yet.</p>
                                    <a href="create_blogs.php" role="button" class="btn btn-outline-dark" id="create">Start a Forum</a>
                                </p>
                            </div>
                        </div>
                    ';

                     while($row = $forums->fetch_assoc()){
                        $forum_id = $row['id'];
                        $topic = $row['topic'];
                        $subtopic = $row['subtopic'];
                        $status = $row['status'];
                        $created_at = $row['created_at'];
                    }
                    
        			if (mysqli_num_rows($forums)==0){
                        print("$noForums");
                    }else{
                        echo $latestblog;
                    }
                    ?>
                  
                        </div>
                        <div class="col-6 border">.col-6</div>
                        <div class="col-6 border">.col-6</div>
                        <div class="col-6 border">.col-6</div>
                    </div>
                </div>
            </div>
                  


    
</body>
</html>