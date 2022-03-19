<?php
session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['senha'] = $_POST['senha'];

$nome = $_POST['nome'];
$data = $_POST['data'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$conexao = new PDO('mysql:host=127.0.0.1;dbname=BDRF', 'root', '');


$query = "INSERT INTO `usuarios` (`nome`, `nascimento`, `email`,`login`, `senha`) VALUES ('$nome', '$data', '$email', '$login', '$senha')";

$resultado = $conexao->query($query);

echo "Cadastro realizado com sucesso";

?>

<a href="login.php"> Ir para o login </a>