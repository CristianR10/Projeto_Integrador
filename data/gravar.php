<?php 

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'cadastro';

//Conexão BD
$mysqli = new mysqli
	($servidor, $usuario, $senha, $banco);

if (mysqli_connect_error())
		trigger_error(mysqli_connect_error());


$email = $_POST['email'];
$nome = $_POST['nome'];
$endereco = $_POST['end'];
$numero = $_POST['numero'];
$complemento = $_POST['comple'];
$telefone = $_POST['tel'];
$celular = $_POST['cel'];
$senha1 = $_POST['senha1'];

$sql = "INSERT INTO clientes 
(email, nome, endereco, numero, complemento, telefone, celular, senha) VALUES
('$email','$nome','$endereco','$numero','$complemento','$telefone','$celular',
md5('$senha1'))";

$query = $mysqli->query($sql);


echo "<h1> Inclusão realizada com sucesso<br>";
echo "<br><br>";
echo "<a href ='../index.php'>voltar</a></h1>";


 ?>