<!DOCTYPE html>
<?php
  include 'conexao.php'; 


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
 
      $num_os       = $_POST['num_os'];
			$data         = $_POST['data'];
      $data        = date('Y-m-d', strtotime($data));
			$hora         = $_POST['hora'];
			$local        = strtoupper($_POST['local']) ;
			$evento       = strtoupper($_POST['evento']) ;
			$observacao   = $_POST['observacao'];
      $equipe       = $_POST['equipe'];
			
      
	$query = "INSERT INTO eventos (num_os,data,hora,local,evento,observacoes,equipe) 
                  VALUES  ('$num_os','$data','$hora','$local','$evento','$observacao','$equipe')";
   $inserir_obra =  mysqli_query($conexao, $query) or die ("Erro ao Inserir...");

     echo "<script> alert('Cadastro realizado');</script>";
      echo "<SCRIPT> location.href='index.php' </SCRIPT>"; 
    
    }else{
      echo "erro ao cadastrar";
    }
?>
  
    </body>
</html>