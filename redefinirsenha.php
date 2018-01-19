<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema de consumo</title>
	<link rel="stylesheet" href="estilo.css">
	<meta name="viewport" content="width=device.widht, initial-scale=1"/>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	
	
</head>
<body>

	<div class="container">

<?php 
	session_start();
	require'conexao.php';

	if (isset($_GET['token']) && empty($_GET['token']) == false) {
		
				$token = addslashes($_GET['token']);

				$sql = "SELECT * FROM  usuarios_token WHERE hash = :hash AND used = 0 AND expirado_em > NOW() ";

				$sql = $pdo->prepare($sql);
				$sql->bindValue(":hash",$token);
				$sql->execute();


				if ($sql->rowCount() > 0 ) {
					$sql = $sql->fetch();
					$id = $sql['id_usuario'];

						if (!empty($_POST['senha'])) {
							$senha = ($_POST['senha']);

							$sql = "UPDATE usuarios SET senha= :senha WHERE id = :id";

							$sql = $pdo->prepare($sql);
							$sql->bindValue(":senha",md5($senha));
							$sql->bindValue(":id",$id);
							$sql->execute();

							$sql = "UPDATE usuarios_token SET used = 1 WHERE hash = :hash ";

							$sql = $pdo->prepare($sql);
							$sql->bindValue(":hash",$token);
							$sql->execute();

							echo "Senha alterada com sucesso!";
							exit;

						}

						?>

							<form method="POST">
								Digite a nova senha:
								<input type="password" name="senha"><br>
								<input type="submit" value="Enviar">

							</form>

						<?php
				}else{
					echo "token inválido ou usado!";
					exit;
				}
	}

	?>


	</div>


	</body>
</html>
 