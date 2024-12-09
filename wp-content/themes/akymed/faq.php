<?php
/* Template Name: Faq */
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
                <div class="news__list"">
                    <?php
                    $posts = 'faq';
                    $args = array(
                        'post_type' 	 => $posts,
                        'orderby' => "menu_order"
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <?php
                            $innerId = get_the_ID();
                        ?>
                        <div class="faq__list-item">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="21" cy="21" r="21" fill="white"/>
                                <path d="M25.605 19.875L24.255 21.255C23.175 22.335 22.5 23.25 22.5 25.5H19.5V24.75C19.5 23.085 20.175 21.585 21.255 20.505L23.115 18.615C23.67 18.075 24 17.325 24 16.5C24 15.7044 23.6839 14.9413 23.1213 14.3787C22.5587 13.8161 21.7956 13.5 21 13.5C20.2044 13.5 19.4413 13.8161 18.8787 14.3787C18.3161 14.9413 18 15.7044 18 16.5H15C15 14.9087 15.6321 13.3826 16.7574 12.2574C17.8826 11.1321 19.4087 10.5 21 10.5C22.5913 10.5 24.1174 11.1321 25.2426 12.2574C26.3679 13.3826 27 14.9087 27 16.5C26.9978 17.7649 26.4965 18.9777 25.605 19.875ZM22.5 31.5H19.5V28.5H22.5M21 6C19.0302 6 17.0796 6.38799 15.2597 7.14181C13.4399 7.89563 11.7863 9.00052 10.3934 10.3934C7.58035 13.2064 6 17.0218 6 21C6 24.9782 7.58035 28.7936 10.3934 31.6066C11.7863 32.9995 13.4399 34.1044 15.2597 34.8582C17.0796 35.612 19.0302 36 21 36C24.9782 36 28.7936 34.4196 31.6066 31.6066C34.4196 28.7936 36 24.9782 36 21C36 12.705 29.25 6 21 6Z" fill="#FF6A13"/>
                            </svg>
                            <a class="faq__list-title" href="<?php the_permalink();?>">
                                <h2><?php the_title();?></h2>
                            </a>
                            <div class="faq__desc">
                                <p><?php echo get_field('simple_answer', $innerId)?></p>
                                <a href="<?php the_permalink();?>">
                                    Read more
                                    <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM0 4.5H16V3.5H0V4.5Z" fill="#C2D6E5"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
	</main>
<?php
get_footer();
