<?php
    include ('../DB/config.php');

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $id=$_GET['updateid'];
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];

        $sql = "UPDATE `user` SET `fname`='$fname' WHERE userId=$id";
        
        $result = $conn->query($sql);

        if($result == TRUE) {
            header('location:profile.php');
        }else{
            echo "update Error" . $conn->error;
        }
        $conn->close();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
		<link rel="icon" href="../resources/ico.png">
        <link href="../CSS/login.scss" rel="stylesheet" type="text/css">
    </head>
<body>
	<div class="top">
        <a class="index" href="../index.php">
            <img src="../resources/ico.png" alt="RubyCare">
            <h1>Health First</h1>
        </a>
    </div>
    <form method="post">
        <div class="login-block">
            <h1>Add New First Name</h1>
            <div class="name">
                <input type="text" value="" required placeholder="New First Name" id="firstname" name="fname" />
            </div>
            <p class="error-message" id="error-message"></p>
            <button type="submit" name="submit" id="submit">Update</button>
        </div>
    </form>
</body>
</html>
