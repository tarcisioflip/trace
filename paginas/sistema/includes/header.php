

<!-- SESSAO DE LOGIN (VERIFICACAO)-->
<?php
// SESSAO LOGIN
include_once 'includes/sessao_login.php';
?>


<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      
      <title>Dashboard</title>

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
        <a href="#"><img src="img/icon.png"></a>
        <br/>

<!-- PERFIL 
       <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="#" class="tooltipped" data-position="right" data-tooltip="Perfil"><i class="fas fa-address-card"></i>
            </a>
          </li>                 
        </ul>

       <br/>
-->
<!-- CONSULTAR/ADICONAR CURSOS -->
        <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="consultar_curso.php" class="tooltipped" data-position="right" data-tooltip="Cursos"><i class="fas fa-graduation-cap"></i>
            </a>
          </li>               
        </ul>

        <br/>


<!-- CONSULTAR/ADICONAR TURMAS -->
        <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="consultar_turma.php" class="tooltipped" data-position="right" data-tooltip="Turmas"><i class="fas fa-users"></i>
            </a>
          </li>               
        </ul>

        <br/>


<!-- CONSULTAR/ADICONAR MATERIAS -->
        <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="consultar_materia.php" class="tooltipped" data-position="right" data-tooltip="Matérias"><i class="fas fa-book"></i>
            </a>
          </li>                 
        </ul>

        <br/>

<!-- CONSULTAR/ADICIONAR ALUNOS -->
        <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="consultar_professor.php" class="tooltipped" data-position="right" data-tooltip="Professores"><i class="fas fa-chalkboard-teacher"></i>
            </a>
          </li>                 
        </ul>

        <br/>
     
<!-- CONSULTAR/ADICIONAR ALUNOS -->
        <ul class="right hide-on-med-and-down icones-menu">   
          <li>
            <a href="consultar_aluno.php" class="tooltipped" data-position="right" data-tooltip="Alunos"><i class="fas fa-user-graduate"></i>
            </a>
          </li>                 
        </ul>

        <br/>
  

<!-- SAIR --> 
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
    