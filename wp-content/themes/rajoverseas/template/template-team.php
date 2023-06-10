<?php 
/* Template Name: Team Page*/
 get_header(); ?>
<style>
  .breadcrumbs{
    top: 0; 
    background-size: cover;
    right: 0;
    left: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    padding: 150px 0px;
	  box-shadow: inset 0 0 0 1000px rgb(0 0 0 / 47%);
}
</style>
   <!-- ======= Breadcrumbs ======= -->
<?php $breadcrumbImage = get_theme_mod('breadcrumb_settings'); ?>
    <section class="breadcrumbs" style="background-image: url(<?php echo $breadcrumbImage; ?>);">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2> <?php the_title(); ?></h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li> <?php the_title(); ?></li>
          </ol>
        </div>

      </div>
    </section>

      <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('title6') ?></h2>
          <h3>Our Hardworking <span>Team</span></h3>
        </div>

        <div class="row">
           <?php 
              $tax = $wp_query->get_queried_object();
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              $args= array(
                  'posts_per_page' => 4,
                  'post_type' => 'post',
                  'paged' => $paged,
                  'category_name' => 'Our Team',
                  'orderby' => 'date',
               );
                $the_query = new WP_Query( $args );
               ?>

              <?php 
                  if ( $the_query->have_posts() ) : 
                 while ( $the_query->have_posts() ) : $the_query->the_post(); 
              ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">

                <?php $teamImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'gallery');?>

                 <?php if( has_post_thumbnail() ) { ?>
                  <img src="<?php echo $teamImage['0']; ?>" class="img-fluid" alt="<?php the_title(); ?>">
                  <?php } ?>

              <div class="member-info">
                <h4><?php the_title(); ?></h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>
          <?php endwhile; endif;?>


        </div>

      </div>
    </section>
    <!-- End Team Section -->

<?php get_footer(); ?>