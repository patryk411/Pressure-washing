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

        <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>
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
