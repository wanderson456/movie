<?php
require_once("globals.php");
require_once("db.php");
$flassMessage = [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.css"
    integrity="sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    

     





    <link rel="short icon " href="<?= $BASE_URL ?>img/moviestar.ico">

    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
    <header>
    <nav id="main-navbar" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?= $BASE_URL ?>">
            <img id="logo" src="<?= $BASE_URL ?>img/logo.svg" alt="MovieStar">
            <span id="moviestar-title">MovieStar</span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        
        <form id="search-form" class="form-inline my-2 my-lg-0" action="<?= $BASE_URL?>search.php" method="GET">
           
            <input name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
            <button id="search" class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          
        </form>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav"></ul>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $BASE_URL ?>auth.php">Entrar / Cadastrar</a>
                    </li>

                </div>


            </a>

        </nav>
    </header>

    <?php  if(!empty($flassMessage["msg"])):?>
        <div class="msg-container">
        <p class="msg <?= $flassMessage["type"]?>"><?=$flassMessage["msg"]?></p>

    </div>


    <?php endif; ?>
   