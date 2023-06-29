<?php get_header(); ?>

<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>

    </div>

    <div class="section-baner__content py-5">
    <div class="container">

        <div class="row">
        <div class="section-baner__content__left col-lg-8 col-sm-12">
                <p class="section-baner__content__left--heading"><?php the_title(); ?></p>
                <p class="section-baner__content__left--text"><?php the_content(); ?></p>
                <?php the_post_thumbnail(); ?>
        </div>

        <div class="section-baner__content__right col-lg-4 col-sm-12 py-5">
        <div class="section-baner__content__right col-md-12 col-lg m-0 p-0">
                    <div class="section-baner__content__right__top">
                      <h3 class="section-baner__content__right__top--heading py-5">Zapytaj o wycenę</h3>
                    </div>
                    <div class="section-baner__content__right__bottom">
                      <form class="row p-0 m-0">
                        <div class="col-auto form-label form-first">
                        <label for="staticName" class="visually-hidden">Imię</label>
                        <input type="text" class="form-control" id="staticName" placeholder="Imię">
                      </div>
                      <div class="col-auto form-label">
                        <label for="inputEmail" class="visually-hidden">Email</label>
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
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
        </div>
        </div>


    </div>
    </div>

    
    <div class="section-baner__service-gallery py-5">
        <div class="container">
            <h3 class="section-baner__service-gallery--heading pt-5">
                <?php the_title(); ?>
            </h3>
            <div class="line py-5">
              <span class="lines"></span>
              <span class="section-name">Galeria Usługi</span>
              <span class="lines"></span>
            </div>
            
            <div class="section-baner__service-gallery__carousel">
                
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                    <img src="<?php $pageBannerImage = get_field('img_card'); echo $pageBannerImage['url'] ?>" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php $pageBannerImage = get_field('img_card'); echo $pageBannerImage['url'] ?>" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="8000">
                    <img src="<?php $pageBannerImage = get_field('img_card'); echo $pageBannerImage['url'] ?>" alt="...">
                    </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
            
            
            </div> 
            </div>

        </div>
    </div>
</div>
    
    <?php get_footer(); ?>