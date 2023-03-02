<?php
/* Template Name: Qualisperm - Humans */
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
                    humans
                </h1>
                <p class="banner-grid__subtitle banner-subtitle">QualiSperm Human allows automatic measuring of male fertility parameters according to the WHO guidelines. </p>
            </div>
            <h2 class="banner-grid__list">
                Main modules
            </h2>
            <div class="banner-grid__grid main-container text">
                <div class="banner-grid__item">
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
                    </ul>
                </div>
                <div class="banner-grid__item">
                    <div class="banner-grid__item-tag">
                        Morphology
                    </div>
                    <ul>
                        <li>Total number and % normal spermatozoa</li>
                        <li>% and total number of abnormalities of Head, Mid-piece and Tail</li>
                        <li>Morphometric data and abnormalities of each individual sperm</li>
                        <li>Teratozoospermia Index</li>
                    </ul>
                </div>
                <div class="banner-grid__item">
                    <div class="banner-grid__item-tag">
                        Vitality
                    </div>
                    <ul>
                        <li>Total number</li>
                        <li>% live and % dead spermatozoa</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="stand">
            <div class="stand__container main-container">
                <h2 class="stand__title section-title">
                    Stand-alone and <br>Enterprise versions
                </h2>
                <div class="stand__subtitle section-subtitle">
                    <p>Our solution is available as a Stand-alone application or it can also be seamlessly integrated into Laboratory Information Systems (LIS) via standard interfaces in order to optimize the customer workflow.</p>
                    <p>This version is called the Qualisperm Enterprise version and enables our customers to use the “pay-per-analysis” business model which is based on the number of analyses performed with our system per month. Such a business model makes the entry barrier lower in terms of upfront investments for customers.</p>
                </div>
                <div class="stand__list">
                    <div class="stand__item">
                        <div class="stand__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/stand/1.jpg'?>" alt="">
                        </div>
                        <div class="stand__item-desc text">
                            <h3 class="stand__item-title">
                                Stand-alone version
                            </h3>
                            <ul>
                                <li>Local database to store measurement results and videos sequences</li>
                                <li>Fixed license fee per year</li>
                            </ul>
                        </div>
                    </div>
                    <div class="stand__item">
                        <div class="stand__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/stand/2.jpg'?>" alt="">
                        </div>
                        <div class="stand__item-desc text">
                            <h3 class="stand__item-title">
                                Enterprise version
                            </h3>
                            <ul>
                                <li>Client-server architecture</li>
                                <li>HL7 or JSON interfaces for LIS integration</li>
                                <li>“Pay-per-analysis” business model</li>
                            </ul>
                        </div>
                    </div>
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
                                Automated analyses
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
                                <p>Cell counter, Motility counter, Vitality counter, Morphology counter, Antibody counter, Fragmentation counter</p>
                            </div>
                        </div>
                        <div class="features__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Patient File Storage
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
                                Tailored Spermiograms from WHO
                            </div>
                            <div class="features__item-desc">
                                <!--                            <p></p>-->
                            </div>
                        </div>
                    </div>
                    <div class="features__list-wrapper">
                        <div class="features__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Customized Patient Reports
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
                                <!--                            <p></p>-->
                            </div>
                        </div>
                        <div class="features__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Barcode Reader
                            </div>
                            <div class="features__item-desc">

                            </div>
                        </div>
                        <div class="features__item features__item-height">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6 16.2L17.65 9.15L16.25 7.75L10.6 13.4L7.75 10.55L6.35 11.95L10.6 16.2ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5Z" fill="#FF6A13"/>
                            </svg>
                            <div class="features__item-title">
                                Server / LIS integration
                            </div>
                            <div class="features__item-desc">
                                <p>QualiSperm Enterprise can seamlessly integrate with your Laboratory Information System (LIS) including several workstations and servers. Contact us to learn more about an enterprise solution tailored to your specific needs.</p>
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
