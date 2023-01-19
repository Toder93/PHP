<?php

include "connectare.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $cpu=$_POST['cpu'];
    $gpu=$_POST['gpu'];
    $ram=$_POST['ram'];
    $price=$_POST['price'];

    $sql="insert into name (name) values('$name')";
    $query=mysqli_query($con,$sql);

    
        $sql2="insert into cpu (cpu) values('$cpu')";
        $query2=mysqli_query($con,$sql2);
       
    

    
        $sql3="insert into gpu (gpu) values('$gpu')";
        $query3=mysqli_query($con,$sql3);
        
    

  
        $sql4="insert into ram (ram) values('$ram')";
        $query4=mysqli_query($con,$sql4);
       
    

   
        $sql5="insert into price (price) values('$price')";
        $query5=mysqli_query($con,$sql5);
        
    

    if($query5){
        header('location:index.php?msg=PC added!');
    }else{
        die(mysqli_error($con));
    }
}



?>















<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs3 mb-5" style="background-color: #841dd3">SALE</nav>

<div class="container">

<div class="text-center mb-4">
    <h3>Add a new PC</h3>
    <p class="text-muted">Fill the form</p>
</div>

<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw;min-width:300px;">
<div class="row">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
 <div></div>
    <div class="mb-3">
        <label class="form-label">CPU</label>
        <input type="text" class="form-control" name="cpu">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">GPU</label>
        <input type="text" class="form-control" name="gpu">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">RAM</label>
        <input type="text" class="form-control" name="ram">
    </div>
    <div></div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name="price">
    </div>
</div>
<div>

<button type="submit" class="btn btn-success" name="submit">Save</button>
<a href="index.php" class="btn btn-danger">Cancel</a>
</div>
</form>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>