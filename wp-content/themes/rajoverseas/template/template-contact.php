<?php 
/* Template Name: Contact Page*/
 get_header(); ?>

    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center brdText">
          <h2> <?php the_title(); ?></h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li> <?php the_title(); ?></li>
          </ol>
        </div>

      </div>
    </section>

 <section class="contact section-bg">
		
		<div class="section-title">
          <h2><?php echo get_theme_mod('title8') ?></h2>
        </div>
		<?php echo get_theme_mod('map_location_link') ?>
      <div class="container py-4" data-aos="fade-up">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
			
          <div class="col-lg-6">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-2">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo get_theme_mod('address') ?></p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="info-box  mb-2">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?php echo get_theme_mod('email_setting') ?></p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="info-box  mb-2">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?php echo get_theme_mod('mobile_number') ?></p>
            </div>
           </div>
           </div>
          </div>

          <div class="col-lg-6">
            <form action="<?php echo get_home_url(); ?>/forms/contact.php" method="post" role="form" class="php-email-form"  novalidate="true">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('title8') ?></h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo get_theme_mod('address') ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?php echo get_theme_mod('email_setting') ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?php echo get_theme_mod('mobile_number') ?></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <?php echo get_theme_mod('map_location_link') ?>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

<?php get_footer(); ?>