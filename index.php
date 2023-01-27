<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <style>
      .banner{
        background-image: url('img/banner.jpg');
        width: 100%;
        height: 200px;
      }
    </style>
  </head>
  <body>
    <div class="banner"></div>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     <div class="container-fluid">


       <a class="navbar-brand" href="#">Biblioteca</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
            <li class="nav-item">
             <a class="nav-link" aria-current="page" href="index.php">Início</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"     href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Biblioteca
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?page=biblioteca-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=biblioteca-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"     href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Atendentes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"     href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alunos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?page=aluno-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=aluno-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"     href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?page=categoria-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=categoria-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"     href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?page=livro-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=livro-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"     href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reservas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="?page=reserva-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=reserva-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-lg-12 mt-5">
      <?php
        //conexão com o banco de dados
        include('config.php');
        //inclusão das páginas
        switch(@$_REQUEST["page"]){
          //biblioteca
          case "biblioteca-cadastrar":
            include("pages/biblioteca-cadastrar.php");
          break;
          case "biblioteca-listar":
            include("pages/biblioteca-listar.php");
          break;
          case "biblioteca-editar":
            include("pages/biblioteca-editar.php");
          break;
          case "biblioteca-salvar":
            include("pages/biblioteca-salvar.php");
          break;
            //atendente
          case "atendente-cadastrar":
            include("pages/atendente-cadastrar.php");
          break;
          case "atendente-listar":
            include("pages/atendente-listar.php");
          break;
          case "atendente-editar":
            include("pages/atendente-editar.php");
          break;
          case "atendente-salvar":
            include("pages/atendente-salvar.php");
          break;
            //aluno
          case "aluno-cadastrar":
            include("pages/aluno-cadastrar.php");
          break;
          case "aluno-listar":
            include("pages/aluno-listar.php");
          break;
          case "aluno-editar":
            include("pages/aluno-editar.php");
          break;
          case "aluno-salvar":
            include("pages/aluno-salvar.php");
          break;
            //categoria
          case "categoria-cadastrar":
            include("pages/categoria-cadastrar.php");
          break;
          case "categoria-listar":
            include("pages/categoria-listar.php");
          break;
          case "categoria-editar":
            include("pages/categoria-editar.php");
          break;
          case "categoria-salvar":
            include("pages/categoria-salvar.php");
          break;
            //livro
          case "livro-cadastrar":
            include("pages/livro-cadastrar.php");
          break;
          case "livro-listar":
            include("pages/livro-listar.php");
          break;
          case "livro-editar":
            include("pages/livro-editar.php");
          break;
          case "livro-salvar":
            include("pages/livro-salvar.php");
          break;
            //reserva
          case "reserva-cadastrar":
            include("pages/reserva-cadastrar.php");
          break;
          case "reserva-listar":
            include("pages/reserva-listar.php");
          break;
          case "reserva-editar":
            include("pages/reserva-editar.php");
          break;
          case "reserva-salvar":
            include("pages/reserva-salvar.php");
          break;
          default:
            include("pages/main.php");
      }
      ?>

    </div>
  </div>
</div>
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>