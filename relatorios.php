<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Relatorios</title>
</head>
<body style=" margin: 0 auto; background: orange">

        <p class="text-center text-danger">
            <?php if($_SESSION['status'] != "logado"){
                echo "voce precisa estar esta logado";
                header("Location: login.php");
                
            }?>
        </p>
        <h2 style="text-align: center">Relatórios</h2>
        <h4 style="text-align: center">Mikes em Ação</h4>
        <hr>
            

            
            <br>

        <div class="menu" >
            <button class="btn btn-block btn-success">
                <a style=" display:block; " class="text-center" href="rel_apreencoes.php">Relatório de Apreenções
                </a>
            </button>

            <button class="btn-block" >
                <a style=" display:block; " class="text-center" href="rel_evento.php">Relatório de Apoio a Eventos
                </a>
            </button>

            <button class="btn-block" >
                <a style=" display:block; " class="text-center" href="rel_obras.php">Relatório de Apoio a Obras
                </a>
            </button>

            <button class="btn-block" >
                <a style=" display:block; " class="text-center" href="rel_operacoes.php">Relatório de Operações
                </a>
            </button>

            

        </div>
        
        <a href="rel_apreencoes.php"><button class="btn btn-success btn-block ">Relatório de Apreenções</button><br></a>
        <a href="rel_evento.php"><button class="btn btn-success btn-block ">Relatório de Apoio a Eventos</button><br></a>
        <a href="rel_obras.php"><button class="btn btn-success btn-block ">Relatório de Apoio a Obras</button><br></a>
        <a href="rel_operacoes.php"><button class="btn btn-success btn-block ">Relatório de Operações</button></a>
        
    </body>
</html>