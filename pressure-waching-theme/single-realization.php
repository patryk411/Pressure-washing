<?php 

$realization = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'reazlization',
    'orderby' => 'title',
    'meta_query' => array(
        array(
            'key' => 'realization',
            'compare' => 'LIKE',
            'value' => '"' . get_the_ID() . '"'
        )
    )
        ));
    
        if($realization->have_posts()) {

            
            while($realization->have_posts()) {
                $realization->the_post();?>
            <div class="gallery__content__box col-md-12 col-lg-8">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mycie3.jpg" alt="" class="gallery__content__box--img">
                <h3 class="gallery__content__box--title">Lorem, ipsum dolor.</h3>
                <p class="gallery__content__box--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aut quam corporis et excepturi distinctio.</p>
            </div>
            <?php }
            wp_reset_postdata();
        }
        

?>