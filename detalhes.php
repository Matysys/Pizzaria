<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Maty's Pizzaria - Consulta</title>
	<link rel="stylesheet" href="css/pizzaria.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div>
<img src="img/pizza.jpg"></img>
<span id="pn">Maty's Pizzaria</span>
</div><br>
<form action="consulta.php" target="iframep" method="get">
	<fieldset>
		<legend>Pedidos</legend>
		<p style="color: red;">Complete os campos abaixo para consultar, alterar ou deletar o seu pedido completo</p>
	Nome:<br><input type="text" name="nome" placeholder="DIGITE SEU NOME" required><br>
	E-mail:<br><input type="email" name="email" placeholder="DIGITE SEU E-MAIL" required><br>
	Escolha seu pedido:<br><select name="pedidodapizza">
		<option value="Pizza de Mussarela">Pizza de Mussarela</option>
		<option value="Pizza de Calabresa">Pizza de Calabresa</option>
		<option value="Pizza de Frango com Catupiry">Pizza de Frango com Catupiry</option>
		<option value="Pizza Vegetariana">Pizza Vegetariana</option>
		<option value="Pizza de Bacon">Pizza de Bacon</option>
		<option value="Pizza de Brigadeiro">Pizza de Brigadeiro</option>
		<option value="Pizza Quatro Queijos">Pizza Quatro Queijos</option>
		<option value="Pizza Portuguesa">Pizza Portuguesa</option>
	</select><br>
	<input type="radio" name="borda" value="Com borda" checked>Com borda
	<input type="radio" name="borda" value="Sem borda">Sem borda<br>
	<pre><input class="btn" type="submit" name="consulta" value="Consultar">    <input class="btn" type="submit" name="alterar" value="Alterar"><br><br><input class="btn" type="submit" name="deletar" value="Deletar pedido"> <input class="btn" type="reset" value="Limpar"></pre>
</fieldset>
</form><br>
<iframe src="branco.html" name="iframep"></iframe>
</body>
</html>