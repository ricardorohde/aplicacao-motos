<!DOCTYPE html>
<?php
require 'conexao.php'; 
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Equipe de Motos do DMTT</title>
         <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body style="width: 400px; margin: 0 auto;">
        
      <?php

      if ($_POST['submit']) {
        
      

			$data       = $_POST['data'];
      $data      = date('Y-m-d',strtotime($data));
      $hora       = $_POST['hora'];
			$local      = strtoupper($_POST['local']) ;
			$placa      = strtoupper($_POST['placa']) ;
			$motivo     = $_POST['motivo'];
      $equipe     = $_POST['equipe'];
			$observacao = $_POST['observacao'];


  
	  $query = "INSERT INTO apreencoes (data,hora,local,placa,motivo,observacao,equipe) 
                  VALUES  ('$data','$hora','$local','$placa','$motivo','$observacao','$equipe')";
    mysqli_query ($conexao, $query) or die ("Err1");

      echo "<script> alert('Cadastro realizado');</script>";
      echo "<SCRIPT> location.href='index.php' </SCRIPT>"; 
    
    }else{
      echo "erro ao cadastrar";
    }
?>
  
    </body>
</html>




