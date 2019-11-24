<?php
  session_start();
  if((isset($_SESSION['login'])) and (isset($_SESSION['senha'])))
  // se estiver logado 
{
  unset($_SESSION['login']); // destruir sessão login
  unset($_SESSION['senha']); // destruir sessão senha
  header('location:index.html'); // redirecionar para página index.html
}
?>

