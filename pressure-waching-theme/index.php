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

<!-- <nav class="navbar navbar-expand-lg py-4 position-fixed w-100">
  <div class="container">
    <a class="navbar-brand" href="#">
    <img src="<?php echo get_template_directory_uri(); ?>/img/prowash.png" width="150" height="100" />
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">O nas</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <a class="nav-link" href="#">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontakt</a>
        </li>
    </ul>
    </div>
   <button class="btn btn-nav" type="submit"><span class="btn-text">Wycena</span></button>
  </div>
</nav> -->
 
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


<main class="main m-0 p-0">
  <div class="container">
    <div class="main__feature-services">
      <div class="row m-0 p-0">

        <div class="main__feature-services__box box-one col-sm-12 col-lg-4">
          <i class="fa-solid fa-house"></i>          
          <h3 class="main__feature-services__box--heading">Lorem, ipsum dolor.</h3>
          <div class="line">
          <span class="lines"></span>
          <span class="lines"></span>
          <span class="lines"></span>
          </div>
          <p class="main__feature-services__box--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum modi et doloribus nemo sapiente accusantium architecto, excepturi laudantium aspernatur at!</p>
          <i class="fa-solid fa-arrow-right"></i>
        </div>

        <div class="main__feature-services__box box-one col-sm-12 col-lg-4">
          <i class="fa-solid fa-house"></i>          
          <h3 class="main__feature-services__box--heading">Lorem, ipsum dolor.</h3>
          <div class="line">
          <span class="lines"></span>
          <span class="lines"></span>
          <span class="lines"></span>
          </div>
          <p class="main__feature-services__box--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum modi et doloribus nemo sapiente accusantium architecto, excepturi laudantium aspernatur at!</p>
          <i class="fa-solid fa-arrow-right"></i>
        </div>
        
        <div class="main__feature-services__box box-one col-sm-12 col-lg-4">
          <i class="fa-solid fa-house"></i>          
          <h3 class="main__feature-services__box--heading">Lorem, ipsum dolor.</h3>
          <div class="line">
          <span class="lines"></span>
          <span class="lines"></span>
          <span class="lines"></span>
          </div>
          <p class="main__feature-services__box--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum modi et doloribus nemo sapiente accusantium architecto, excepturi laudantium aspernatur at!</p>
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </div>
     </div>

     <div class="main__about-section mb-5 py-5">
      <div class="main__about-section__content">
        <div class="row m-0 p-0">
        <div class="main__about-section__content__left-section col-sm-10 col-lg-5">
        <img class="main__about-section__content__left-section--img" src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="...">
        </div>

        <div class="main__about-section__content__right-section col-sm-2 col-lg-1">
        </div>

        <div class="main__about-section__content__right-section col-sm-10 col-lg-5">
          <h3 class="main__about-section__content__right-section--heading">Rozpocznijmy współpracę!</h3>
          <h5 class="main__about-section__content__right-section--head">
          <div class="line py-5">
              <span class="lines"></span>
              <span class="section-name">O firmie</span>
              </div>
              </h5>
          <p class="main__about-section__content__right-section--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque libero possimus tenetur? Consectetur repellendus sequi atque ut minima obcaecati natus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad autem possimus a recusandae in, deserunt, magni molestiae consequatur, ducimus quod alias maiores quisquam nemo unde.</p>
          <button class="btn btn-nav" type="submit"><span class="btn-text">Czytaj więcej</span></button>
        </div>
        </div>
      </div>
    </div>
     </div>

     <div class="main__services py-5">
       <div class="container-fluid m-0 p-0">
      <div class="main__services__content">
        <h3 class="main__services__content--section-heading">
          Usługi które świadczymy
        </h3>
        <div class="container">
        <div class="row d-flex justify-content-evenly m-0 p-0">
          

        <div class="main__services__content__box col-sm-12 col-md-6 col-lg-6">
            <div class="main__services__content__box__main">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <button class="btn btn-services" type="submit"><span class="btn-text"></span><i class="fa-sharp fa-solid fa-arrow-right-long"></i></button>

                <h3 class="card-head">Lorem, ipsum dolor.</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>
          </div>
          <div class="main__services__content__box col-sm-12 col-md-6 col-lg-6">
            <div class="main__services__content__box__main">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <button class="btn btn-services" type="submit"><span class="btn-text"></span><i class="fa-sharp fa-solid fa-arrow-right-long"></i></button>

                <h3 class="card-head">Lorem, ipsum dolor.</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>
          </div>

          <div class="main__services__content__box col-sm-12 col-md-6 col-lg-6">
            <div class="main__services__content__box__main">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <button class="btn btn-services" type="submit"><span class="btn-text"></span><i class="fa-sharp fa-solid fa-arrow-right-long"></i></button>

                <h3 class="card-head">Lorem, ipsum dolor.</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>
          </div>

          <div class="main__services__content__box col-sm-12 col-md-6 col-lg-6">
            <div class="main__services__content__box__main">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
              <button class="btn btn-services" type="submit"><span class="btn-text"></span><i class="fa-sharp fa-solid fa-arrow-right-long"></i></button>
                <h3 class="card-head">Lorem, ipsum dolor.</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

      <div class="main__statistic">
        <div class="main__statistic__hero-img col-12">
          <div class="container">
            <div class="row m-0 p-0">
            <div class="main__statistic__hero-img__content">
              
              <div class="main__statistic__hero-img__content__left-section col-sm-12 col-lg-6 py-5">
                <div class="main__statistic__hero-img__content__left-section__single-box">
                  <h3 class="main__statistic__hero-img__content__left-section__single-box--title py-5">
                    Lorem, ipsum dolor.
                  </h3>
                  <div class="line py-5">
                    <span class="lines"></span>
                    <span class="section-name">Statystyki firmy</span>
                  </div>
                <p class="main__statistic__hero-img__content__left-section__single-box--text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum maxime dicta blanditiis laboriosam nemo ipsa molestias quod iste quisquam, perspiciatis repellendus, eligendi voluptate nesciunt! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam architecto, optio necessitatibus quos libero debitis ipsa nostrum nulla nihil. Illo fuga reprehenderit quis? Mollitia hic dignissimos expedita pariatur dolorem provident dolores veniam magni soluta enim, amet delectus est quo reprehenderit, nulla cum eaque illo accusamus ullam id consectetur sint eveniet..Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, hic?
                </p>
              </div>
            </div>
            <div class="main__statistic__hero-img__content__right-section col-sm-12 col-lg-6 py-5">
              <div class="main__statistic__hero-img__content__right-section__single-box">
                <div class="row">

                  <div class="main__statistic__hero-img__content__right-section__single-box__box col-sm-6">
                    <h2 class="main__statistic__hero-img__content__right-section__single-box__box--heading">
                      <span class="count">01</span>
                    </h2>
                    <h3 class="main__statistic__hero-img__content__right-section__single-box__box--title py-5">
                      <span class="count-js">1</span><i class="fa-solid fa-plus"></i>
                      <span class="count-text">Lorem ipsum dolor sit amet.</span>
                 </h3>
                </div>

                <div class="main__statistic__hero-img__content__right-section__single-box__box col-sm-6">
                    <h2 class="main__statistic__hero-img__content__right-section__single-box__box--heading">
                      <span class="count">02</span>
                    </h2>
                    <h3 class="main__statistic__hero-img__content__right-section__single-box__box--title py-5">
                      <span class="count-js">1</span><i class="fa-solid fa-plus"></i>
                      <span class="count-text">Lorem ipsum dolor sit amet.</span>
                 </h3>
                </div>

                <div class="main__statistic__hero-img__content__right-section__single-box__box col-sm-6">
                    <h2 class="main__statistic__hero-img__content__right-section__single-box__box--heading">
                      <span class="count">03</span>
                    </h2>
                    <h3 class="main__statistic__hero-img__content__right-section__single-box__box--title py-5">
                      <span class="count-js">1</span><i class="fa-solid fa-plus"></i>
                      <span class="count-text">Lorem ipsum dolor sit amet.</span>
                 </h3>
                </div>

              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
        <!-- </div> -->
        <div class="hero-shadow"></div>
        </div>
      </div>
          

     </div>
  </main>
  
  
  
  <?php wp_footer(); ?>
  <script src="<?php bloginfo("template_directory"); ?>/js/script.js"></script>
  <script src="https://kit.fontawesome.com/52989f7b96.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
  crossorigin="anonymous"></script>
</body>
</html>