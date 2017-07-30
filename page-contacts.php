<?php
	/*
		Template Name: Contacts Page
	*/
?>

<?php
    if ( is_home() ) :
        get_header();
    else :
        get_header( 'menu-pages' );
    endif;
?>

<div class="container main-content">
    <div class="row title">
      <div class="col-sm-12">
        <h1>Our contacts</h1>
      </div>
    </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-6">
          <ul class="h3style">
                <li>
                    <a href="mailto:inextra@inextra.eu">inextra@inextra.eu</a>
                </li>
                <li class="tel-number">
                    <a href="tel:+37126434502">+371 26 434 502</a> 
                    <a href="tel:+37126414007">+371 26 414 007</a>
                </li>
                <li>
                    <a target="_blank" href="https://www.google.lv/maps/place/Sporta+iela+2,+Vidzemes+priek%C5%A1pils%C4%93ta,+R%C4%ABga,+LV-1013/@56.9629642,24.118221,17z/data=!3m1!4b1!4m5!3m4!1s0x46eecfc86e79a20f:0x6e79b8ba5b53773d!8m2!3d56.962962!4d24.1198529?hl=en">Sporta 2, Riga, Latvia</a>
                </li>
                <li class="social-media">
                    <a target="_blank" href="https://www.facebook.com/inextra/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"/>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company-beta/10623045/?pathWildcard=10623045">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png"/>
                    </a>
                </li>
                
            </ul>
        </div>
      </div>
  </div>
  <div class="container watermark">
    <span class="super-big-font">
      Our <br>contacts
    </span>
  </div>


<?php

		get_footer( 'contacts');

?>