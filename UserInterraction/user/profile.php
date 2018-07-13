<?php
include "../includes/config.php";
include "../includes/db.php";
include "../modules/block_bubbles.php";
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
    
    $greeting = '
    <h2 class="lead">
    Welcome '.$username.'
    </h2>';
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
    <div class="row flex-row flex-nowrap">
        <div class="col-12 mw-100" id="forum">
            <div class="jumbotron p-3 p-md-3 text-white rounded bg-dark ">
                <div class="col-md-12 px-0 headerblog">
                    <h1 class="display-4 font-italic">Web Tech Forum</h1>
                    <p class="lead my-3">Share. Solve. Learn.</p>
                    <h2 class="lead my-3">
                        <?php 
                    echo $greeting ;
                    ?>
                    </h2>
                    <p class="text-right">
                        <a href="../logout.php">Logout</a>
                    </p>


                </div>
            </div>

            <div class="mw-100 row col-12">
                <div class="col-5">
                    <?php 
                    $id=$_SESSION['id'];
        			$forums = $db -> query("SELECT * FROM forum WHERE `user_id`='$id' AND status = 1 ORDER BY created_at DESC LIMIT 1; ");
                    while($row = $forums->fetch_assoc()){
                        $forum_id = $row['id'];
                        $topic = $row['topic'];
                        $subtopic = $row['sub_topic'];
                        $status = $row['status'];
                        $created_at = $row['created_at'];

                        if ($id == NULL){
                            echo $noForums;
                        }else{
                            echo '
                            <div class="card">
                            <h5 class="card-header">Your Latest Forum</h5>
                                <div class="card-body">
                                    <h5 class="card-title">'.$topic.'</h5>
                                    <p class="card-text">
                                        <p>'.$subtopic.'</p>
                                        <a href="#" role="button" class="btn btn-outline-dark" id="create">View Post</a>
                                    </p>
                                </div>
                            </div>
                            '; 
                            }
                        }
                        $noForums = '
                            <div class="card">
                                <h5 class="card-header">Start a Forum</h5>
                                <div class="card-body">
                                    <h5 class="card-title">Shout Out a Topic</h5>
                                    <p class="card-text">
                                    <p>You have not written any forums yet.</p>
        			    			<a href="create_forum.php" role="button" class="btn btn-outline-dark" id="create">Start a Forum</a></p>
                                </div>
                            </div>
                        ';
                    ?>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h4>Fresh Forums</h4>
                                <?php
                                        $id=$_SESSION['id'];
        			                    $all = $db -> query(
                                                    "SELECT * FROM forum 
                                                    AS f LEFT JOIN users AS u 
                                                    ON u.id = f.user_id 
                                                    WHERE f.status = 1 
                                                    ORDER BY f.created_at DESC 
                                                    LIMIT 3; ");
                                            while($latest = $all->fetch_assoc()){
                                                $username = $latest['username'];
                                                $forum_id = $latest['id'];
                                                $topic = $latest['topic'];
                                                $subtopic = $latest['sub_topic'];
                                                $status = $latest['status'];
                                                $created_at = $latest['created_at'];

                                                echo 
                                                '<div class="card-header">
                                                    <strong class="card-text">'.$topic.'</strong>
                                                    <div class="d-inline p-2">
                                                        '.$created_at.'
                                                    </div>
                                                    <div class="d-inline p-2">
                                                        by: '.$username.'
                                                    </div>
                                                </div>';
                                            }
                                    ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="list-group">
                        <a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-chevron-left"></span>Left</a>
                        <a href="#" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-chevron-right"></span>Right</a>
                        <a href="#" class="list-group-item">Courses Offered</a>
                        <a href="#" class="list-group-item">Third item</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mw-100">
            
        </div>

    </div>




</body>

</html>