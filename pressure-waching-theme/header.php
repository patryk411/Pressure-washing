<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mycie cisnieniowe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/css/style.css" />
    <?php wp_head(); ?>

</head>
<body>

<nav class="navbar navbar-expand-lg py-4 position-fixed w-100">
  <div class="container">
    <a class="navbar-brand" href="<?php echo site_url('/home'); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/img/prowash.png" width="150" height="100" />
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url('/home'); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/O nas'); ?>">O nas</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo site_url('/Oferta'); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Oferta
                <i class="fa-solid fa-chevron-down"></i>  
            </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/FAQs'); ?>">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Galeria'); ?>">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/Kontakt'); ?>">Kontakt</a>
        </li>
    </ul>
    </div>
   <button class="btn btn-nav" type="submit"><span class="btn-text">Wycena</span></button>
  </div>
</nav>
 
<header class="header">
<div class="container-fluid m-0 p-0">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="...">
        <div class="carousel-shadow"></div>
        <div class="carousel-caption d-none d-md-block">
          <p>Some representative placeholder content</p>
          <button class="btn btn-nav" type="submit"><span class="btn-text">Napisz do nas!</span></button>
        </div>
      </div>
      <div class="carousel-item">
      <img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="...">
      <div class="carousel-shadow"></div>      
      <div class="carousel-caption d-none d-md-block">
          <p>Some representative placeholder content.</p>
          <button class="btn btn-nav" type="submit"><span class="btn-text">Napisz do nas!</span></button>
        </div>
      </div>
      <div class="carousel-item">
      <img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="...">
      <div class="carousel-shadow"></div>      
      <div class="carousel-caption d-none d-md-block">
          <p>Some representative placeholder content</p>
          <button class="btn btn-nav" type="submit"><span class="btn-text">Napisz do nas!</span></button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
</div>
</div>
</header>

<?php 
?>