<?php
session_start();
$_SESSION['haloo'] = 'dunia';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="icon_udinus.png">    
    <title>Bengkel Koding</title>

    <!-- load bootstrap v5 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  </head>
  <body>

    <?php 
    var_dump($_SESSION['haloo']);
    if ($_SESSION['haloo'] == 'dunia') {
        echo '<meta http-equiv="refresh" content="5;url=https://example.com">';
    }
    ?>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #0e4584;" >
    <div class="container">
        <a class="navbar-brand" href="http://bengkelkoding.dinus.ac.id">Bengkel Koding</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ms-5 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/bengkod-kampus">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=a56764040f7c92578bb2c011f845aae9">Web Developer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=1d63721b0fb4c25cbae5c02375064885">Mobile Developer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=05523a261ba32a27ed36e885a86f9fed">Data Science</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=a82f3db817c535a4bae230a7ce1aebdd">Computer Vision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=60ffabea50867a5af1ab63905905c95a">Game Programming</a>
                </li>
            </ul>
            <button class="btn">Login</button>
        </div>
    </div>
    </nav>

