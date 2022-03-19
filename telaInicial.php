<?php
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: index.php');
}

?>




<html>
<head>
<title> Boas vindas </title>
</head>
<body>
<h1> Seja bem-vindo (a)!! </h1>

<p> Nome: <?php echo $_SESSION['nome']; ?> </p>
<p> Data de nascimento: <?php echo $_SESSION['nascimento']; ?> </p>
<p> Email: <?php echo $_SESSION['email']; ?> </p>

<form method="POST">
	<p> Digite um número e veja a tabuada </p>
	<input type="text" name="numero" >
    <input type="submit">
</form>

<?php

    $tab = 0;
    if(isset($_POST["numero"])){
        $tab = $_POST["numero"];
        if(!is_numeric($tab)){
            echo "<br>O valor informado não é um número.<br>";
        }else{
    
        $num=0;
        while($num<=50){
            echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            $num++;
        }

    }
}

?>

<a href="sair.php"> Deslogar </a>
</body>
</html>