<?php
   include('../DB/config.php');

   $msg = "";

   if(isset($_POST['submit'])) {
 
    $location =  $_POST['location'];
    $time =  $_POST['time'];
    $date =  $_POST['date'];
 
    $sql = "INSERT INTO `donation` (`location`, `date`, `time`) VALUES ('$location', '$date','$time')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            $msg = "Adding Successful";
        }else{
            $msg = "Adding failed";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>New Donation</title>
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
            <h1>Add Donation Campaign Details</h1>
            <input type="text" value="" required placeholder="Location" id="location" name="location" />
            <input type="date" value="" required id="date" name="date" />
            <input type="time" value="" required id="time" name="time" />
            <p><?php echo $msg; ?></p>
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>
    </form>
    <script src="../JS/script.js"></script>
</body>
</html>
