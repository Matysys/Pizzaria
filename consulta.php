<style>
table, tr, th, td{
	border: 1px solid red;
	background-image: linear-gradient(yellow,orange);
}
h1{
	color: red;
}
</style>
<body style="background: orange;">
<?php
include "conexao.php";

$nome = $_GET['nome'];
$email = $_GET['email'];
$pedido = $_GET['pedidodapizza'];
$borda = $_GET['borda'];

if (isset($_GET['consulta'])){
if (is_numeric($nome)){
	echo "Há valores inválidos! Consulta não realizada com sucesso.";
	return;
}
try{

	$sql = "select * from pedido where nome = '$nome' and email = '$email' and pedidodapizza = '$pedido' and borda = '$borda'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "
        <table>
        <tr>
        <th>Cliente:</th>
        <td>".$row['nome']."</td>
        </tr>
        <tr>
        <th>Endereço:</th>
        <td>".$row['endereco']."</td>
        </tr>
        <tr>
        <th>Número:</th>
        <td>".$row['numero']."</td>
        </tr>
        <tr>
        <th>Bairro:</th>
        <td>".$row['bairro']."</td>
        </tr>
        <tr>
        <th>E-mail:</th>
        <td>".$row['email']."</td>
        </tr> 
        <tr>
        <th>Pedido:</th>
        <td>".$row['pedidodapizza']."</td>
        </tr>
        <tr>
        <th>Borda:</th>
        <td>".$row['borda']."</td>
        </tr>
        </table>";
	}
}catch(Exception $e){
	echo "Houve um erro na consulta";
}
mysqli_close($conn);
}
else if(isset($_GET['alterar'])){
if (is_numeric($nome)){
	echo "Há valores inválidos! Alteração não realizada com sucesso.";
	return;
    }
try{
   $sql = "update pedido set pedidodapizza = '$pedido', borda = '$borda' where nome = '$nome' and email = '$email'";
   mysqli_query($conn,$sql);
   if(mysqli_affected_rows($conn) == 0){
   echo "Houve um erro ao alterar o seu pedido.</h1>";
   return;
    }
    echo "Pedido alterado com sucesso!";
}catch(Exception $e){
	echo "Ocorreu um erro, pedido não alterado.";
 }
mysqli_close($conn);
}
else if(isset($_GET['deletar'])){
$sql = "delete from pedido where nome = '$nome' and email = '$email' and pedidodapizza = '$pedido' and borda = '$borda'";
mysqli_query($conn,$sql);
if (mysqli_affected_rows($conn)){
echo "Pedido deletado com sucesso";
}
else{
  	echo "Houve um erro ao deletar";
}
mysqli_close($conn);
}

?>
</body>