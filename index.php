
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PCs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
</br>
    <nav class="navbar navbar-light justify-content-center fs3 mb-5" style="background-color: #841dd3">Calcuatoare</nav>

    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        
        
        ?>
        <a href="add.php" class="btn btn-dark mb-3">Add</a>
    </div>
    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Procesor</th>
      <th scope="col">Placa Video</th>
      <th scope="col">Rami</th>
      <th scope="col">Pret $$$</th>
      <th scope="col">Actiuni</th>
    </tr>
  </thead>
  <tbody>
    <?php

    include "connectare.php";
    $sql="SELECT name.id,name.name,cpu.cpu,gpu.gpu,ram.ram,price.price FROM name,cpu,gpu,ram,price WHERE name.id=cpu.id && cpu.id=gpu.id && gpu.id=ram.id && ram.id=price.id ORDER BY name.id";
    $query=mysqli_query($con,$sql);
  

    while($row=mysqli_fetch_assoc($query)){
    ?>


<tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['cpu']?></td>
      <td><?php echo $row['gpu']?></td>
      <td><?php echo $row['ram']?></td>
      <td><?php echo $row['price']?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
      </td>
    </tr>
   
<?php
    }
?>

  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>