 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      
       <div class="carousel-inner">
       <?php
    $args = array(
    'post_type' => 'slider',
    'posts_per_page' => 6,
    );
    $the_query = new WP_Query ( $args ); 
    ?>

      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>  
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <div class="carousel-item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
        <img src="<?php echo $backgroundImg[0]; ?>" alt="<?php the_title_attribute(); ?>" class="d-block w-100" style="width: 100%;height: auto;object-fit: cover;">
      </div>

     <?php endwhile; endif; ?>
    </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>