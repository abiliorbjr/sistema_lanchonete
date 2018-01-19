<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bootstrap</title>
	<meta name="viewport" content="width=device.widht, initial-scale=1"/>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
			<h1>Meu primeiro <small>sistema Bootstrap</small></h1>
		<p>Este é meu primeiro testes</p>

		<hr>

		<form method="POST" action="">

		<div class="form-group">
			E-mail:
			<input type="email" name="email" class="form-control">

		</div>

		<div class="form-group">
			Senha:
			<input type="password" name="senha" class="form-control">
		</div>

			<input type="submit" value="entrar" class="btn btn-default">
		</form>

		<br>

		<button class="btn btn-info" data-toggle="modal" data-target="#janela">Abrir modal</button>

		<div id="janela" class="modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Titulo do meu Modal</h4>
					</div>

					<div class="modal-body">
						<p>conteúdo do meu modal</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>

</div>
</body>
</html>