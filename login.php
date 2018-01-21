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

 echo "<h2>PÁGINA DE LOGIN</h2>"."<br>"."<br>";

 			if (isset($_SESSION['tentavivas_login']) && $_SESSION['tentavivas_login'] >=3) {
 					echo "Acesso bloqueado por 5 minutos";

 					/*  TERMINAR O RACIOCINIO
 					if (isset($_SESSION['tentavivas_login']) && $_SESSION['tentavivas_login'] >=3) {

 						$sql= "SELECT * FROM usuarios_bloqueados_login WHERE id_usuario = :id_usuario";

 							if ($sql->rowCount() >0) {

 								$sql = $sql->fetch();
 								$id_usuario = $sql['id'];


 								$sql="INSERT INTO usuarios_bloqueados_login (id_usuario,data_bloqueio) VALUES (:id_usuario,:data_bloqueio)";

 					$sql= $pdo->prepare($sql);
 					$sql->bindValue(":id_usuario",$id_usuario);
 					$sql->bindValue(":data_bloqueio",date('Y-m-d H:i',strtotime('-2 hours -55 minutes')));
 					$sql->execute();


 							}else{
 								echo "Não existe usuario";
 							}

 							*/
 					
 					

 					

 			}else{
			     if (!isset($_SESSION['tentavivas_login'])) {	
			      			$_SESSION['tentavivas_login'] = 0;
			      } 

						 if (isset($_POST['email']) && empty($_POST['email']) == false) {
						 	$email = strtolower(addslashes($_POST['email']));
						 	$senha = md5(addslashes($_POST['senha']));

						 	$sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

						 	

							 	 if ($sql->rowCount() > 0) {
							 	 	//echo "existe";
							 	 	$dado = $sql->fetch();
							 	 	$_SESSION['id'] = $dado[id];
							 	 	header("Location:index.php");               


							 	 }else{


							 	 	echo "Email ou Senha estão errados! ";
							 	 	$_SESSION['tentavivas_login'] ++ ;

							 	 	echo $_SESSION['tentavivas_login']." - Tentativas. Na terceira será bloqueado o sistema! ";


							 	 }




						 }


			}

 ?>

 <form method="POST">
 	E-mail:
 	<input type="text" name="email"><br><br>
 	Senha:
 	<input type="password" name="senha"><br><br>
 	<button class="btn btn-default" >Enviar</button><br><br>
 	<!--<button class="btn btn-danger"><a class="text-danger" href="esqueci.php">Esqueci a senha</a></button>-->
 	<!--<button class="btn btn-danger" <a href="esqueci.php">Esqueci a senha</a></button><br><br> ESSE NAO FUNCIONOU-->

 	<a class="text-danger" href="esqueci.php">Esqueci a senha</a>
 </form>

</div>


 </body>
 </html>