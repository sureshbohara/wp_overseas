 <style>
  .isoSystem{
    top: 0; 
    background-size: cover;
    right: 0;
    left: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    padding: 0px 0px;
}
</style>
<section id="clients" class="clients isoSystem" style="background-image: url(<?php echo get_theme_mod('bg_image5_settings') ?>);">
   <div class="container">
      <div class="row aos-init aos-animate" data-aos="zoom-in">
          <div class="col-md-3">

                <h2 class="isotitle"><?php echo get_theme_mod('title7') ?></h2>
  
          </div>
          <div class="col-md-9">
              <div class="row">
			  <?php if(get_theme_mod('iso_logo1')) { ?>
              <div class="col-lg-3 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                 <img src="<?php echo get_theme_mod('iso_logo1','gallery') ?>">
             </div>
			<?php } ?>
             <?php if(get_theme_mod('iso_logo2')) { ?>
             <div class="col-lg-3 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                 <img src="<?php echo get_theme_mod('iso_logo2','gallery') ?>">
             </div>
			<?php } ?>
             <?php if(get_theme_mod('iso_logo3')) { ?>
             <div class="col-lg-3 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                 <img src="<?php echo get_theme_mod('iso_logo3','gallery') ?>">
             </div>
			 <?php } ?>
		    <?php if(get_theme_mod('iso_logo4')) { ?>
             <div class="col-lg-3 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                 <img src="<?php echo get_theme_mod('iso_logo4','gallery') ?>">
             </div>
				<?php } ?>
				<?php if(get_theme_mod('iso_logo5')) { ?>
				<div class="col-lg-3 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                 <img src="<?php echo get_theme_mod('iso_logo5','gallery') ?>">
             </div>
				  
			 <?php } ?>
		    <?php if(get_theme_mod('iso_logo7')) { ?>
		 <div class="col-lg-3 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                 <img src="<?php echo get_theme_mod('iso_logo6','gallery') ?>">
             </div>
				  
				 <?php } ?>
		 <?php if(get_theme_mod('iso_logo7')) { ?>
			<div class="col-lg-3 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                 <img src="<?php echo get_theme_mod('iso_logo7','gallery') ?>">
             </div>
				  
				  <?php } ?>
             </div>
          </div>
              

      </div>
   </div>
</section>