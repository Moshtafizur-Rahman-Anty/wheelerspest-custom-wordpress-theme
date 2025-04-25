<?php 
get_header();

?>

<!-- banner-section -->
<section>
    <svg class="svg">
        <clipPath id="banner_inner" clipPathUnits="objectBoundingBox">
            <path d="M0.407,0.002 H1 L0.999,1 H0.378 C0.353,1,0.336,0.986,0.331,0.979 L0.319,0.963 L0.019,0.547 C0.009,0.533,0.004,0.523,0.004,0.52 C-0.003,0.49,0.007,0.471,0.012,0.466 L0.139,0.289 L0.328,0.027 C0.344,0.006,0.367,0.001,0.377,0.002 H0.407"></path>
        </clipPath>
    </svg>
    <div class="banner_innerpage_wrapper">
        <div class="col-sm-12 banner_innerpage_hle">
            <div class="col-sm-12 banner_innerpage_background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Wildlife Control Services">
            </div>
            <div class="col-sm-7 banner_innerpage_image">
                <div class="banner_innerpage_image_inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Raccoon, Squirrel, and Opossum Removal Experts">
                </div>
            </div>
            <div class="container">
                <div class="col-sm-5 banner_innerpage_content servicedetail_banner">
                    <div class="banner_innerpage_contentinner">
                        <div>Wildlife Control</div>
                        <p>Protect your home from unwanted wildlife intruders. Touchdown Pest Control provides humane and effective removal of raccoons, squirrels, opossums, and more. Call now to schedule fast wildlife exclusion services near you.</p>

                        <div class="banner_btn innerpagebtn">
                            <a href="tel:626-966-5600" class="learnmore" tabindex="0">626-966-5600</a>
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="scheduleonline" tabindex="0">Schedule Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service_detail_wrapper">
        <div class="pestcontrolown_services servicedetailfirst">
            <div class="container">
                <div class="col-sm-12 pestcontrolown_hle">
                    <div class="col-sm-6 servicedetailimagefirst">
                        <div class="servicedetailimagefirst_image_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services/wild-life-1.png" alt="Humane Wildlife Removal Services">
                        </div>
                    </div>
                    <div class="first_content">
                        <h1>Wildlife Removal & Control Services</h1>
                        <p>
                            Raccoons in the attic? Squirrels in your walls? Opossums in the garage? Unwanted wildlife can cause property damage, health risks, and sleepless nights. Touchdown Pest Control offers humane wildlife control solutions designed to safely remove animals and prevent them from returning.
                        </p>
                    </div>
                    <div class="second_content">
                        <p>
                            Our experienced technicians locate entry points, remove the nuisance animals, and seal off access areas to keep your home protected. We use safe and eco-friendly trapping and exclusion techniques that comply with all local wildlife laws. Don’t wait until the damage is done—get professional wildlife removal now.
                        </p>
                    </div>
                    <div class="col-sm-7 mosquito_first_content">
                        <div class="mosquito_first_content_inner">
                            <span>Hear scratching in the attic or see droppings around your home? Contact us today for expert wildlife control and prevention services—fast, safe, and reliable.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="servicedetail_section_second">
            <div class="container">
                <div class="col-sm-12 servicedetail_section_hle">
                    <div class="col-sm-5 servicedetail_secondimage">
                        <div class="servicedetail_secondimage_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services/wild_life.png" alt="Wildlife Prevention & Exclusion Services">
                        </div>
                    </div>
                    <div class="second_content">
                        <h3>PREVENTION AND EXCLUSION STRATEGIES</h3>
                        <p>
                            Wild animals seek shelter in warm, quiet places—like attics, crawlspaces, chimneys, and basements. To prevent future invasions, it's essential to seal entry points and eliminate attractants. 
                        </p>
                        <p>
                            Keep trash cans tightly closed, trim tree branches away from your roof, and avoid feeding pets outdoors. Our team performs full property inspections to identify vulnerabilities and installs barriers like chimney caps and vent screens.
                        </p>
                        <p>
                            Wildlife removal is best left to professionals. Attempting DIY trapping can be dangerous and ineffective. Trust Touchdown Pest Control for safe, legal, and long-lasting wildlife control services tailored to your property.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--service-->
<div class="service_hme_wrapper" data-aos="fade-up">
    <div class="col-sm-12 service_hme_hle">
        <div class="container">
            <div class="col-sm-12 service_hme_title couponshme_title">
                <h2>CHOOSE THE SERVICE THAT WORKS FOR YOU!</h2>
            </div>
            <div class="col-sm-12 service_hme_slic">

                <?php
                $services = new WP_Query([
                    'post_type'      => 'services',
                    'posts_per_page' => 8,
                ]);
                if ($services->have_posts()):
                    while ($services->have_posts()): $services->the_post(); ?>
                        <div class="col-sm-3 service_hme_single" data-aos="zoom-in">
                            <div class="service_hme_single_inner">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="service_hme_single_image">
                                        <?php the_post_thumbnail('full', ['width' => 318, 'height' => 565]); ?>
                                    </div>
                                </a>
                                <div class="service_hme_single_content">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <div class="service_hme_single_another">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>


        </div>
    </div>
</div>
<div class="service_detail_wrapper">
    <!--pestthirdblck-->
    <div class="pestthirdown_section">
        <div class="col-sm-12 pestthirdown_hle">
            <div class="container">
                <div class="col-sm-6 servicedetailimagefirst">
                    <div class="servicedetailimagefirst_image_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-ants-last.png" alt="Wildlife Control Experts">
                    </div>
                </div>

                <div class="last_bfre">
                    <h2>Why Wildlife Enters Homes and Where They Hide</h2>
                    <p>Unwanted wildlife such as raccoons, squirrels, and opossums can cause serious damage when they make your home their own. Understanding their behavior is key to preventing future intrusions:</p>
                    <ul>
                        <li><strong>Warm Shelter:</strong> During colder months, animals look for safe, warm spots like attics, crawlspaces, and chimneys to nest.</li>
                        <li><strong>Food Sources:</strong> Trash bins, pet food, and bird feeders attract wild animals closer to homes and garages.</li>
                        <li><strong>Entry Points:</strong> Loose vents, roof gaps, or broken soffits provide easy access into your attic or walls.</li>
                        <li><strong>Breeding Grounds:</strong> Once inside, animals often nest and reproduce, leading to larger infestations quickly.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 commercial_lastbottom">
        <div class="container">
            <div class="fourth_content">
                <h3>Why Professional Wildlife Control Is Essential</h3>
                <p>DIY wildlife removal can be risky and ineffective. Touchdown Pest Control provides humane and professional wildlife management services that protect your property and your health:</p>
                <ul>
                    <li><strong>Expert Identification:</strong> We locate animal entry points, nesting areas, and signs of activity before building a removal plan.</li>
                    <li><strong>Safe & Humane Trapping:</strong> Our team uses state-approved exclusion and relocation methods for raccoons, squirrels, and opossums.</li>
                    <li><strong>Damage Prevention:</strong> We seal entry points and provide long-term exclusion solutions to prevent repeat invasions.</li>
                    <li><strong>Health Protection:</strong> Wildlife can carry fleas, ticks, and diseases. Our service ensures your home stays safe and sanitary.</li>
                </ul>
            </div>
        </div>
    </div>
</div>





<div class="pestcontrolown_services" data-aos="fade-up">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <br>
        <div class="col-sm-12 pestcontrolown_hle">
            <div class="col-sm-12 first_content">
                <?php echo do_shortcode('
[WPSM_AC id=9792]') ?>
            </div>
        </div>
    </div>
</div>


</section>









<?php 

get_footer();

?>