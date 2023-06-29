<?php get_header(); ?>

<header class="header">
<div class="container-fluid m-0 p-0">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="...">
        <div class="carousel-shadow"></div>
        <div class="carousel-caption d-none d-md-block">
          <p>Some representative placeholder content</p>
          <a href="<?php echo site_url('/kontakt'); ?>"><button class="btn btn-nav" type="submit"><span class="btn-text">Napisz do nas!</span></button></a>
        </div>
      </div>
      <div class="carousel-item">
      <img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="...">
      <div class="carousel-shadow"></div>      
      <div class="carousel-caption d-none d-md-block">
          <p>Some representative placeholder content.</p>
          <a href="<?php echo site_url('/kontakt'); ?>"><button class="btn btn-nav" type="submit"><span class="btn-text">Napisz do nas!</span></button></a>
        </div>
      </div>
      <div class="carousel-item">
      <img class="carousel-img" src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="...">
      <div class="carousel-shadow"></div>      
      <div class="carousel-caption d-none d-md-block">
          <p>Some representative placeholder content</p>
          <a href="<?php echo site_url('/kontakt'); ?>"><button class="btn btn-nav" type="submit"><span class="btn-text">Napisz do nas!</span></button></a>
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

<main class="main">
  <div class="container">
    <div class="main__feature-services">
      <div class="row m-0 p-0">

        <div class="main__feature-services__box box-one col-sm-12 col-lg-4">
        <i class="fa-solid fa-house feature-icon"></i>
        <h3 class="main__feature-services__box--heading">Lorem, ipsum dolor.</h3>
          <div class="line">
          <span class="lines"></span>
          <span class="lines"></span>
          <span class="lines"></span>
          </div>
          <p class="main__feature-services__box--text">Zespół naszej firmy specjalizuje się w kompleksowym czyszczeniu podjazdów i elewacji. Wykorzystujemy zaawansowany sprzęt i skuteczne środki chemiczne, które gwarantują doskonałe efekty czyszczenia.</p>
          <i class="fa-solid fa-arrow-right"></i>
        </div>

        <div class="main__feature-services__box box-one col-sm-12 col-lg-4">
        <i class="fa-sharp fa-solid fa-calendar-days feature-icon"></i>          
        <h3 class="main__feature-services__box--heading">Lorem, ipsum dolor.</h3>
          <div class="line">
          <span class="lines"></span>
          <span class="lines"></span>
          <span class="lines"></span>
          </div>
          <p class="main__feature-services__box--text">Nasza firma jest elastyczna pod względem ustalania harmonogramu prac. Dokładamy wszelkich starań, aby dostosować się do preferencji klienta oraz uwzględnić prognozy pogody.</p>
          <i class="fa-solid fa-arrow-right"></i>
        </div>
        
        <div class="main__feature-services__box box-one col-sm-12 col-lg-4">
        <i class="fa-solid fa-book feature-icon"></i> 
        <h3 class="main__feature-services__box--heading">Lorem, ipsum dolor.</h3>
          <div class="line">
          <span class="lines"></span>
          <span class="lines"></span>
          <span class="lines"></span>
          </div>
          <p class="main__feature-services__box--text">Przed przystąpieniem do działań zawsze poświęcamy czas i uwagę na dokładne zrozumienie Twoich oczekiwań. Chcemy zapewnić Ci usługę, która w pełni odpowiada Twoim potrzebom i spełnia Twoje oczekiwania.</p>
          <i class="fa-solid fa-arrow-right"></i>
        </div>
      </div>
     </div>

<div class="main">
<div class="main__about-section mb-5 py-5">
<div class="main__about-section__content">
<div class="container">
<div class="row m-0 p-0">
          
<?php 
$aboutPost = new WP_Query(array(
  'posts_per_page' => 1,
));


while($aboutPost->have_posts()) {
  $aboutPost->the_post();?>
  <div class="main__about-section__content__left-section col-sm-12 col-lg-5">
        <img src="<?php $pageBannerImage = get_field('img_card'); echo $pageBannerImage['url'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="main__about-section__content__right-section col-sm-2 col-lg-1 d-none d-lg-block d-xl-block d-xxl-block">
              </div>
              <div class="main__about-section__content__right-section col-sm-12 col-lg-5">
                <h3 class="main__about-section__content__right-section--heading">Rozpocznijmy współpracę!</h3>
                <h5 class="main__about-section__content__right-section--head">
                  <div class="line">
                    <span class="lines"></span>
                    <span class="section-name">O firmie</span>
                  </div>
              </h5>
            <p class="main__about-section__content__right-section--about-section-text"><?php echo wp_trim_words(get_the_content(), 50); ?></p>
          <a href="<?php echo site_url('/o-nas'); ?>"><button class="btn btn-nav" type="submit"><span class="btn-text">Czytaj więcej</span></button></a>
        </div>
      </div>

      <?php }
        ?>
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
          
        <?php
        $homepageEvents = new WP_Query(array(
          'posts_per_page' => 5,
          'post_type' => 'service'
        ));

        while($homepageEvents->have_posts()) {
          $homepageEvents->the_post();?>
          <div class="main__services__content__box col-sm-12 col-md-6 col-lg-6">
            <div class="main__services__content__box__main">
            <div class="card">
              <img src="<?php $pageBannerImage = get_field('img_card'); echo $pageBannerImage['url'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
              <a href="<?php the_permalink(); ?>"><button class="btn btn-services" type="submit"><span class="btn-text"></span><i class="fa-sharp fa-solid fa-arrow-right-long"></i></button></a>

                <h3 class="card-head"><?php the_title(); ?></h3>
                <p class="card-text"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
              </div>
            </div>
            </div>
          </div>
          <?php }
        ?>

        

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

                  <div class="main__statistic__hero-img__content__right-section__single-box__box col-sm-6 count-div">
                    <h2 class="main__statistic__hero-img__content__right-section__single-box__box--heading">
                      <span class="count">01</span>
                    </h2>
                    <h3 class="main__statistic__hero-img__content__right-section__single-box__box--title py-5">
                      <span class="count-js">1</span><i class="fa-solid fa-plus"></i>
                      <span class="count-text">Lorem ipsum dolor sit amet.</span>
                 </h3>
                </div>

                <div class="main__statistic__hero-img__content__right-section__single-box__box col-sm-6 count-div">
                    <h2 class="main__statistic__hero-img__content__right-section__single-box__box--heading">
                      <span class="count">02</span>
                    </h2>
                    <h3 class="main__statistic__hero-img__content__right-section__single-box__box--title py-5">
                      <span class="count-js">1</span><i class="fa-solid fa-plus"></i>
                      <span class="count-text">Lorem ipsum dolor sit amet.</span>
                 </h3>
                </div>

                <div class="main__statistic__hero-img__content__right-section__single-box__box col-sm-6 count-div">
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

      <div class="main__banner-section">
        <div class="container">
        <div class="main__banner-section__content py-5">
          <p class="main__banner-section__content--text">Lorem ipsum dolor.</p>
          <h3 class="main__banner-section__content--head">Lorem, ipsum dolor. Lorem ipsum dolor sit amet.</h3>
        </div>
        </div>
      </div>

      
      <div class="main__form-section">
        <div class="hero-shadow"></div>
        <div class="main__form-section__content">
          <div class="row m-0 p-0">
            
            <div class="main__form-section__content__left col-md col-lg-4 my-5 mx-sm-5">
              <h3 class="main__form-section__content__left--heading">Umów się na wycenę</h3>
              <div class="line py-5">
                <span class="lines"></span>
                <span class="section-name">Kontakt</span>
              </div>
              <p class="main__form-section__content__left--text">Zapraszam do kontaktu</p>
              <p class="main__form-section__content__left--second-text">
                <i class="fas fa-phone"></i> +48 415 531 531
              </p>
              <p class="main__form-section__content__left--second-text">
                <i class="fas fa-phone"></i> +48 415 531 531
              </p>
            </div>
            
            
            <div class="main__form-section__content__right col-md-12 col-lg m-0 p-0">
                    <div class="main__form-section__content__right__top">
                      <h3 class="main__form-section__content__right__top--heading">Zapytaj o wycenę</h3>
                    </div>
                    <div class="main__form-section__content__right__bottom py-5">
                      <form class="row p-0 m-0">
                        <div class="col-auto form-label form-first">
                        <label for="staticEmail2" class="visually-hidden">Email</label>
                        <input type="text" class="form-control" id="staticEmail2" placeholder="Email">
                      </div>
                      <div class="col-auto form-label">
                        <label for="inputPassword2" class="visually-hidden">Password</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                      </div>
                      <div class="col-auto form-label">
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Mycie kostki</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="col-auto form-label">
                    <div class="mb-3">
                      <textarea class="form-control is-ok" id="validationTextarea" placeholder="Napisz wiadomość" required></textarea>
                    </div>
                  </div>
                  <div class="col-auto form-label">
                  <button class="btn btn-nav" type="submit"><span class="btn-text">Wyślij zapytanie</span></button>
                  </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>            
    </div>
  </main>


<?php get_footer(); ?>