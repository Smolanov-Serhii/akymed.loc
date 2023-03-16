<?php
/* Template Name: Contacts */
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
                <h1 class="text-title__title banner-title" data-aos="fade-up" data-aos-delay="200">
                    <?php the_field('title-banner', $post_id)?>
                </h1>
                <p class="text-title__subtitle banner-subtitle" data-aos="fade-up" data-aos-delay="400"><?php the_field('subtitle-banner', $post_id)?></p>
            </div>
        </section>
        <section class="contacts">
            <?php echo do_shortcode('[contact-form-7 id="89" title="contacts page"]');?>
            <div class="contacts__container contacts__bottom">
                <div class="main-container">
                    <div class="contacts__map" id="map" data-aos="fade-up" data-aos-delay="600" data-marker="<?php echo get_template_directory_uri() . '/img/templates/map/marker.svg'?>">

                    </div>
                    <div class="contacts__links">
                        <div class="wrapper">
                            <div class="contacts__links-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 19C9.65 17.2667 7.89567 15.5833 6.737 13.95C5.579 12.3167 5 10.7167 5 9.15C5 7.96667 5.21267 6.929 5.638 6.037C6.06267 5.14567 6.60833 4.4 7.275 3.8C7.94167 3.2 8.69167 2.75 9.525 2.45C10.3583 2.15 11.1833 2 12 2C12.8167 2 13.6417 2.15 14.475 2.45C15.3083 2.75 16.0583 3.2 16.725 3.8C17.3917 4.4 17.9377 5.14567 18.363 6.037C18.7877 6.929 19 7.96667 19 9.15C19 10.7167 18.4207 12.3167 17.262 13.95C16.104 15.5833 14.35 17.2667 12 19ZM12 11C12.55 11 13.021 10.804 13.413 10.412C13.8043 10.0207 14 9.55 14 9C14 8.45 13.8043 7.979 13.413 7.587C13.021 7.19567 12.55 7 12 7C11.45 7 10.9793 7.19567 10.588 7.587C10.196 7.979 10 8.45 10 9C10 9.55 10.196 10.0207 10.588 10.412C10.9793 10.804 11.45 11 12 11ZM5 22V20H19V22H5Z" fill="#00B2A9"/>
                                </svg>
                                <div class="column">
                                    <?php if( have_rows('adresses', $post_id) ): ?>
                                        <?php $counter = 1; ?>
                                        <?php while( have_rows('adresses', $post_id) ): the_row();
                                            $type = get_sub_field('type_location');
                                            $adress = get_sub_field('adress_location');
                                            ?>
                                            <p><strong><?php echo $type;?>:</strong><?php echo $adress;?></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="contacts__links-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12H17C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7V9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12ZM19 12H21C21 7 16.97 3 12 3V5C15.86 5 19 8.13 19 12ZM20 15.5C18.75 15.5 17.55 15.3 16.43 14.93C16.08 14.82 15.69 14.9 15.41 15.18L13.21 17.38C10.3733 15.9333 8.06671 13.6267 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.69065 6.41806 8.49821 5.2128 8.5 4C8.5 3.73478 8.39464 3.48043 8.20711 3.29289C8.01957 3.10536 7.76522 3 7.5 3H4C3.73478 3 3.48043 3.10536 3.29289 3.29289C3.10536 3.48043 3 3.73478 3 4C3 8.50868 4.79107 12.8327 7.97918 16.0208C11.1673 19.2089 15.4913 21 20 21C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20V16.5C21 16.2348 20.8946 15.9804 20.7071 15.7929C20.5196 15.6054 20.2652 15.5 20 15.5Z" fill="#00B2A9"/>
                                </svg>
                                <a href="tel:<?php echo the_field('phone_number', 'options')?>"><?php echo the_field('phone_number', 'options')?></a>
                            </div>
                            <div class="contacts__links-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 4H4C3.46957 4 2.96086 4.21071 2.58579 4.58579C2.21071 4.96086 2 5.46957 2 6V18C2 18.5304 2.21071 19.0391 2.58579 19.4142C2.96086 19.7893 3.46957 20 4 20H20C20.5304 20 21.0391 19.7893 21.4142 19.4142C21.7893 19.0391 22 18.5304 22 18V6C22 5.46957 21.7893 4.96086 21.4142 4.58579C21.0391 4.21071 20.5304 4 20 4ZM20 8.236L12 13.118L4 8.236V6H20V8.236Z" fill="#00B2A9"/>
                                </svg>
                                <a href="mailto:<?php echo the_field('phone_number', 'options')?>"><?php echo the_field('email', 'options')?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
	</main>
<?php
get_footer();
