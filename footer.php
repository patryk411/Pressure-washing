<footer class="footer py-5">
                <div class="container py-5">
                 <div class="row m-0 p-0">
                 <div class="footer__box box-one col-sm-12 col-md-6 col-lg-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/prowash.png" width="250" height="150" />
                  </div>

                  <div class="footer__box box-two col-sm-12 col-md-6 col-lg-3">
                    <h4 class="footer__box--head">O firmie</h4>

                    <p class="footer__box--text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti veniam amet omnis odio velit accusantium.</p>
                    
                    <div class="footer__box__icons">
                    <a href="" class="footer__box__icons--box-icon"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="" class="footer__box__icons--box-icon"><i class="fa-brands fa-square-twitter"></i></i></i></a>
                    <a href="" class="footer__box__icons--box-icon"><i class="fa-brands fa-linkedin"></i></i></a>
                    </div>

                  </div>

                  <div class="footer__box box-three col-sm-12 col-md-6 col-lg-3">
                    <h4 class="footer__box--head">Skróty</h4>
                    <a href="<?php echo site_url('/o-nas'); ?>" class="footer__box--single-link"><i class="fa-solid fa-arrow-right"></i>O nas</a>
                    <a href="<?php echo site_url('/oferta'); ?>" class="footer__box--single-link"><i class="fa-solid fa-arrow-right"></i>Oferta</a>
                    <a href="<?php echo site_url('/faqs'); ?>" class="footer__box--single-link"><i class="fa-solid fa-arrow-right"></i>FAQ</a>
                    <a href="<?php echo site_url('/galeria'); ?>" class="footer__box--single-link"><i class="fa-solid fa-arrow-right"></i>Galeria</a>
                    <a href="<?php echo site_url('/kontakt'); ?>" class="footer__box--single-link"><i class="fa-solid fa-arrow-right"></i>Kontakt</a>
                  </div>

                  <div class="footer__box box-four col-sm-12 col-md-6 col-lg-3">
                  <h4 class="footer__box--head">Kontakt</h4>
                    <a href="" class="footer__box--contact"><i class="fas fa-phone"></i>+48 531 642 640</a>
                    <a href="" class="footer__box--contact"><i class="fas fa-phone"></i>+48 531 642 640</a>
                    <a href="mailto:kontakt@zapraszam.pl" class="footer__box--contact"><i class="fa-solid fa-envelope"></i>kontakt@zapraszam.pl</a>
                    <p class="footer__box--contact"class="footer__box--contact"><i class="fa-solid fa-location-dot"></i>Lodz, Poland</p>
                  </div>
                 </div>

                </div>
              </footer>
  
  
  
  <?php wp_footer(); ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      startEvent: 'DOMContentLoaded',    
      offset: 200,
      once: false,
    });
    </script>
  <script src="https://kit.fontawesome.com/52989f7b96.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/script.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/nav.js"></script>
</body>
</html>