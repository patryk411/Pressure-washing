<?php /* Template Name: FAQs - Pressure Washing */?>
<?php get_header(); ?>


<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>

    </div>
</div>

<section class="faqs py-5">
    <div class="container">
    <div class="row">
    <div class="faqs__left col-md-12 col-lg-8">
        <h3 class="faqs__left--heading">Skontaktuj się z nami, nasi operatorzy są dostępni dla ciebie o każdej porze. Masz jakieś pytanie? Zadzwoń do nas!</h3>
        <div class="line py-5">
            <span class="lines"></span>
            <span class="section-name"><?php the_title(); ?></span>
        </div>



  
  <?php echo do_shortcode('[sp_easyaccordion id="344"]'); ?>

    </div>


    <div class="faqs__right col-md-12 col-lg-4">
    <h3 class="faqs__right--heading py-5">Masz jakieś pytanie?</h3>
    <div class="section-baner__content__right faqs-section col-md-12 col-lg m-0 p-0">
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
                        <option>Chciałbym</option>
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
