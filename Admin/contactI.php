<?php
   include('../DB/config.php');

   $msg="";

   if(isset($_POST['submit'])) {
 
    $message =  $_POST['message'];
    $sMessage =  $_POST['sMessage'];
 
    $sql = "INSERT INTO `contact` (`message`, `sMessage`) VALUES ('$message', '$sMessage')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            $msg = "Message sent successfully";
        }else{
            $msg = "Message send failed";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Message</title>
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
    <form method="post" onSubmit="return validate();">
        <div class="login-block">
            <h1>Create Message</h1>
                <input type="text" value="" required placeholder="Type Here..." id="message" name="message" />
                <input type="text" value="" required placeholder="Type Here..." id="sMessage" name="sMessage" />
                
            <p class="error-message" id="error-message"><?php echo $msg; ?></p>
            <button type="submit" name="submit" id="submit">Send</button>
        </div>
    </form>
    <script src="../JS/script.js"></script>
</body>
</html>
