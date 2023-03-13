<?php
/* Template Name: Akymed */
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
        <section class="banner-double">
            <div class="banner-double__container">
                <div class="banner-double__bg">
                    <img src="<?php echo get_template_directory_uri() . '/img/templates/banner-double/first.jpg'?>" alt="">
                </div>
                <div class="main-container">
                    <h1 class="banner-double__title banner-title" data-aos="fade-up" data-aos-delay="200">
                        AKYmed is a Swiss company founded in 2019
                    </h1>
                    <p class="banner-double__subtitle section-subtitle"  data-aos="fade-up" data-aos-delay="500">AKYmed is active in the field of human and animal male fertility analyses, selling patented QualiSperm CASA systems and associated hardware and consumables. To further strengthen its position on the animal market and expand its portfolio, AKYmed introduced innovative services and products under the brand name of Noah Genetics. Noah Genetics toolbox comprises a panel of artificial insemination (AI) services for the animal artificial reproduction industry. These services can be regrouped under 3 themes: diagnostic, optimization, and preservation. Noah Genetics targets customers that routinely rely on animal AI in their activities, such actors in the husbandry industry (livestock farmers & fish farmers), the companion animal industry, and the conservation industry.</p>
                </div>
            </div>
            <div class="banner-double__two"  data-aos="fade-up" data-aos-delay="800">
                <img src="<?php echo get_template_directory_uri() . '/img/templates/banner-double/second.jpg'?>" alt="">
            </div>
        </section>
        <section class="team">
            <div class="team__container main-container text">
                <h2 class="team__title section-title" data-aos="fade-up" data-aos-delay="200">
                    The AKYmed team
                </h2>
                <p class="team__subtitle section-subtitle" data-aos="fade-up" data-aos-delay="500">The AKYmed core team is a unique blend of experts in healthcare strategy, technology and operations with a mission to significantly change the way male fertility testing is done today. Seeing technology put to work and helping people every day is our passion. We stand behind our core values of</p>
                <p class="team__subtitle section-subtitle-red" data-aos="fade-up" data-aos-delay="800">RESPONSIBILITIY – FUN – TRANSPARENCY – ENGAGEMENT</p>
                <div class="team__list">
                    <div class="team__item" data-aos="fade-right" data-aos-delay="200">
                        <div class="team__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Yulia Karlova">
                        </div>
                        <div class="team__item-desc">
                            <h3 class="team__item-name">
                                Yulia Karlova
                            </h3>
                            <div class="team__item-work">
                                Co-founder (Managing Director)
                            </div>
                            <div class="team__item-about">
                                <ul>
                                    <li>Certified CARAQA specialist (HEIG-VD, Yverdon, Medidee, Lausanne)</li>
                                    <li>PMP certificate (PMP N 1878456) Project Management Institute, Newtown Square, USA</li>
                                    <li>MSc in Management of Technology and Entrepreneurship, EPFL, Lausanne, Switzerland</li>
                                    <li>MSc in Systems Analysis and Management, Dubna International University, Dubna, Russia</li>
                                    <li>BSc in Computer Science, Dubna International University, Dubna, Russia</li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-full">
                            <h3 class="team__item-header">
                                List of relevant managerial/organizational experience and expertise:
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="9" width="20" height="2" fill="#C2D6E5"/>
                                    <rect class="vertical" x="9" y="20" width="20" height="2" transform="rotate(-90 9 20)" fill="#C2D6E5"/>
                                </svg>
                            </h3>
                            <div class="team__item-wrapper" style="display: none">
                                <ul>
                                    <li>2019-present Managing Director, AKYmed, Cheseaux-sur-Lausanne, Switzerland</li>
                                    <li>2018 – Head of Software Development, Biophos SA, Geneva, Switzerland. Responsible for all software products and development: Team leadership, management & planning; Management of external contractors and service providers (as well as internal ones in the future) in terms of software services provision; Communication and problem solving; Innovation Research and development.</li>
                                    <li>2015—2017: Business Strategy Manager, Biophos SA, Lausanne, Switzerland. Conduction and implementation of yearly marketing and software development plans. Management of software development projects; Development of new markets strategy. Key account management.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                </ul>
                                <p>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item" data-aos="fade-right" data-aos-delay="200">
                        <div class="team__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/team/2.jpg'?>" alt="Alexandre Karlov">
                        </div>
                        <div class="team__item-desc">
                            <h3 class="team__item-name">
                                Alexandre Karlov
                            </h3>
                            <div class="team__item-work">
                                Co-founder (Technical Director)
                            </div>
                            <div class="team__item-about">
                                <ul>
                                    <li>Ph.D., Computer, Communication and Information Sciences, EPFL, Lausanne, Switzerland</li>
                                    <li>M.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-full">
                            <h3 class="team__item-header">
                                List of relevant managerial/organizational experience and expertise:
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="9" width="20" height="2" fill="#C2D6E5"/>
                                    <rect class="vertical" x="9" y="20" width="20" height="2" transform="rotate(-90 9 20)" fill="#C2D6E5"/>
                                </svg>
                            </h3>
                            <div class="team__item-wrapper" style="display: none">
                                <ul>
                                    <li>2019-present Managing Director, AKYmed, Cheseaux-sur-Lausanne, Switzerland</li>
                                    <li>2018 – Head of Software Development, Biophos SA, Geneva, Switzerland. Responsible for all software products and development: Team leadership, management & planning; Management of external contractors and service providers (as well as internal ones in the future) in terms of software services provision; Communication and problem solving; Innovation Research and development.</li>
                                    <li>2015—2017: Business Strategy Manager, Biophos SA, Lausanne, Switzerland. Conduction and implementation of yearly marketing and software development plans. Management of software development projects; Development of new markets strategy. Key account management.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                </ul>
                                <p>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item" data-aos="fade-right" data-aos-delay="200">
                        <div class="team__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/team/3.jpg'?>" alt="Alexandre Karlov">
                        </div>
                        <div class="team__item-desc">
                            <h3 class="team__item-name">
                                Fabien Dutoit
                            </h3>
                            <div class="team__item-work">
                                Software Engineer
                            </div>
                            <div class="team__item-about">
                                <ul>
                                    <li>M.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li>
                                    <li>B.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-full">
                            <h3 class="team__item-header">
                                List of relevant managerial/organizational experience and expertise:
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="9" width="20" height="2" fill="#C2D6E5"/>
                                    <rect class="vertical" x="9" y="20" width="20" height="2" transform="rotate(-90 9 20)" fill="#C2D6E5"/>
                                </svg>
                            </h3>
                            <div class="team__item-wrapper" style="display: none">
                                <ul>
                                    <li>2019-present Managing Director, AKYmed, Cheseaux-sur-Lausanne, Switzerland</li>
                                    <li>2018 – Head of Software Development, Biophos SA, Geneva, Switzerland. Responsible for all software products and development: Team leadership, management & planning; Management of external contractors and service providers (as well as internal ones in the future) in terms of software services provision; Communication and problem solving; Innovation Research and development.</li>
                                    <li>2015—2017: Business Strategy Manager, Biophos SA, Lausanne, Switzerland. Conduction and implementation of yearly marketing and software development plans. Management of software development projects; Development of new markets strategy. Key account management.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                </ul>
                                <p>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item" data-aos="fade-right" data-aos-delay="200">
                        <div class="team__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/team/4.jpg'?>" alt="Alexandre Karlov">
                        </div>
                        <div class="team__item-desc">
                            <h3 class="team__item-name">
                                Fabien Dutoit
                            </h3>
                            <div class="team__item-work">
                                Software Engineer
                            </div>
                            <div class="team__item-about">
                                <ul>
                                    <li>M.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li>
                                    <li>B.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-full">
                            <h3 class="team__item-header">
                                List of relevant managerial/organizational experience and expertise:
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="9" width="20" height="2" fill="#C2D6E5"/>
                                    <rect class="vertical" x="9" y="20" width="20" height="2" transform="rotate(-90 9 20)" fill="#C2D6E5"/>
                                </svg>
                            </h3>
                            <div class="team__item-wrapper" style="display: none">
                                <ul>
                                    <li>2019-present Managing Director, AKYmed, Cheseaux-sur-Lausanne, Switzerland</li>
                                    <li>2018 – Head of Software Development, Biophos SA, Geneva, Switzerland. Responsible for all software products and development: Team leadership, management & planning; Management of external contractors and service providers (as well as internal ones in the future) in terms of software services provision; Communication and problem solving; Innovation Research and development.</li>
                                    <li>2015—2017: Business Strategy Manager, Biophos SA, Lausanne, Switzerland. Conduction and implementation of yearly marketing and software development plans. Management of software development projects; Development of new markets strategy. Key account management.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                </ul>
                                <p>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item" data-aos="fade-right" data-aos-delay="200">
                        <div class="team__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/team/5.jpg'?>" alt="Alexandre Karlov">
                        </div>
                        <div class="team__item-desc">
                            <h3 class="team__item-name">
                                Fabien Dutoit
                            </h3>
                            <div class="team__item-work">
                                Software Engineer
                            </div>
                            <div class="team__item-about">
                                <ul>
                                    <li>M.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li>
                                    <li>B.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-full">
                            <h3 class="team__item-header">
                                List of relevant managerial/organizational experience and expertise:
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="9" width="20" height="2" fill="#C2D6E5"/>
                                    <rect class="vertical" x="9" y="20" width="20" height="2" transform="rotate(-90 9 20)" fill="#C2D6E5"/>
                                </svg>
                            </h3>
                            <div class="team__item-wrapper" style="display: none">
                                <ul>
                                    <li>2019-present Managing Director, AKYmed, Cheseaux-sur-Lausanne, Switzerland</li>
                                    <li>2018 – Head of Software Development, Biophos SA, Geneva, Switzerland. Responsible for all software products and development: Team leadership, management & planning; Management of external contractors and service providers (as well as internal ones in the future) in terms of software services provision; Communication and problem solving; Innovation Research and development.</li>
                                    <li>2015—2017: Business Strategy Manager, Biophos SA, Lausanne, Switzerland. Conduction and implementation of yearly marketing and software development plans. Management of software development projects; Development of new markets strategy. Key account management.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                </ul>
                                <p>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team__item" data-aos="fade-right" data-aos-delay="200">
                        <div class="team__item-img">
                            <img src="<?php echo get_template_directory_uri() . '/img/templates/team/6.jpg'?>" alt="Alexandre Karlov">
                        </div>
                        <div class="team__item-desc">
                            <h3 class="team__item-name">
                                Fabien Dutoit
                            </h3>
                            <div class="team__item-work">
                                Software Engineer
                            </div>
                            <div class="team__item-about">
                                <ul>
                                    <li>M.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li>
                                    <li>B.Sc., Communication Systems, EPFL, Lausanne, Switzerland</li
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-full">
                            <h3 class="team__item-header">
                                List of relevant managerial/organizational experience and expertise:
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="9" width="20" height="2" fill="#C2D6E5"/>
                                    <rect class="vertical" x="9" y="20" width="20" height="2" transform="rotate(-90 9 20)" fill="#C2D6E5"/>
                                </svg>
                            </h3>
                            <div class="team__item-wrapper" style="display: none">
                                <ul>
                                    <li>2019-present Managing Director, AKYmed, Cheseaux-sur-Lausanne, Switzerland</li>
                                    <li>2018 – Head of Software Development, Biophos SA, Geneva, Switzerland. Responsible for all software products and development: Team leadership, management & planning; Management of external contractors and service providers (as well as internal ones in the future) in terms of software services provision; Communication and problem solving; Innovation Research and development.</li>
                                    <li>2015—2017: Business Strategy Manager, Biophos SA, Lausanne, Switzerland. Conduction and implementation of yearly marketing and software development plans. Management of software development projects; Development of new markets strategy. Key account management.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                    <li>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</li>
                                </ul>
                                <p>2011–2015: Business Strategy and Marketing Manager, Biophos SA, Lausanne, Switzerland. Guidance of QualiSperm product line evolution. Conduction of market/industry analysis, set up focus groups, positioning, pricing and go-to-market strategy. Execution of company participation in exhibitions and congress events. Management of software development projects.</p>
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
