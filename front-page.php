<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dayen
 * @subpackage HMI
 * @since 1.0
 * @version 2018.04.08
 */

get_header(); ?>

    <!-- landing section -->
    <section class='landing-section'>  
        <h1>
            We build a <span class="highlight-peach underline">web mobile</span> apps <br>
            to <span class="highlight-blue underline">make</span> your experience <span class="highlight-blue underline">better</span> <br>
            than your's you have <span class="highlight-green underline">before</span>
        </h1>
        <span class='arrow-down' >scroll down</span>
        <svg class="svg-anime" preserveAspectRatio="none" width="320" height="46" viewBox="0 0 320 46" xmlns="http://www.w3.org/2000/svg">
            <title>Combined Shape</title>
            <g id="menu_mob" fill="none" fill-rule="evenodd" transform="translate(0 -401)"><path d="M0 429.042c21.97 3.997 43.468 9.047 66.955 10.181 30.162 1.457 60.047-3.757 86.491-10.522 14.828-3.793 29.025-8.1 43.479-12.187 11.323-3.201 22.805-6.266 34.87-8.84 27.468-5.86 59.462-9.025 88.187-4.59L320 421.16V447H0v-17.958z" id="Combined-Shape" fill="#4747F4"></path>
            </g>
        </svg>
    </section>

    <!-- main content -->
    <section class="main-content">
        <div class="container">
            <!-- what we do -->
            <div class="row">
                <div class="col-6">
                    <h2>What we do</h2>
                    <p>
                        We specialise in helping agencies, 
                        client-side teams, and start-ups 
                        improve their digital marketing. 
                        We do this by providing honest, 
                        commercially useful guidance that 
                        can be implemented around your 
                        busy schedules.
                        <a href='#' class="btn btn-link mt-2">our services</a>
                    </p>
                </div>
                <div class="col-6 ">
                    <div class="img-container">
                        <div class="img-wrapper">
                            <img src="<?= get_template_directory_uri() . '/img/our-services.jpg'; ?>" alt="our services">                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row -->
            <br clear='both' />

            <!-- why we do it -->
            <div class="row">
                
                <div class="col-6 ">
                    <div class="img-container">
                        <div class="img-wrapper bg-green">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h2>What we do</h2>
                    <p>
                        We specialise in helping agencies, 
                        client-side teams, and start-ups 
                        improve their digital marketing. 
                        We do this by providing honest, 
                        commercially useful guidance that 
                        can be implemented around your 
                        busy schedules.
                        <a href='#' class="btn btn-link mt-2">our services</a>
                    </p>
                </div>
            </div>
            <!-- .row -->
            <br clear='both' />

            <svg class="svg-anime" preserveAspectRatio="none" width="320" height="46" viewBox="0 0 320 46" xmlns="http://www.w3.org/2000/svg">
                <title>Combined Shape</title>
                <g id="menu_mob" fill="#050551" fill-rule="evenodd" transform="translate(0 -401)"><path d="M0 429.042c21.97 3.997 43.468 9.047 66.955 10.181 30.162 1.457 60.047-3.757 86.491-10.522 14.828-3.793 29.025-8.1 43.479-12.187 11.323-3.201 22.805-6.266 34.87-8.84 27.468-5.86 59.462-9.025 88.187-4.59L320 421.16V447H0v-17.958z" id="Combined-Shape" fill="#4747F4"></path>
                </g>
            </svg>

        </div>
        <!-- .container -->
    </section>
    <!-- .main-content -->

    <script>
        window.onscroll = function (e) {
            if( yOffset > 50 ) $( '.svg-anime' ).classList.add('show');
            else $( '.svg-anime' ).classList.remove('show');
        }
    </script>

<?php get_footer() ?>