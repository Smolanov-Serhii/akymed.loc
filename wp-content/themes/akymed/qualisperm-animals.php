<?php
/* Template Name: Qualisperm - Animals */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akymed
 */

get_header();
$post_id = get_the_ID();
?>
	<main id="main" class="main">
        <section class="banner-grid">
            <div class="banner-grid__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/banner-grid/bg.jpg'?>" alt="">
            </div>
            <div class="banner-grid__container main-container">
                <h1 class="banner-grid-title__title banner-title">
                    Qualisperm for<br>
                    Animals
                </h1>
                <p class="banner-grid__subtitle banner-subtitle"><span>Ideal solution for research institutes</span>
                    QualiSperm Animal is your first choice when doing research. With our Qualisperm Animal version you can measure concentration, motility and velocity of boar, bull, stallion or fishes sperm (tested and validated with salmonids, perch & minnows).</p>
            </div>
            <h2 class="banner-grid__list">
                Main modules
            </h2>
            <div class="banner-grid__grid main-container text">
                <div class="banner-grid__item banner-grid__item-column">
                    <div class="banner-grid__item-tag">
                        Concentration and Motility
                    </div>
                    <ul>
                        <li>Concentration (mio/ml)</li>
                        <li>Number of sperm cells</li>
                        <li>% Progressive motile, % non-progressive motile, % immotile</li>
                        <li>% speed classes A-D</li>
                        <li>Mean Speed (VAP)</li>
                        <li>Mean sperm cells size</li>
                        <li>% cytoplasmic droplets</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="features__container main-container">
                <h2 class="features__title section-title">
                    Features
                </h2>
                <div class="features__list">
                    <div class="features__list-wrapper">
                        <div class="features__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Automated Concentration & Motility
                            </div>
                            <div class="features__item-desc">
                                <!--                            <p></p>-->
                            </div>
                        </div>
                        <div class="features__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Video and Image sequence recording
                            </div>
                            <div class="features__item-desc">
                                <!--                            <p></p>-->
                            </div>
                        </div>
                        <div class="features__item features__item-height">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Manual Counters
                            </div>
                            <div class="features__item-desc">

                            </div>
                        </div>
                    </div>
                    <div class="features__list-wrapper">
                        <div class="features__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Results Storage
                            </div>
                            <div class="features__item-desc">
                                <!--                            <p></p>-->
                            </div>
                        </div>
                        <div class="features__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Customized Reports
                            </div>
                            <div class="features__item-desc">
                                <!--                            <p></p>-->
                            </div>
                        </div>
                        <div class="features__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                AKYmed Support
                            </div>
                            <div class="features__item-desc">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();
