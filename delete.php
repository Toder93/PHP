<?php
include "connectare.php";
$id=$_GET['id'];
$sql="DELETE FROM name WHERE id=$id; DELETE FROM cpu WHERE id=$id;DELETE FROM gpu WHERE id=$id;DELETE FROM ram WHERE id=$id;DELETE FROM price WHERE id=$id";
    $result=mysqli_multi_query($con,$sql);
    if($result){
        header('location:index.php?msg=PC deleted!');
    }else{
        die(mysqli_error($con));
    }



?>