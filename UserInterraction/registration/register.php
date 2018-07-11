<?php
include "../includes/config.php";
include "../includes/db.php";

//session_start();

$error = "";
$db = new Db();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../modules/head.php";
    ?>
    
    <title>Registration</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-center justify-content-center" >
            <div class="col-4">
                <strong>Registration</strong>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email">
                    </div>

                    <?php
                    if(isset($_POST['submit'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];


                        if(empty($username) || empty($password) || empty($email)){
                            echo '<div class = "alert alert-warning"><ul>';
                        
                	    	if(empty($username)){
                	    		echo '<li>Username field is empty</font></li>';
                	    		echo $error;
                	    	}
                        
                	    	if(empty($password)){
                	    		echo '<li>Password field is empty</font></li>';
                	    		echo $error;
                	    	}
                        
                	    	if(empty($email)){
                	    		echo '<li>Email field is empty</font></li>';
                	    		echo $error;
                            }

                            echo '</ul></div>';
                	    }else{
                            $result = $db->query("INSERT INTO users (username, password, email) VALUES('$username', md5('$password'), '$email'); ");
                            #echo '<input type = "reset" type="hidden">';
                            echo 
                            '<div class = "alert alert-success">
                                <p>You have successfully registered your account :)</p>
                                <p><a href="../login/login.php">Sign In</a></p>
                            </div>';
                        }   
                    }
                    ?>

                    <div class="form-group">
                        <p class="text-right"><a href="../login/login.php">Already have an account?</a></p>
                        <input class="btn btn-outline-dark" type="submit" name="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>