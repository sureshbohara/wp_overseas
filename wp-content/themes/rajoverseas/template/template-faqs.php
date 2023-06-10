<?php 
/* Template Name: Faq's Page*/
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
        <div class="d-flex justify-content-between align-items-center brdText">
          <h2> <?php the_title(); ?></h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li> <?php the_title(); ?></li>
          </ol>
        </div>

      </div>
    </section>

     <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo get_theme_mod('title7') ?></h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">
               
                <?php 
                $tax = $wp_query->get_queried_object();
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args= array(
                    'posts_per_page' => 4,
                    'post_type' => 'post',
                    'paged' => $paged,
                    'category_name' => 'FAQ’s',
                    'orderby' => 'date',
                 );
                  $the_query = new WP_Query( $args );
                 ?>

                <?php 
                    if ( $the_query->have_posts() ) : 
                   while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?>
              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1"><?php the_title(); ?><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>
              </li>
              <?php endwhile; endif;?>



            </ul>
          </div>
        </div>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

<?php get_footer(); ?>