<?php
    include "conexao.php";

    session_start();

?>

<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Equipe de Motos do DMTT</title>
         <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="js/jquery-ui.min.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>

        <style type="text/css">
            body{ color:white;}
            a{color:white; font-size: 13pt;text-decoration:none;}
            a:hover{text-decoration: none}
            button{height: 20%}
        </style>
    </head>
    <body style="width: ; margin: 0 auto; background: orange">

        <p class="text-center text-danger">
            <?php if($_SESSION['status'] != "logado"){
                echo "voce precisa estar esta logado";
                header("Location: login.php");
                
            }?>
        </p>


    <div>
        <h1 style="text-align: center">DMTT</h1>
        <h4 style="text-align: center">Mikes em Ação</h4>
        <hr>
            <div class="container">
                <div class="col-md-6 col-sm-6 log_label"><p class="text text-success" style="font-family: 'comic sans';">Usuário: <span><?php echo $_SESSION['usuarioNome']; ?></span></p></div>
                
            </div>
    </div>
        

    
        <div class="menu" >
            <button class="btn-block" style="background: green;border:1px solid green; border-radius: 10px;line-height: 2.5em;">
                <a style=" display:block; line-height: 2.5em; " class="text-center" href="apreencoes.php">Apreensões
                </a>
            </button>

            <button class="btn-block" style="background: green;border:1px solid green; border-radius: 10px">
                <a style=" display:block; line-height: 2.5em; " class="text-center" href="evento.php">Apoio a Eventos
                </a>
            </button>

            <button class="btn-block" style="background: green;border:1px solid green; border-radius: 10px">
                <a style=" display:block; line-height: 2.5em; " class="text-center" href="obras.php">Apoio a Obras
                </a>
            </button>

            <button class="btn-block" style="background: green;border:1px solid green; border-radius: 10px">
                <a style=" display:block; line-height: 2.5em; " class="text-center" href="operacoes.php">Operações
                </a>
            </button>

            <button class="btn-block" style="background: gray;border:1px solid gray; border-radius: 10px">
                <a style=" display:block; line-height: 2.5em; background: gray" class="text-center" href="rel\relatorios.php">Relatórios
                </a>
            </button>

        </div>
    
    

  
      
    </body>
</html>
