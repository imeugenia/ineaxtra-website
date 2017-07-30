<?php
	/*
		Template Name: Clients Page
	*/
?>

<?php
    get_header( 'clients' );
?>

<?php
  $args = array(
    'post_type' => 'client_logo'
    );

  $query = new WP_Query( $args ); 
?>

	<div class="container clients">
        <div class="row title">
            <div class="col-sm-12">
            <h1>Our clients</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <div class="row client-logo-box">
                    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                    <?php $logo = get_field('logo_image'); ?>
                        <div class="col-md-6 col-xs-6">
                            <span class="helper"></span>
                            <img src="<?php echo $logo['url']; ?>">
                            
                        </div>

                    <?php
                        endwhile; endif; wp_reset_postdata(); 
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container watermark">
        <span class="super-big-font">
          Our <br>clients
        </span>
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