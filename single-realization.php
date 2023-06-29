<?php get_header(); ?>

<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>

    </div>
</div>


<section class="gallery-single mb-5">
    <div class="container">
        <div class="gallery-single__content m-0 p-0">
                <div class="row m-0">

                <div class="gallery-single__content__box col-md-12 col-lg-8">
                <img src="<?php $galleryImg = get_field('img_card'); echo $galleryImg['url'] ?>" class="card-img-top realization-img" alt="...">
                    <h3 class="gallery-single__content__box--title"><?php the_title();?></h3>
                    <p class="gallery-single__content__box--text single-text"><?php the_content(); ?></p>
                </div>

                <div class="gallery-single__content__right col-lg-4 col-sm-12 py-5">
                  <div class="gallery-single__content__right col-md-12 col-lg m-0 p-0">
                    <div class="galler-single__content__right__top">
                      <h3 class="gallery-single__content__right__top--heading py-5">Podoba ci się nasz praca? Napisz do nas!</h3>
                    </div>
                    <div class="gallery-single__content__right__bottom">
                      <form class="row p-0 m-0">
                        <div class="col-auto form-label form-first">
                        <label for="staticName" class="visually-hidden">Imię</label>
                        <input type="text" class="form-control" id="staticName" placeholder="Imię">
                      </div>
                        <div class="col-auto form-label form-first">
                        <label for="staticSecondName" class="visually-hidden">Nazwisko</label>
                        <input type="text" class="form-control" id="staticSecondName" placeholder="Nazwisko">
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
</section>



<?php get_footer(); ?>