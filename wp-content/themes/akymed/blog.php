<?php
/* Template Name: Blog */
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
                    <?php echo do_shortcode( '[searchandfilter id="656"]' ); ?>
                </div>
                <div class="news__list" id="news-result">
                    <?php
                    $posts = 'blog';
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' 	 => $posts,
                        'search_filter_id' => 656,
                        'orderby' => "menu_order",
                        'paged'	         => $paged
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <?php
                            $innerId = get_the_ID();
                        ?>
                        <div class="news__list-item">
                            <a href="<?php the_permalink();?>" class="news__list-img">
                                <?php the_post_thumbnail('medium')?>
                            </a>
                            <a class="news__list-main" href="<?php the_permalink();?>">
                                <?php if(get_field('subtitle-banner', $innerId)){
                                    ?>
                                    <span class="date">
                                        <?php echo get_field('subtitle-banner', $innerId) ?>
                                    </span>
<!--                                    --><?php
//                                    $cur_terms = get_the_terms( $post->ID, 'blog_category' );
//                                    if( is_array( $cur_terms ) ){
//                                        foreach( $cur_terms as $cur_term ){
//                                            echo $cur_term->name;
//                                        }
//                                    }
//                                    ?>
                                    <?php
                                }?>

                                <h2><?php the_title();?></h2>
                                <?php the_excerpt();?>
                            </a>
                        </div>
                        <?php endwhile;
                    endif;
                    ?>
                    <div class="pagination">
                        <?php
                        $GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
                        the_posts_pagination(array(
                            'type'=>'inline',
                            'screen_reader_text' => __( '' ),
                            'end_size'     => 1,
                            'mid_size'     => 1,
                            'prev_next'    => True,
                            'prev_text'    => __('<'),
                            'next_text'    => __('>'),
                            'add_args'     => False
                        ));
                        ?>
                    </div>
                    <?php
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
	</main>
<?php
get_footer();
