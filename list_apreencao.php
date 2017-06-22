<!DOCTYPE html>
<?php
require 'conexao.php'; 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Equipe de Motos do DMTT</title>
         <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body style="width: ; margin: 0 auto;">
        
      <?php


	 $query = "SELECT * FROM apreencoes";
   $result =  mysqli_query ($conexao, $query) or die ("Err1");

     
?>
  <h3>Apreenções:</h3>
  <table class="table table-bordered">
    <tr class="success">
      <td>ID</td>
      <td>DATA / HORA</td>
      <td>LOCAL</td>
      <td>PLACA</td>
      <td>MOTIVO</td>
      <td>OBSERVAÇÃO</td>
      <td>EQUIPE</td>
    </tr>
  
  <?php  while ($row = mysqli_fetch_array($result)) {?>
      <tr>
        <td><?php echo $row['id'] ?> </td>
        <td><?php echo date("d-m-Y /  h:i",strtotime($row['data'])) ?></td>
        <td><?php echo $row['local'] ?></td>
        <td><?php echo $row['placa'] ?></td>
        <td><?php echo $row['motivo'] ?></td>
        <td><?php echo $row['observacao'] ?></td>
        <td><?php echo $row['equipe'] ?></td>
      </tr>

    
    
 <?php } ?>

  



  </table>
    </body>
</html>
