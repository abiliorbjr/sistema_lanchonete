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
	require'conexao.php';
	if (!empty($_POST['email'])) {
		$email = strtolower(addslashes($_POST['email']));
		/* posso fazer desse jeito para conferir se o email foi esse mesmo
		$sql = ("SELECT * FROM usuarios WHERE email = '$email'");
		$sql=$pdo->query($sql);*/

		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":email",$email);
		$sql->execute();

		if ($sql->rowCount()> 0) {
			//echo "existe";

			//isso e para adicionar o id do cliente
			$sql = $sql->fetch();
			$id = $sql['id'];

			//para gerar o token
			$token = md5(time().rand(0,99999).rand(0,99999));

			$sql = "INSERT INTO usuarios_token (id_usuario, hash, expirado_em) VALUES (:id_usuario,:hash,:expirado_em)";

			$sql = $pdo->prepare($sql);
			$sql->bindValue(":id_usuario",$id);
			$sql->bindValue(":hash",$token);
			//$sql->bindValue("expirado_em",date(NOW(),strtotime('+5 minutes')));
			$sql->bindValue("expirado_em",date('Y-m-d H:i',strtotime('-2 hours -55 minutes')));
			$sql->execute();

			$link = "http://localhost/sistemaLanchonete/sistema_lanchoneteV01/redefinirsenha.php?token=".$token;
			

			//quando for para o email de verdade
			$mensagem = "Clique no Link para redefinir sua senha:<br>".$link;
			$assunto = "Redefinição de senha";
			$headers = 'From: seuemail@seusite.com.br'."\r\n".
						'X-Mailer:PHP/'.phpversion();

				/* esse e para mandar o email
			mail($email,$assunto,$mensagem,$headers);
			*/

			echo $mensagem;
			exit();


		}else{
			echo "email não existente na base de dados!";
		}
	}
 ?>

 <form method="POST">
 	Informe seu e-mail:<br>
 	<input type="email" name="email"><br><br>
 	<input type="submit" value="Enviar">


 </form>

</div>

</body>
</html>