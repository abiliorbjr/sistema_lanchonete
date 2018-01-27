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

 						
 						
 							
 						if(isset($_POST['email']) && empty($_POST['email']) == false) {

 							$email = strtolower(addslashes($_POST['email'])); 
 						

 							$sql= "SELECT * FROM usuarios WHERE email = :email";
						 	$sql = $pdo->prepare($sql);
						 	$sql->bindValue(":email",$email);
						 	$sql->execute();

						 	

							 	 if ($sql->rowCount() > 0) {
							 	 	//echo "existe";
							 	 	$sql = $sql->fetch();
							 	 	$id = $sql['id'];



							 	 	$sql = "INSERT INTO usuarios_bloqueados ( id_usuario,hora_bloqueio) VALUES (:id_usuario,:hora_bloqueio) ";

									$sql = $pdo->prepare($sql);
									$sql->bindValue(":id_usuario",$id);
									$sql->bindValue(":hora_bloqueio",date('Y-m-d H:i', strtotime('-3 hour + 2 minutes')));
									$sql->execute();
 								}



 								if (isset($_POST['email']) && !empty($_POST['email'])) {
 										$email = strtolower(addslashes($_POST['email']));

 										if ($sql->rowCount()>0) {
 											//para ver se tem alguma coisa nessas condiçoes
 											$sql = $sql->fetch();
 											$id = $sql['id'];


 											$sql = "SELECT * FROM usuarios_bloqueados WHERE id_usuario = 1 AND hora_bloqueio >= NOW() order by hora_bloqueio desc limit 1;";

 										$sql = $pdo->prepare($sql);
 										//$sql->bindValue(":email",$email);
 										$sql->bindValue(":id",$id);
 										$sql->execute();

 										if ($sql->rowCount() > 0 ) {
 											
 											echo "continua bloqueado";
 										}else{

 											header("Location:index.php");
 										}

 										}

 										
 								}


 								
 						}	
 					

 					

 					

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