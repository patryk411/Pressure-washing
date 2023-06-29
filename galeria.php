<?php /* Template Name: Galeria - Pressure Washing */?>
<?php get_header(); ?>

<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>

    </div>
</div>


<section class="gallery">
    <div class="container">
      <div class="gallery__content">
              <div class="row m-0 p-0">
<?php
        $galleryRealization = new WP_Query(array(
          'posts_per_page' => 5,
          'post_type' => 'realization'
        ));

        while($galleryRealization->have_posts()) {
          $galleryRealization->the_post();?>

                <div class="gallery__content__box col-sm-12 col-lg-6">
                <img src="<?php $galleryImg = get_field('img_card'); echo $galleryImg['url'] ?>" class="card-img-top" alt="...">
                    <h3 class="gallery__content__box--title"><?php the_title();?></h3>
                    <p class="gallery__content__box--text gallery__content__box--single-realization"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                    <a href="<?php the_permalink(); ?>"><button class="btn btn-nav" type="submit"><span class="btn-text">Czytaj więcej</span></button></a>
                </div>
                
<?php }
?>

</div>
</div>
</div>
</section>




<?php get_footer(); ?>
