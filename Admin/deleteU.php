<?php
    include '../DB/config.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `user` WHERE userId=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:user.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>