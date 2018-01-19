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

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="">MinhaEmpresa.com</a>
				</div>

				<ul class="nav navbar-nav">
					<li><a href="">Home</a></li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Empresa<span class="caret"></span></a>
							
								<ul class="dropdown-menu">
									<li><a href="">Estrutura</a></li>
									<li><a href="">Cultura</a></li>
									<li><a href="">Carreira</a></li>
									
								</ul>
					</li>
					<li><a href="">Contatos</a></li>
					
				</ul>

				<ul class="nav navbar-nav navbar-right"> 
					<li><a href="">Login</a></li>
				</ul>

			</div>

		</nav>
	</div>

	</body>

	</html>