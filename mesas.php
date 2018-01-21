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

		

		if (isset($_SESSION['id']) && empty($_SESSION['id']) == false ) {
			echo "Area restrita"."<br>";

			
					/*$qtd_mesas = addslashes($_GET['qtd_mesas']);
					
					if (isset($_GET['qtd_mesas']) && !empty($_GET['qtd_mesas'])) {
							$qtd_mesas = addslashes($_GET['qtd_mesas']);
							echo "pagina mesas".$qtd_mesas;
							
					}

					echo "abilio junior";
					echo "pagina mesas".$qtd_mesas;
		*/




		}else{
			header("Location:login.php");
		}

?>


<form method="POST">
	Número da mesa:
	<input type="text" name="numero_mesa"><br><br>
	pedido:
	<input type="text" name="pedido"> <input type="submit" value="Enviar"><br><br>
	Forma de pagamento:
	<select name="forma_pagamento" id="">
		<option value="cartao">Dinheiro</option>
		<option value="cartao">Cartão débito</option>
		<option value="cartao">Cartão crédito</option>
		<option value="cartao">Ticket</option>
	</select><br><br>


	

	recebido:
	<input type="text" name="valor_recebido"><br><br>
	
	troco:
	<input type="text" name="troco"><br><br>



</form>

</div>

</body>
</html>

