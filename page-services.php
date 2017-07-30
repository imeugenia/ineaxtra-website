<?php
	/*
		Template Name: Services Page
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
  $args_services = array(
    'post_type' => 'what_we_do_post',

    );

  $query_services = new WP_Query( $args_services ); 
?>
<div class="container service-list">
<div class="row">
    <div class="sidebar col-md-4" id="service-sidebar">
        <div class="" >
            <ul class="h3style">

                <?php if( $query_services->have_posts() ) : while( $query_services->have_posts() ) : $query_services->the_post(); ?>
                  
                    <li>
                        <a class="sidebar-link" href="#post-<?php the_ID(); ?>">
                            <?php the_field('sidebar_title'); ?>
                        </a>
                    </li>
                <?php
                    endwhile; endif; wp_reset_query();    
                ?>
            </ul>
        </div>
    </div>
    

    <div class="service-section col-md-7 col-md-offset-1" id="service-description">
        <?php if( $query_services->have_posts() ) : while( $query_services->have_posts() ) : $query_services->the_post(); ?>
            <div class="row" id="post-<?php the_ID(); ?>">
                <div class="col-md-5 col-sm-6 col-xs-3">
                    <hr class="red-line">
                </div>
                <div class="col-md-7 col-sm-6 col-xs-9" >
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col-md-12 col-xs-12">
                    <p>
                        <?php the_field('service_description'); ?>
                    </p>
                </div>
                <div class="col-md-7 col-md-offset-5 col-sm-6 col-sm-offset-6 col-xs-9 col-xs-offset-3">
                    <blockquote class="quote"><?php the_field('success_fact'); ?>
                    </blockquote>
                </div>
                <div class="col-md-12 col-xs-12 section-end">
                    <p>
                        <span class="bold">Services</span> <br><?php the_field('services'); ?>
                    </p>
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
