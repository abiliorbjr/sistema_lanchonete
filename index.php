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

	<?php 
		session_start();
		require'conexao.php';

		if (isset($_SESSION['id']) && empty($_SESSION['id']) == false ) {
			echo "Area restrita"."<br>";

	?>

<div class="container">

	<form method="GET">
			Quantidade de mesas:<br><br>

				<select name="qtd_mesas">
						<?php  

							for ($i = 0; $i <= 40; $i++) {
				    				echo $i;
			    		?>
								<option value="<?php echo $i ?>"><?php echo $i; ?></option>

						<?php 
							}
						?>

				</select><br><br>

		<input type="submit"  value="Enviar"><br><br>


		<?php 
			if (isset($_GET['qtd_mesas']) && !empty($_GET['qtd_mesas'])){
				$i = addslashes($_GET['qtd_mesas']);
				$qtd_mesas =1;


				 
			for ($j = 1; $j <= $i; $j++) {

		?>
						<!--<div id="mesas"><?php /*for($l=1;$l<=$qtd_mesas;$l++){echo $qtd_mesas;}*/ ?></div>-->
					<div class="content">

						
					<a href='mesas.php'><div id="mesas"><?php echo $qtd_mesas ++;?></div></a>
					    <?php $id_mesa = $qtd_mesas;  ?> 

					</div>						
		<?php  			
				}
		
			}	

		?>
	</form>

 	<a href="logout.php">Sair</a>



 	

<?php 
	}else{
		header("Location:login.php");
	}
?>

 </div>
	
</body>
</html>




