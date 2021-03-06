<?php
    session_start();
     require_once 'conexao.php';
if(!$_SESSION['status'] == "logado"){
                echo $_SESSION['logar'];
                header("Location: login.php");
            }

 ?>

<html>
    <head>
        <title>Cadastrar Apoio a Obras</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>  
        <script src="jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.js" type="text/javascript"></script>
        <style type="text/css">
         
            a{font-size: 13pt;text-decoration:none;}
            a:hover{text-decoration: none}
        </style>
    </head>
    <body style="width: ; background: orange; margin: 0 auto;">
        
        <h2 style="text-align: center;color: white; "><u>Apoio a Operações:</u></h2>
        <hr>
        <form action="cad_oper.php" method="post" >
            
            <div class="row">
                
                <div class="form-group col-md-4">
                    <label for="os">Nº da O. S.:</label>
                    <input type="text" class="form-control"  id="num_os" name="num_os" placeholder="Nº/ANO (Preencher se houver)">
                </div>

                <div class="form-group col-md-4 col-sm-6 col-xs-6">
                      <label for="time">Hora:</label>
                      <input type="time" class="form-control" id="hora" name="hora" placeholder="" required>
                </div>

                  <div class="form-group col-md-4 col-sm-6 col-xs-6 ">
                      <label for="datepicker">Data:</label>
                      <input type="date" class="form-control mar_form"  id="ddata" name="data" placeholder="" required>
                  </div>
            </div>
            
            <div class="form-group">
                <label for="local">Local:</label>
                <input type="text" class="form-control text-uppercase" id="local" name="local" placeholder="Preencher o Local" required>
            </div>
            
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select class="form-control" name="tipo" id="tipo">
                    <option value="">Tipo de Operação</option>
                    <option value="1">Blitz</option>
                    <option value="2">Caminhada</option>
                    <option value="3">Carreata</option>
                    <option value="4">Cavalgada</option>
                    <option value="5">Batedor</option>
                    <option value="6">Corrida</option>
                    <option value="7">Show</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea type="text" class="form-control text-uppercase" id="descricao" name="descricao" placeholder="Preenchimento Opcional"></textarea>
            </div>

            <div class="form-group">
                <label for="equipe">Equipe:</label>
                <select class="form-control" name="equipe" id="equipe">
                    <option value="">Selecione a Equipe</option>
                    <option value="1">Equipe 1</option>
                    <option value="2">Equipe 2</option>
                    <option value="3">Equipe 3</option>
                    <option value="4">Equipe Mista</option>

                </select>
            </div>
            
            
            
             <div class="form-group">
                 <input   type="submit" name="salvar" name="submit" class="btn btn-success btn-block" value="Salvar" >
              
             </div>
        </form>
        
        <a href="index.php"><button class="btn  btn-block ">Voltar</button><br></a>


    </body>
</html>
