<?php
include "../includes/config.php";
include "../includes/db.php";

$error = "";
session_start();
$db = new Db();
$id = $_SESSION['id'];

#die($id);

if(isset($_POST['submit']) && isset($id)){
    $topic = $_POST['topic'];
    $subtopic = $_POST['subtopic'];

    if(isset($topic) && isset($subtopic)){
        $result = $db->query("INSERT INTO forum(topic , sub_topic, user_id) VALUES ('$topic', '$subtopic' , '$id')");
        header("location: profile.php");
    }else{
        echo $error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../modules/head.php"; ?>
    <title>Create Forum</title>
</head>

<body style=" padding-bottom: 10%; ">
    <div class="container-fluid">
        <div class="col-12 col-sm-3">

        </div>
        <div class="container col-12 col-sm-9">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="container-fluid">
                    <br>
                    <h4>Start Forum</h4>
                    <p>Topic: </p>
                    <input type="text" name="topic" class="form-control" required>

                    <br><br>

                    <p>Forum: </p>
                    
                    <textarea name="subtopic" class="form-control" cols="100" rows="15" placeholder="Enter text here..." required ></textarea>
                    <br>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-outline-dark">Post</button>
                    </div>
                </div>

                
            </form>
        </div>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</body>

</html>