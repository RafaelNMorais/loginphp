<?php

session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true) and (!sset ($_SESSION['acesso']) == true ) ) {
if($_SESSION['acesso'] == "1"){
  echo "Nivel numero 1 = Administrador";
} elseif($_SESSION['acesso'] != "1"){
  echo "Nivel diferente de 1 = Usuario normal";
}
{
}
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  unset($_SESSION['acesso']);
  header('location:login.php');
  }
 
$logado = $_SESSION['usuario'];
?>