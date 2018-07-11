<?php
include "../includes/config.php";
include "../includes/db.php";
session_start();

$db =  new Db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "../modules/head.php"
    ?>

    <title>Log In</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-4">
                <strong>User Log-in</strong>
                <form class="form-login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>

                    <?php
                        if (isset($_SESSION['errmsg'])){
                        	echo $_SESSION['errmsg'];
                        	unset($_SESSION['errmsg']);
                        }else{
                        	echo "";
                        }
                    ?>

                    <div class="form-group">
                        <p class="text-right">
                            <a href="../registration/register.php">Don't have an account?</a>
                        </p>
                        <input class="btn btn-outline-dark" type="submit" name="submit" value="Login">
                    </div>
                </form>

                <?php
                if(isset($_POST['submit'])){
                    if(isset($_POST['username']) || isset($_POST['password'])){

                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        
                        $result = $db->query("SELECT id, username
                                            FROM users 
                                            WHERE (username = '$username' 
                                            AND password = md5('$password') 
                                            AND status = 1);");
                        $user = $result->fetch_assoc();

                        $uid = $db->query("SELECT id
                                            FROM users 
                                            WHERE (username = '$username' 
                                            AND password = md5('$password') 
                                            AND status =  1);");
                        $user = mysqli_fetch_array($uid);
                        $id = $row['id'];
                        

                        if(isset($user['id'])){
                            $_SESSION['id'] =  $user['id'];
                            $_SESSION['username'] = $user['username'];
                            header("location: ../user/profile.php");
                        }else{
                            $_SESSION['errmsg'] = '<div class = "alert alert-danger"><ul>
                                                    <li>Username or Password is invalid.</li>
                                                    </ul></div>';
				            header("location: login.php");
                        }

                    } 
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>