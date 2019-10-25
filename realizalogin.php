<?php 

require "conexaobanco.php";

$conexao = new Conexao();

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$result = $conexao->execute("SELECT * FROM usuarios
WHERE usuario = '$usuario' AND senha = MD5('$senha')");

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['usuario'] = $usuario;
$_SESSION['senha'] = $senha;
header('location:index.php');
}
else{
  unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
  echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha estão incorretos');window.location.href='login.php';</script>";
  }

?>