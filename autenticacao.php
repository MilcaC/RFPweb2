<?php

$loginVerificar = $_POST['login'];
$senhaVerificar = $_POST['senha'];

$query = "SELECT * FROM usuarios where login = '$loginVerificar' and senha = '$senhaVerificar'";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=BDRF', 'root', '');

$resultado = $conexao->query($query);
$logado = $resultado->fetch();
$login = $logado['login'];
$senha = $logado['senha'];
$nome = $logado['nome'];
$nascimento = $logado['nascimento'];
$email = $logado['email'];
 
if ($logado == null) {
   header('Location: login.php');
} 
else {
   session_start();
   $_SESSION['login'] = $login;
   $_SESSION['senha'] = $senha;
   $_SESSION['nome'] = $nome;
   $_SESSION['nascimento'] = $nascimento;
   $_SESSION['email'] = $email;
   header('Location: telaInicial.php');
}

?>