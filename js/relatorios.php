<?php
    include "../conexao.php";

    session_start();

if(!$_SESSION['status'] == "logado"){
                echo $_SESSION['logar'];
                header("Location: login.php");
            }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Equipe de Motos do DMTT - Relatórios</title>
         <!-- Bootstrap -->
        <link href="..\css/bootstrap.min.css" rel="stylesheet">
        <link href="..\css/style.css" rel="stylesheet">
        <style type="text/css">
            body{ color:white;}
            a{color:white; font-size: 13pt;text-decoration:none;}
            a:hover{text-decoration: none}
        </style>
</head>
<body style="; margin: 0 auto; background: orange">

        <p class="text-center text-danger">
            <?php if($_SESSION['status'] != "logado"){
                echo "voce precisa estar esta logado";
                header("Location: login.php");
                
            }?>
        </p>
        <h1 style="text-align: center">Relatórios</h2>
        <h2 style="text-align: center">Mikes em Ação</h4>
        <hr>
            

            
            <br>
<div class="menu">
    <button class="btn-block" style="background: green;border:1px solid green; border-radius: 10px">
        <a style=" display:block; line-height: 2.5em; " class="text-center" href="rel_apreensao.php.php">                Relatório de Apreensões 
        </a>
    </button>

    <button class="btn-block" style="background: green;border:1px solid green; border-radius: 10px">
        <a style=" display:block; line-height: 2.5em; " class="text-center" href="rel_eventos.php">                Relatório de Apoio a Eventos
        </a>
    </button>

    <button class="btn-block" style="background: green;border:1px solid green; border-radius: 10px">
        <a style=" display:block; line-height: 2.5em; " class="text-center" href="rel_obras.php">                Relatório de Apoio a Obras
        </a>
    </button>

    <button class="btn-block" style="background: green;border:1px solid green; border-radius: 10px">
        <a style=" display:block; line-height: 2.5em; " class="text-center" href="rel_operacoes.php">                Relatório de Operações
        </a>
    </button>        

       
            
        </div>
    </body>
</html>