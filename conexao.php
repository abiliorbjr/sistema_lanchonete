<?php 
		try {

			/*$dns = "mysql:dbname=projeto_esqueciasenha;host=localhost";
			$user = "root";
			$pass = "";

			$pdo = new PDO($dns,$user,$pass);*/



			$pdo = new PDO("mysql:dbname=projeto_esqueciasenha;host=localhost","root","");
				
			
		} catch (PDOException $e) {
			echo "ERRO AO CONECTA: " .$e->getMessage();
		}

 ?>