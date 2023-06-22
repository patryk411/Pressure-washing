<?php /* Template Name: Galeria - Pressure Washing */?>
<?php get_header(); ?>

<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>

    </div>
</div>

<section class="gallery py-5">
    <div class="container">
        <div class="row m-0 p-0">
            <div class="gallery__content">
                <div class="gallery__content__box col-md-12 col-lg-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="" class="gallery__content__box--img">
                    <h3 class="gallery__content__box--title">Lorem, ipsum dolor.</h3>
                    <p class="gallery__content__box--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aut quam corporis et excepturi distinctio.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
