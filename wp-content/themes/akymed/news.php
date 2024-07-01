<?php
/* Template Name: News */
get_header();
$post_id = get_the_ID();
?>
	<main id="main" class="main">
        <section class="text-title">
            <div class="text-title__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/text-title/bg.svg'?>" alt="">
            </div>
            <div class="text-title__container main-container">
                <h1 class="text-title__title banner-title" data-aos="fade-up" data-aos-delay="200">
                    <?php the_field('title-banner', $post_id)?>
                </h1>
                <p class="text-title__subtitle banner-subtitle" data-aos="fade-up" data-aos-delay="400"><?php the_field('subtitle-banner', $post_id)?></p>
            </div>
        </section>
        <section class="news">
            <div class="news__container main-container">
                <div class="news__tabs">

                </div>
                <div class="news__list">
                    <?php
                    $posts = 'news';
                    $args = array(
                        'post_type' 	 => $posts
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <div class="news__list-item">
                            <a href="<?php the_permalink();?>" class="news__list-img">
                                <?php the_post_thumbnail('medium')?>
                            </a>
                            <a href="<?php the_permalink();?>">
                                <span class="date">
                                    <?php echo get_the_date(); ?>
                                </span>
                                <h2><?php the_title();?></h2>
                                <?php the_excerpt();?>
                            </a>
                        </div>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
	</main>
<?php
get_footer();
