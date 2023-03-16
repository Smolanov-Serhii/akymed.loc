<?php
/* Template Name: Peripherals */
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
        <section class="banner-photo">
            <?php
            $banner_image = get_field('bannerimage');
            ?>
            <div class="banner-photo__block">
                <div class="banner-photo__bg">
                    <img src="<?php echo $banner_image; ?>" alt="<?php the_field('title-banner', $post_id)?>">
                </div>
                <div class="banner-photo__container main-container">
                    <h1 class="banner-photo__title banner-title" data-aos="fade-up" data-aos-delay="300">
                        <?php the_field('title-banner', $post_id)?>
                    </h1>
                    <p class="banner-photo__subtitle banner-subtitle"><?php the_field('subtitle-banner', $post_id)?></p>
                </div>
                <div class="banner-photo__img">
                    <img class="banner-photo__img-click" src="<?php echo get_template_directory_uri() . '/img/templates/banner-photo/click.svg'?>" alt="">
                    <img class="banner-photo__img-img" src="<?php echo get_template_directory_uri() . '/img/templates/banner-photo/img.png'?>" alt="">
                </div>
            </div>
            <div class="animation-block" style="display: none">
                <div class="animation-block__container main-container">
                    <div class="animation-block__animate execute">
                        <img class="part-1" src="<?php echo get_template_directory_uri() . '/img/templates/animation-block/2.png'?>" alt="">
                        <img class="part-2" src="<?php echo get_template_directory_uri() . '/img/templates/animation-block/3.png'?>" alt="">
                        <img class="part-3" src="<?php echo get_template_directory_uri() . '/img/templates/animation-block/4.png'?>" alt="">
                        <img class="part-4" src="<?php echo get_template_directory_uri() . '/img/templates/animation-block/5.png'?>" alt="">
                    </div>
                    <div class="animation-block__table main-container" style="display: none">
                        <div class="animation-block__table-list">
                            <?php
                            if( have_rows('parts', $post_id) ):
                                while( have_rows('parts', $post_id) ) : the_row();
                                    $title = get_sub_field('title');
                                    $desc = get_sub_field('description');
                                    ?>
                                    <div class="animation-block__table-item">
                                        <h3 class="animation-block__table-title">
                                            <?php echo $title;?>
                                        </h3>
                                        <div class="animation-block__table-desc">
                                            <?php echo $desc;?>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();
