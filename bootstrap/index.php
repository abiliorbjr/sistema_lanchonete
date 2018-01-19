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
	
<body>
	<div class="container">
		<h1>Meu primeiro <small>sistema bootstrap</small></h1>
		<p>Este e meu primeiro teste</p>

		<div class="row">
			<div class="col-sm-4" style="text-align: center; background-color: #999">A</div>
			<div class="col-sm-4" style="text-align: center; background-color: #eee">B</div>
			<div class="col-sm-4" style="text-align: center; background-color: #777">C</div>


			<dl>
					<dt>Café</dt>
					<dd>Bebida quente preta</dd>

					<dt>Leite</dt>
					<dd>Bebida fria branca</dd>
			</dl>


			<!--<table class="table table-striped">-->
			<!--<table class="table table-bordered table-striped">-->
			<table class="table table-hover">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Sobrenome</th>
							<th>E-mail</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Abilio</td>
							<td>Rodrigues</td>
							<td>abiliorbjr@gmail.com</td>
						</tr>

						<tr>
							<td>Vania</td>
							<td>Kelly</td>
							<td>vaniakellyalves@hotmail.com</td>
						</tr>

						<tr>
							<td>Maria </td>
							<td>Gabriela</td>
							<td>gabiribas746@gmail.com</td>
						</tr>

						<tr>
							<td>Maria </td>
							<td>Julia</td>
							<td>mjar@gmail.com</td>
						</tr>
					</tbody>
			</table>


			<img src="FTC_0953.jpg" alt="familia" class="img-responsive img-rounded"> <!-- img-circle  img-thumbnail-->



		</div>

		</br></br>

		<button class="btn btn-danger  btn-xs">Este é um botão</button><!--btn-default  btn-info btn-sucess-->

		</br></br>
		<button class="btn btn-info  btn-lg btn-block">Este é um botão</button><!--btn-default  btn-info btn-sucess-->

			<hr>

			<p>Qual empresa você prefere?</p>

			<div class="btn-group bnt-group-justified">
				
				<a class="btn btn-primary">apple</a>
				<a class="btn btn-primary">Samsung</a>
				<a class="btn btn-primary">Sony</a>
			</div>

			</br></br>

			<div class="dropdown">
				
				<button class="btn btn-primary dropdown-toggle" data-toogle="dropdown">Escolha <span class="caret"></span></button>

					<ul class="dropdown-menu">
						<li><a href="#">PHP</a></li>
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS</a></li>
					</ul>
			</div>

			</br></br></br>

			<p>Essa e uma <mark>frase de teste</mark> específica para o <abbr title="um framework muito legal">bootstrap</abbr> </p>

			<blockquote class="blockquote-reverse">Essa é uma citação muito famosa de uma autor famoso.
				<footer>Autor Desconhecido</footer>
			</blockquote>
		
	</div>
</body>
</html>