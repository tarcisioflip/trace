<!-- SESSAO DE LOGIN (VERIFICACAO)-->
<?php
// SESSAO LOGIN
include_once 'includes/sessao_login.php';
?>


<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      
      <title>Dashboard - Professor</title>

      <!--IMPORTANDO ICONES-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!--IMPORTANDO ICONES Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

      <!-- ICONES NAVEGADOR -->
      <link rel="icon" href="img/icon-nav.png">

      <!--STYLO CSS -->
      <link rel="stylesheet" type="text/css" href="materialize/css/materialize.css"> 

      <!--OTIMIZANDO PARA MOBILE-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

<!-- MENU SUPERIOR FIXO-->    
    <nav>
      <div class="nav-wrapper">

<!-- LOGO -->
        <a href="index.php"><img src="img/icon.png"></a>
        <br/>


<!-- PERFIL -->
       <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="perfil_professor.php" class="tooltipped" data-position="right" data-tooltip="Perfil"><i class="fas fa-address-card"></i>
            </a>
          </li>                 
        </ul>

       <br/>

     
<!-- CONSULTAR/ADICIONAR ALUNOS -->
        <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="consultar_aluno_professor.php" class="tooltipped" data-position="right" data-tooltip="Alunos"><i class="fas fa-user-graduate"></i>
            </a>
          </li>                 
        </ul>

        <br/>
  

<!-- CONSULTAR/ADICIONAR EVENTOS -->
        <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="consultar_evento_professor.php" class="tooltipped" data-position="right" data-tooltip="Eventos"><i class="fas fa-calendar-alt"></i>
            </a>
          </li>                 
        </ul>    
        <br/>
        
<!-- Sair -->
        <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <hr>
            <a href="logout.php" class="tooltipped" data-position="right" data-tooltip="Sair"><i class="fas fa-sign-out-alt"></i>
            </a>
          </li>                 
        </ul>    
        <br/>




    </nav>

  <body>
    