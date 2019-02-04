<?php
// Conexão
require_once 'php_action/db_connect.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
  header('Location: login_adm.php');
endif;
?>