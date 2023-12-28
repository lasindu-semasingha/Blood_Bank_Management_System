<?php
   include('../DB/config.php');

   if(isset($_POST['submit'])) {
 
    $hosName =  $_POST['hosName'];
    $hosAddress =  $_POST['hosAddress'];
 
    $sql = "INSERT INTO `hospital` (`hosName`, `hosAddress`) VALUES ('$hosName', '$hosAddress')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            echo "&nbsp&nbsp&nbspRegistration successfull";
            header("Location: hosList.php");
        }else{
            echo "That detail can't be entered check again";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>New Hospital</title>
		<link rel="icon" href="../resources/ico.png">
        <link href="../CSS/login.scss" rel="stylesheet" type="text/css">
    </head>
<body>
	<div class="top">
        <a class="index" href="admin.php">
            <img src="../resources/ico.png" alt="RubyCare">
            <h1>Health First</h1>
        </a>
    </div>
    <form method="post">
        <div class="login-block">
            <h1>Add Hospital</h1>
            <input type="text" value="" required placeholder="Hospital Name" id="hosName" name="hosName" />
            <input type="text" value="" required placeholder="Hospital Address" id="hosAddress" name="hosAddress" />
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>
    </form>
    <script src="../JS/script.js"></script>
</body>
</html>
