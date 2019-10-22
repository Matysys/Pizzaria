<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<link rel="stylesheet" href="css/pizzaria.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div>
<img src="img/pizza.jpg"></img>
<span id="pn">Maty's Pizzaria<br>R$ 15,00 cada</span>
</div><br>
<form action="pedido.php" method="get">
	<fieldset>
		<legend>Faça seu Pedido</legend>
	Nome:<br><input type="text" name="nome" placeholder="DIGITE SEU NOME" required><br>
	Endereço:<br><input type="text" name="endereco" placeholder="DIGITE SEU ENDEREÇO" required>
	N°: <input type="text" name="endereconum" size="4" maxlength="4" required><br>
	Bairro:<br><input type="text" name="bairro" placeholder="DIGITE SEU BAIRRO" required><br>
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
	<pre><input class="btn" type="submit" value="Enviar Pedido">  <button class="btn"><a href="detalhes.php">Consultar ou Alterar Pedido</a></button><br><br><input class="btn" type="reset" value="Limpar"></pre>
</fieldset>
</form>
</body>
</html>
