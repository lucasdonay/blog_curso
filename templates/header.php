<?php

include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>teste</title>
  <!-- Estilos do Projeto  -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
  <!--   Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Logo Navegacao">
    </a>
    <ul id="navbar">
      <li><a href="<?= $BASE_URL ?>/index.php" class="nav-link">Home</a></li>
      <li><a href="#" class="nav-link">Categorias</a></li>
      <li><a href="#" class="nav-link">Sobre</a></li>
      <li><a href="<?= $BASE_URL ?>/contact.php" class="nav-link">Contatos</a></li>
    </ul>
  </header>
