<?php
echo "<meta http-equiv='refresh' content='5;URL=index.php'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
include "conexao.php";

$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$num = $_GET['endereconum'];
$bairro = $_GET['bairro'];
$email = $_GET['email'];
$fp = $_GET['pedidodapizza'];
$borda = $_GET['borda'];
if (!is_numeric($num)){
	echo "Formato inválido no número da residência! Pedido não concluído com sucesso."."<br>"."Voltando em segundos...";
	return;
}
if ((is_numeric($endereco)) || (is_numeric($bairro)) || (is_numeric($nome))){
	echo "Há valores inválidos! Pedido não concluído com sucesso"."<br>"."Voltando em segundos...";
	return;
}
try{
	$sql = "insert into pedido values('$nome','$endereco',$num,'$bairro','$email','$fp','$borda')";
	mysqli_query($conn,$sql);
	echo "Pedido feito com sucesso! Voltando em segundos...";
}catch(Exception $e){
	echo "Não foi possível fazer o pedido! Voltando em segundos...";
}
mysqli_close($conn);


?>