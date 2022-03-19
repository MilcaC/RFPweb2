<?php
/*session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: index.php');
}

else
{
	header('location: telaInicial.php');
}
*/
?>



<html>
<head>
<title> Cadastro de Usuário </title>
</head>
<body>
<form method="POST" action="cadastrar.php">
<label>Nome:</label><input type="text" name="nome" id="nome" required><br>
<label>Data de nascimento:</label><input type="date" name="data" id="data" required><br>
<label>Email:</label><input type="text" name="email" id="email" required><br>
<label>Login:</label><input type="text" name="login" id="login" required><br>
<label>Senha:</label><input type="password" name="senha" id="senha" required><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" required>

<a href="login.php"> Login </a>
</form>
</body>
</html>