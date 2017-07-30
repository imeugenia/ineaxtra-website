<?php
	/*
		Template Name: Our Approach Page
	*/
?>

<?php
    if ( is_home() ) :
        get_header();
    else :
        get_header( 'menu-pages' );
    endif;
?>
<?php if (qtrans_getLanguage() == 'en') {
    echo '<div class="container main-content">
        <div class="row">
            <div class="col-md-6">
                <a class="active link" href="#we-believe">
                    <h1>We believe in</h1>
                </a>
                <a class="link" href="#our-approach">
                    <h1>Our approach</h1>
                </a>
            </div>
            <div class="col-md-6">
                <ul id="we-believe" class="h3style">
                    <li>
                        authenticity
                    </li>
                    <li >
                        trusting and valuing people
                    </li>
                    <li>
                        passion
                    </li>
                    <li>
                        hunger for success & adding value
                    </li>
                    <li>
                        logics supported by great instincts
                    </li>
                    <li>
                        communication
                    </li>
                    <li>
                        courage
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid photo-quote">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <blockquote>
                    <span class="big-red">"</span><br>
                    We are<br>
                    realistic dreamers,<br>
                    who get things done.<br><br><br>
                    <span class="big-red">"</span>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="container main-content">
        <div class="row">
            <div class="col-md-6">
                <a class="active link" href="#our-approach">
                    <h1>Our approach</h1>
                </a>
               <a class="link" href="#we-believe">
                    <h1>We believe in</h1>
                </a>
                
            </div>
            <div class="col-md-6">
                <ul id="our-approach" class="h3style">
                    <li>
                        we bridge the gap among strategic consulting, creative solutions and business
                    </li>
                    <li >
                        start-up mindset
                    </li>
                    <li>
                        fresh approach
                    </li>
                    <li>
                        international expertise in portfolio strategy, product development, successful execution of restructuring & crisis communication, big scale projects & events
                    </li>
                    <li>
                        integrated marketing, communication & employee engagement approach
                    </li>
                    <li>
                        reliable & deliver on time
                    </li>
                    <li>
                        more than 10-year experience in international companies, FMCG & turbulent environment
                    </li>
                    <li>
                        fast & flexible & can adapt to unexpected
                    </li>
                </ul>
            </div>
        </div>
    </div';
} else {
 echo '<div class="container main-content">
        <div class="row">
            <div class="col-md-6">
                <a class="active link" href="#we-believe">
                    <h1>Mēs ticam</h1>
                </a>
                <a class="link" href="#our-approach">
                    <h1>Mūsu priekšrocības</h1>
                </a>
            </div>
            <div class="col-md-6">
                <ul id="we-believe" class="h3style">
                    <li>
                        īstām & patiesām lietām
                    </li>
                    <li >
                        ka cilvēki ir lielākā vērtība
                    </li>
                    <li>
                        mērķtiecīgumam & degsmei
                    </li>
                    <li>
                        vēlmei tiekties pēc panākumiem
                    </li>
                    <li>
                        loģiskai intuīcijai
                    </li>
                    <li>
                        komunikācijai
                    </li>
                    <li>
                        drosmīgiem risinājumiem
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid photo-quote">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <blockquote>
                    <span class="big-red">"</span><br>
                    We are<br>
                    realistic dreamers,<br>
                    who get things done.<br><br><br>
                    <span class="big-red">"</span>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="container main-content">
        <div class="row">
            <div class="col-md-6">
                <a class="active link" href="#our-approach">
                    <h1>Mūsu priekšrocības</h1>
                </a>
               <a class="link" href="#we-believe">
                    <h1>Mēs ticam</h1>
                </a>
                
            </div>
            <div class="col-md-6">
                <ul id="our-approach" class="h3style">
                    <li>
                        esam tilts starp stratēģisko konsultēšanu, radošiem risinājumiem un biznesa vajadzībām
                    </li>
                    <li >
                        start-up domāšana
                    </li>
                    <li>
                        nestandarta pieeja
                    </li>
                    <li>
                        ekspertīze produktu attīstības stratēģiju izstrādē, ieviešanā & restrukturizācijā, krīzes komunikācijā un liela mēroga projektu vadībā
                    </li>
                    <li>
                        nestandarta mārketinga & komunikāciju risinājumi  & inovatīva pieeja darbinieku iesaistes palielināšanā
                    </li>
                    <li>
                        uzticamība  & termiņu ievērošana
                    </li>
                    <li>
                        vairāk nekā 10 gadu pieredze, strādājot starptautiskos uzņēmumos, FMCG jomā & nepārtrauktā pārmaiņu vidē
                    </li>
                    <li>
                        ātra adaptēšanās & atvērtība radošiem risinājumiem
                    </li>
                </ul>
            </div>
        </div>
    </div';
} ?>
    



<?php
    if ( is_home() ) :
        get_footer( 'home' );
    elseif ( is_404() ) :
        get_footer( '404' );
    else :
        get_footer();
    endif;
?>