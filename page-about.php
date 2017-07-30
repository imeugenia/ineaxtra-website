<?php
	/*
		Template Name: About Us Page
	*/
?>


<?php
    if ( is_home() ) :
        get_header();
    else :
        get_header( 'menu-pages' );
    endif;
?>
<?php
  $args_about = array(
    'post_type' => 'about_us_post',

    );

  $query_about = new WP_Query( $args_about ); 
?>
<div class="container main-content">
  <div class="row">
    <!-- loop -->
     <?php if( $query_about->have_posts() ) : while( $query_about->have_posts() ) : $query_about->the_post(); ?>
    <div class="col-md-6">
      <div class="row">
        <div class="photo-container col-md-12 col-xs-4">
          <?php 
            $big_picture = get_field('big_picture');
            $small_picture = get_field('small_picture');

           ?>
          <div class="row">
            <div class="col-md-8">
              <img class="large-img" src="<?php echo $big_picture['url']; ?>" />
              <img class="small-img" src="<?php echo $small_picture['url']; ?>" />
            </div>
          </div>

        </div>
          
        <div class="name col-md-12 col-xs-8">
          <h1><?php the_field('name'); ?> <br><?php the_field('surname'); ?></h1>
        </div>
        <div class="description col-md-10 col-sm-8 col-xs-8">
          <p>
            <?php the_field('description'); ?>
          </p>
          <p>
            <?php if (qtrans_getLanguage() == 'en') {
              echo '<span class="bold">Companies</span>';
            } else {
              echo '<span class="bold">Uzņēmumi</span>';
            } ?>
             <br><?php the_field('companies'); ?>
          </p>
        </div>
      </div>
    </div>
    <?php
        endwhile; endif; wp_reset_postdata();  
    ?>
    
    </div>
  </div>
</div>



<?php
	if ( is_home() ) :
		get_footer( 'home' );
	elseif ( is_404() ) :
		get_footer( '404' );
	else :
		get_footer();
	endif;
?>