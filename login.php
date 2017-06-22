<?php 
session_start();
 require_once 'conexao.php';
 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>DMTT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="logo1.png" />
    <style type="text/css">
    	img{position: absolute;left: 40%; top:2%;}
		input#submit{height: 80px}
   		form div{height: 40px;line-height: 40px; font-size: 3em}
		div input{width: 60%;}
    </style>
</head>
<body style="background: #98FB98;margin: 0">

	<div  style="background: #3CB371; height: 150px"><br><br>
		<img src="logo1.png" height="200px" align="center" alt="">
	</div>

	<div class="container">
	<br><br>

	<form action="autentica.php" method="post">
			<div class="text-center log_label">
				<label style="" for="usuario">Usuário:</label>
			</div>
			
			<div class="text-center">
				<input id="usuario" name="usuario">
			</div><br>
			
			<div class="text-center log_label">
				<label for="senha">Senha:</label>
			</div>
			
			<div class="text-center">
				<input id="senha"  type="password" name="senha">
			</div><br>

			<div style="height: 60px;line-height: 60px;font-size: 3em" class="text-center">
				<input height="40px" id="btn-submit" style="width: 60%;" class="btn btn-success " type="submit" value="Entrar" name="logar">
			
			</div>
	</form>

		<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
	</div>
</body>
</html>