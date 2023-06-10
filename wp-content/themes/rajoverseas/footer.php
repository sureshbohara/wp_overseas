<!-- ======= Footer ======= -->
   
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
<!--           <?php 
             if(has_custom_logo() || is_customize_preview()){
              the_custom_logo();
             }
           ?> -->
			  <img src="http://rajoverseas.com/wp-content/uploads/2022/11/raj-overseas-logo.jpg" style="margin:10px;"/>

            <p>
              <?php echo get_theme_mod('address') ?><br>
              <strong>Phone:</strong> <?php echo get_theme_mod('mobile_number') ?><br>
              <strong>Email:</strong> <?php echo get_theme_mod('email_setting') ?><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
               <?php
                    wp_nav_menu( array( 
                      'theme_location' => 'footer1',
                      'container_class' => 'policy-list justify-content-lg-end justify-content-center'
                  )); 
              ?>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
                <?php
                      wp_nav_menu( array( 
                        'theme_location' => 'footer2',
                        'container_class' => 'policy-list justify-content-lg-end justify-content-center'
                    )); 
                ?>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Connect with us</h4>
            <p>You can connect with us in different social medias.</p>
            <div class="social-links mt-3">
              <a target="_" href="<?php echo get_theme_mod('witttre') ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a target="_" href="<?php echo get_theme_mod('facebook') ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a target="_" href="<?php echo get_theme_mod('instagram') ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a target="_" href="<?php echo get_theme_mod('linkedin') ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

      <div class="container">
		  <div class="row">
			<div class="col-md-3 footerStyle">
             <div class="copyright">
              <?php echo get_theme_mod('copyr_ight') ?>
            </div>
		    </div>
			  
			  <div class="col-md-6 mt-4">
				  <div class="row">
					  <div class="col-md-12">
						   <img src="<?php echo get_theme_mod('footer_logo1','custom-logo') ?>" class="footerLogo">
					  </div>
				  </div>
		      </div>
			  
		 <div class="col-md-3 footerStyle">
         <div class="credits">
           <i class="text-white">Developed by : </i> 
		  <a href="https://www.freelancernepal.com.np" target="_" style="font-size: 20px;color: #fff;"> freelancerunit</a>
       </div>
	  </div>
			  
    </div>
   </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <?php wp_footer(); ?>

</body>

</html>