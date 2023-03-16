<?php
/* Template Name: Support */
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
        <section class="text-title">
            <div class="text-title__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/text-title/bg.svg'?>" alt="">
            </div>
            <div class="text-title__container main-container">
                <h1 class="text-title__title banner-title">
                    <?php the_field('title-banner', $post_id)?>
                </h1>
            </div>
        </section>
        <section class="three-column">
            <div class="three-column__container main-container">
                <div class="three-column__list">
                    <?php
                    if( have_rows('columns', $post_id) ):
                        while( have_rows('columns', $post_id) ) : the_row();
                            $title = get_sub_field('title-column');
                            $desc = get_sub_field('description-column');
                            ?>
                            <div class="three-column__item">
                                <h3 class="three-column__item-title">
                                    <?php echo $title;?>
                                </h3>
                                <div class="three-column__item-desc">
                                    <?php echo $desc;?>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="faq__container main-container">
                <h2 class="faq__title section-title">
                    <?php the_field('title-faq', $post_id)?>
                </h2>
                <p class="faq__subtitle section-subtitle">
                    <?php the_field('subtitle-faq', $post_id)?>
                </p>
                <div class="faq__list">
                    <?php
                    if( have_rows('faq_list', $post_id) ):
                        while( have_rows('faq_list', $post_id) ) : the_row();
                            $title = get_sub_field('title-item');
                            $desc = get_sub_field('answer');
                            ?>
                            <div class="faq__item">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21" cy="21" r="21" fill="white"/>
                                    <path d="M25.605 19.875L24.255 21.255C23.175 22.335 22.5 23.25 22.5 25.5H19.5V24.75C19.5 23.085 20.175 21.585 21.255 20.505L23.115 18.615C23.67 18.075 24 17.325 24 16.5C24 15.7044 23.6839 14.9413 23.1213 14.3787C22.5587 13.8161 21.7956 13.5 21 13.5C20.2044 13.5 19.4413 13.8161 18.8787 14.3787C18.3161 14.9413 18 15.7044 18 16.5H15C15 14.9087 15.6321 13.3826 16.7574 12.2574C17.8826 11.1321 19.4087 10.5 21 10.5C22.5913 10.5 24.1174 11.1321 25.2426 12.2574C26.3679 13.3826 27 14.9087 27 16.5C26.9978 17.7649 26.4965 18.9777 25.605 19.875ZM22.5 31.5H19.5V28.5H22.5M21 6C19.0302 6 17.0796 6.38799 15.2597 7.14181C13.4399 7.89563 11.7863 9.00052 10.3934 10.3934C7.58035 13.2064 6 17.0218 6 21C6 24.9782 7.58035 28.7936 10.3934 31.6066C11.7863 32.9995 13.4399 34.1044 15.2597 34.8582C17.0796 35.612 19.0302 36 21 36C24.9782 36 28.7936 34.4196 31.6066 31.6066C34.4196 28.7936 36 24.9782 36 21C36 12.705 29.25 6 21 6Z" fill="#FF6A13"/>
                                </svg>
                                <h2 class="faq__item-title">
                                    <?php echo $title;?>
                                </h2>
                                <div class="faq__item-desc">
                                    <?php echo $desc;?>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <section class="image">
            <div class="image__bg">
                <img src="<?php the_field('image', $post_id)?>" alt="<?php the_field('title-banner', $post_id)?>">
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();
