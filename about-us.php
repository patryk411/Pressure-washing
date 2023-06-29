<?php /* Template Name: O nas - Pressure Washing */?>
<?php get_header(); ?>

<div class="section-baner">
  <div class="section-baner__img" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
    <p class="section-baner__img--section-name"><?php the_title(); ?></p>
    <p class="section-baner__img--text"><?php the_field('page_banner_subtitle') ?></p>
    <div class="hero-shadow"></div>

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
             
            <h4 class="main__about-section__content__right-section--about-section-head">
              <?php the_title(); ?>
            </h4>
            <p class="main__about-section__content__right-section--about-section-text"><?php the_content(); ?></p>
        </div>
      </div>
      <?php }
        ?>

</div>
</div>
</div>
</div>
</div>



     <?php get_footer(); ?>