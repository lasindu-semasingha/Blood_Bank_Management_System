<?php
    include '../DB/config.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `feedback` WHERE fId=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:feedback.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>