<link rel="stylesheet" type="text/css" href="css/style1.css">
<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase text-left"><?php echo get_theme_mod('company_name'); ?></h5>

        <p class="text-left">
      <?php echo get_theme_mod('company_text');?>
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
       

        <h5 class="text-uppercase text-left">Links</h5>
<li class="list-unstyled text-left">          <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );?>
</li>
</div>
      <!--Grid column-->
      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 text-left"><b>Contact</b></h5>
<br>
        <ul class="list-unstyled text-left">
          <li>
            <p><i class="fas fa-home"></i>  <?php echo get_theme_mod('company_address');?></p>
          </li>
          <li>
           <p><i class="fas fa-envelope"></i>  <?php echo get_theme_mod('company_email_address');?></p>
          </li>
            <p><i class="fas fa-phone"></i> <?php echo get_theme_mod('company_phone_number');?></p>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

<div class="p-4" style="background-color: rgba(0, 0, 0, 0.1)">

<a href="<?php echo get_theme_mod('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
<a href="<?php echo get_theme_mod('twitter'); ?>"><i class="fab fa-twitter"></i></a>
<a href="<?php echo get_theme_mod('google'); ?>"><i class="fab fa-google"></i></a>
<a href="<?php echo get_theme_mod('linkedin'); ?>"><i class="fab fa-linkedin"></i></a>
  </div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2021 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">CarWp</a>
  </div>
  
  <!-- Copyright -->
</footer>
<!-- Footer -->




<!-- Footer -->
<?php wp_footer(); ?>
</body>
</html>