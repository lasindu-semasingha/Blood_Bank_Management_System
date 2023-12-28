<?php
    include '../DB/config.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE FROM `service` WHERE sNo=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('location:service.php');
        }else{
            die(mysqli_error($conn));
        }
    }
?>