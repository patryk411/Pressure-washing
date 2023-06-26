<?php /* Template Name: Kontakt - Pressure Washing */?>
<?php get_header(); ?>

<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>

    </div>
</div>

<div class="contact pt-5">
  <div class="container">
    <div class="contact__content py-5">
      <div class="row m-0 p-0">

      <div class="contact__content__top">
      <div class="contact__content__top__box col-sm-12 col-md-12 col-lg-4">
      <i class="fa-solid fa-mobile-screen-button"></i>      
      <div class="contact__content__top__box__text">
        <h4 class="contact__content__top__box__text--heading">Numer telefonu</h4>
        <p class="contact__content__top__box__text--text">Chcesz o coś zapytać? Zadzwoń do nas, Śmiało!</p>
        </div>
      </div>
      <div class="contact__content__top__box col-sm-12 col-md-12 col-lg-4">
      <i class="fa-solid fa-envelope-open-text"></i>      <div class="contact__content__top__box__text">
        <h4 class="contact__content__top__box__text--heading">Email Address</h4>
        <p class="contact__content__top__box__text--text">Napisz do nas w formie Email</p>
        </div>
      </div>
      <div class="contact__content__top__box col-sm-12 col-md-12 col-lg-4">
      <i class="fa-solid fa-map-pin"></i>        
      <div class="contact__content__top__box__text">
        <h4 class="contact__content__top__box__text--heading">Lokalizacja</h4>
        <p class="contact__content__top__box__text--text">Twój adres, Polska</p>
        </div>
      </div>
      </div>

      <h1 class="contact__content--head-one">
        Bez wahania skontaktuj z nami, bez względu na to, czy wybierzesz telefon czy wiadomość. Gwarantujemy Ci naszą pełną pomoc w znalezieniu właściwej usługi.
      </h1>

      <form class="contact__content__form py-5">
        <div class="row m-0 p-0">
        <div class="col-sm-12 col-lg-4 input-box">
          <input type="Name" class="form-control" id="exampleFormControlInput1" placeholder="Imię">
        </div>
        <div class="col-sm-12 col-lg-4 input-box">
          <input type="Email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
        </div>
        <div class="col-sm-12 col-lg-4 input-box">
          <input type="Number" class="form-control" id="exampleFormControlInput1" placeholder="Telefon">
        </div>
        <div class="col-lg-12 input-box">
          <textarea class="form-control" placeholder="Treść wiadomości" id="floatingTextarea"></textarea>
        </div>
        <div class="col-lg-4 btn-box">
        <a href=""><button class="btn btn-nav" type="submit"><span class="btn-text">Wyślij wiadomość!</span></button></a>
        </div>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="contact__google-map">asdasd</div>
</div>



<?php get_footer(); ?>
