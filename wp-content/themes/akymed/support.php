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
                    Strong<br>collaborations
                </h1>
            </div>
        </section>
        <section class="three-column">
            <div class="three-column__container main-container">
                <div class="three-column__list">
                    <div class="three-column__item">
                        <h3 class="three-column__item-title">
                            Come on board
                        </h3>
                        <div class="three-column__item-desc">
                            When choosing the right licensing solution together with the right package our consultants are standing by making sure you get the most out of your investment. We are happy to demonstrate our software online, or right where you’ll implement it – at your Laboratory.
                        </div>
                    </div>
                    <div class="three-column__item">
                        <h3 class="three-column__item-title">
                            Start saving time
                        </h3>
                        <div class="three-column__item-desc">
                            Our team will get you set up and guide you through the installation process. We help you implement your own customized spermiogram and define your preferred Standard Operating Procedure. Providing remote desktop support enables us to get you quick access to answers for individual questions.
                        </div>
                    </div>
                    <div class="three-column__item">
                        <h3 class="three-column__item-title">
                            Keep in touch
                        </h3>
                        <div class="three-column__item-desc">
                            We update our software on a regular basis making sure our clients benefit from AKYmed’s latest developments. We also conduct regular health checks on all running systems assuring that your CASA software meets high performance standards at all times.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="faq__container main-container">
                <h2 class="faq__title section-title">
                    FAQ
                </h2>
                <p class="faq__subtitle section-subtitle">
                    The newly launched QualiSperm software is a big step forward and it comes with support you can count on. At AKYmed we are constantly working on improving our services and looking forward to hearing many inspiring comments about our latest release. Check our FAQ’s or feel free to contact us if you have any questions – we are here to help.
                </p>
                <div class="faq__list">
                    <div class="faq__item">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21" cy="21" r="21" fill="white"/>
                            <path d="M25.605 19.875L24.255 21.255C23.175 22.335 22.5 23.25 22.5 25.5H19.5V24.75C19.5 23.085 20.175 21.585 21.255 20.505L23.115 18.615C23.67 18.075 24 17.325 24 16.5C24 15.7044 23.6839 14.9413 23.1213 14.3787C22.5587 13.8161 21.7956 13.5 21 13.5C20.2044 13.5 19.4413 13.8161 18.8787 14.3787C18.3161 14.9413 18 15.7044 18 16.5H15C15 14.9087 15.6321 13.3826 16.7574 12.2574C17.8826 11.1321 19.4087 10.5 21 10.5C22.5913 10.5 24.1174 11.1321 25.2426 12.2574C26.3679 13.3826 27 14.9087 27 16.5C26.9978 17.7649 26.4965 18.9777 25.605 19.875ZM22.5 31.5H19.5V28.5H22.5M21 6C19.0302 6 17.0796 6.38799 15.2597 7.14181C13.4399 7.89563 11.7863 9.00052 10.3934 10.3934C7.58035 13.2064 6 17.0218 6 21C6 24.9782 7.58035 28.7936 10.3934 31.6066C11.7863 32.9995 13.4399 34.1044 15.2597 34.8582C17.0796 35.612 19.0302 36 21 36C24.9782 36 28.7936 34.4196 31.6066 31.6066C34.4196 28.7936 36 24.9782 36 21C36 12.705 29.25 6 21 6Z" fill="#FF6A13"/>
                        </svg>
                        <h2 class="faq__item-title">
                            How much education do I need before I can use the software?
                        </h2>
                        <div class="faq__item-desc">
                            The main objective when developing QualiSperm was to create a system based on true intuitive handling. Many of our customers have implemented the system and were in full production within 3-5 hours.
                        </div>
                    </div>
                    <div class="faq__item">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21" cy="21" r="21" fill="white"/>
                            <path d="M25.605 19.875L24.255 21.255C23.175 22.335 22.5 23.25 22.5 25.5H19.5V24.75C19.5 23.085 20.175 21.585 21.255 20.505L23.115 18.615C23.67 18.075 24 17.325 24 16.5C24 15.7044 23.6839 14.9413 23.1213 14.3787C22.5587 13.8161 21.7956 13.5 21 13.5C20.2044 13.5 19.4413 13.8161 18.8787 14.3787C18.3161 14.9413 18 15.7044 18 16.5H15C15 14.9087 15.6321 13.3826 16.7574 12.2574C17.8826 11.1321 19.4087 10.5 21 10.5C22.5913 10.5 24.1174 11.1321 25.2426 12.2574C26.3679 13.3826 27 14.9087 27 16.5C26.9978 17.7649 26.4965 18.9777 25.605 19.875ZM22.5 31.5H19.5V28.5H22.5M21 6C19.0302 6 17.0796 6.38799 15.2597 7.14181C13.4399 7.89563 11.7863 9.00052 10.3934 10.3934C7.58035 13.2064 6 17.0218 6 21C6 24.9782 7.58035 28.7936 10.3934 31.6066C11.7863 32.9995 13.4399 34.1044 15.2597 34.8582C17.0796 35.612 19.0302 36 21 36C24.9782 36 28.7936 34.4196 31.6066 31.6066C34.4196 28.7936 36 24.9782 36 21C36 12.705 29.25 6 21 6Z" fill="#FF6A13"/>
                        </svg>
                        <h2 class="faq__item-title">
                            What is the advantage compared to manual analysis?
                        </h2>
                        <div class="faq__item-desc">
                            The main objective when developing QualiSperm was to create a system based on true intuitive handling. Many of our customers have implemented the system and were in full production within 3-5 hours.
                        </div>
                    </div>
                    <div class="faq__item">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21" cy="21" r="21" fill="white"/>
                            <path d="M25.605 19.875L24.255 21.255C23.175 22.335 22.5 23.25 22.5 25.5H19.5V24.75C19.5 23.085 20.175 21.585 21.255 20.505L23.115 18.615C23.67 18.075 24 17.325 24 16.5C24 15.7044 23.6839 14.9413 23.1213 14.3787C22.5587 13.8161 21.7956 13.5 21 13.5C20.2044 13.5 19.4413 13.8161 18.8787 14.3787C18.3161 14.9413 18 15.7044 18 16.5H15C15 14.9087 15.6321 13.3826 16.7574 12.2574C17.8826 11.1321 19.4087 10.5 21 10.5C22.5913 10.5 24.1174 11.1321 25.2426 12.2574C26.3679 13.3826 27 14.9087 27 16.5C26.9978 17.7649 26.4965 18.9777 25.605 19.875ZM22.5 31.5H19.5V28.5H22.5M21 6C19.0302 6 17.0796 6.38799 15.2597 7.14181C13.4399 7.89563 11.7863 9.00052 10.3934 10.3934C7.58035 13.2064 6 17.0218 6 21C6 24.9782 7.58035 28.7936 10.3934 31.6066C11.7863 32.9995 13.4399 34.1044 15.2597 34.8582C17.0796 35.612 19.0302 36 21 36C24.9782 36 28.7936 34.4196 31.6066 31.6066C34.4196 28.7936 36 24.9782 36 21C36 12.705 29.25 6 21 6Z" fill="#FF6A13"/>
                        </svg>
                        <h2 class="faq__item-title">
                            How does QualiSperm enhance my Quality Control system?
                        </h2>
                        <div class="faq__item-desc">
                            All image sequences are stored analog to the patient data. An ejaculate can be reassessed at any time – also remotely. You can prove your results at any time. This is a big advantage in education of lab technicians and guarantees a constant quality in lab chains.
                        </div>
                    </div>
                    <div class="faq__item">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21" cy="21" r="21" fill="white"/>
                            <path d="M25.605 19.875L24.255 21.255C23.175 22.335 22.5 23.25 22.5 25.5H19.5V24.75C19.5 23.085 20.175 21.585 21.255 20.505L23.115 18.615C23.67 18.075 24 17.325 24 16.5C24 15.7044 23.6839 14.9413 23.1213 14.3787C22.5587 13.8161 21.7956 13.5 21 13.5C20.2044 13.5 19.4413 13.8161 18.8787 14.3787C18.3161 14.9413 18 15.7044 18 16.5H15C15 14.9087 15.6321 13.3826 16.7574 12.2574C17.8826 11.1321 19.4087 10.5 21 10.5C22.5913 10.5 24.1174 11.1321 25.2426 12.2574C26.3679 13.3826 27 14.9087 27 16.5C26.9978 17.7649 26.4965 18.9777 25.605 19.875ZM22.5 31.5H19.5V28.5H22.5M21 6C19.0302 6 17.0796 6.38799 15.2597 7.14181C13.4399 7.89563 11.7863 9.00052 10.3934 10.3934C7.58035 13.2064 6 17.0218 6 21C6 24.9782 7.58035 28.7936 10.3934 31.6066C11.7863 32.9995 13.4399 34.1044 15.2597 34.8582C17.0796 35.612 19.0302 36 21 36C24.9782 36 28.7936 34.4196 31.6066 31.6066C34.4196 28.7936 36 24.9782 36 21C36 12.705 29.25 6 21 6Z" fill="#FF6A13"/>
                        </svg>
                        <h2 class="faq__item-title">
                            How much time do I save by implementing QualiSperm?
                        </h2>
                        <div class="faq__item-desc">
                            AKYmed together with its partners has estimated the increased efficiency up to 15–20% by implementing QualiSperm.
                        </div>
                    </div>
                    <div class="faq__item">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21" cy="21" r="21" fill="white"/>
                            <path d="M25.605 19.875L24.255 21.255C23.175 22.335 22.5 23.25 22.5 25.5H19.5V24.75C19.5 23.085 20.175 21.585 21.255 20.505L23.115 18.615C23.67 18.075 24 17.325 24 16.5C24 15.7044 23.6839 14.9413 23.1213 14.3787C22.5587 13.8161 21.7956 13.5 21 13.5C20.2044 13.5 19.4413 13.8161 18.8787 14.3787C18.3161 14.9413 18 15.7044 18 16.5H15C15 14.9087 15.6321 13.3826 16.7574 12.2574C17.8826 11.1321 19.4087 10.5 21 10.5C22.5913 10.5 24.1174 11.1321 25.2426 12.2574C26.3679 13.3826 27 14.9087 27 16.5C26.9978 17.7649 26.4965 18.9777 25.605 19.875ZM22.5 31.5H19.5V28.5H22.5M21 6C19.0302 6 17.0796 6.38799 15.2597 7.14181C13.4399 7.89563 11.7863 9.00052 10.3934 10.3934C7.58035 13.2064 6 17.0218 6 21C6 24.9782 7.58035 28.7936 10.3934 31.6066C11.7863 32.9995 13.4399 34.1044 15.2597 34.8582C17.0796 35.612 19.0302 36 21 36C24.9782 36 28.7936 34.4196 31.6066 31.6066C34.4196 28.7936 36 24.9782 36 21C36 12.705 29.25 6 21 6Z" fill="#FF6A13"/>
                        </svg>
                        <h2 class="faq__item-title">
                            Can I purchase modules or do I need to buy the entire solution?
                        </h2>
                        <div class="faq__item-desc">
                            We have created a palette of modules that fit your individual needs. Combined with flexible licensing solution we are able to hand craft the solution that works best for your size and turnover.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="image">
            <div class="image__bg">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/image/bg.jpg'?>" alt="">
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'request' ); ?>

	</main>
<?php
get_footer();
