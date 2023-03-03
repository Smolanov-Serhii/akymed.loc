<?php
/* Template Name: Genomic - Animals */
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
        <section class="text-title text-title-img">
            <div class="text-title__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/text-title-img/bg.png'?>" alt="">
            </div>
            <div class="text-title__container main-container">
                <h1 class="text-title__title banner-title">
                    Breeding with DNA
                </h1>
                <p class="text-title__subtitle banner-subtitle">Beyond the fusion of gametes, animal breeding is about the fusion of DNA.The combination of matching parental DNA is crucial for the health of the offspring. With Next Generation DNA Sequencing technologies, we provide you with the best way to match breeders together. We tell you, based on highly qualitative genetic information, how to avoid inbreeding and boost genetic diversity in your production. For a better animal health.</p>
            </div>
        </section>
        <section class="img-grad main-container">
            <div class="img-grad__container">
                <div class="img-grad__list">
                    <div class="img-grad__item">
                        <div class="img-grad__wrapper">
                            <h2 class="img-grad__title section-title">
                                Sperm preservation
                            </h2>
                            <div class="img-grad__content">
                                <p>We develop solutions for the conservation of animal sperm. For short-term storage (few days), we provide solutions to dilute your samples and conserve their fertilization potency. This allows you to have more flexibility in your production routine or to transport fertilizing material to a facility to another.</p>
                                <p>For long the long term, we develop sperm cryopreservation solutions. Both can be performed on site by our team, or by yourself with our products.</p>
                            </div>
                        </div>
                        <div class="img-grad__img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/img-grad/1.jpg'?>" alt="">
                        </div>
                    </div>
                    <div class="img-grad__item">
                        <div class="img-grad__wrapper">
                            <h2 class="img-grad__title section-title">
                                Sperm biobanking
                            </h2>
                            <div class="img-grad__content">
                                <p>With sperm cryopreservation, we offer you long term banking of your genetic material. These sperm can be retrieved anytime to produce a new generation that carry the genetic material we have kept for you.</p>
                                <p>This is a life-time insurance for your genetic material, this extends the generation time of your breeders, increases flexibility of gamete availability over time and most importantly, allow to restore extinct lines or populations after collapse</p>
                            </div>
                        </div>
                        <div class="img-grad__img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/img-grad/2.jpg'?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();
