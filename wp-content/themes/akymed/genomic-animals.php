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
                <img src="<?php echo the_field('image-banner', $post_id)?>" alt="<?php the_field('title-banner', $post_id)?>">
            </div>
            <div class="text-title__container main-container">
                <h1 class="text-title__title banner-title">
                    <?php the_field('title-banner', $post_id)?>
                </h1>
                <p class="text-title__subtitle banner-subtitle"><?php the_field('subtitle-banner', $post_id)?></p>
            </div>
        </section>
        <section class="img-grad main-container">
            <div class="img-grad__container">
                <div class="img-grad__list">
                    <?php
                    if( have_rows('image_text_list', $post_id) ):
                        while( have_rows('image_text_list', $post_id) ) : the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            ?>
                            <div class="img-grad__item">
                                <div class="img-grad__wrapper">
                                    <h2 class="img-grad__title section-title">
                                        <?php echo $title?>
                                    </h2>
                                    <div class="img-grad__content">
                                        <?php echo $content?>
                                    </div>
                                </div>
                                <div class="img-grad__img">
                                    <img src="<?php echo $image?>" alt="<?php echo $title?>">
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();
