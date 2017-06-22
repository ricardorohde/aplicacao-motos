<!DOCTYPE html>
<?php
require 'conexao.php'; 
session_start();
?>


      <?php

          $id = $_GET['id']
          if (mysqli_query("DELETE FROM apreencoes WHERE id = $id")) {
             echo "Registro Excluído!";
             
      ?>
  
  


