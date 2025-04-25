<?php 

get_header();
?>


<section>
    <!-- banner-section -->
    <svg class="svg">
        <clipPath id="banner_inner" clipPathUnits="objectBoundingBox">
            <path d="M0.407,0.002 H1 L0.999,1 H0.378 C0.353,1,0.336,0.986,0.331,0.979 L0.319,0.963 L0.019,0.547 C0.009,0.533,0.004,0.523,0.004,0.52 C-0.003,0.49,0.007,0.471,0.012,0.466 L0.139,0.289 L0.328,0.027 C0.344,0.006,0.367,0.001,0.377,0.002 H0.407"></path>
        </clipPath>
    </svg>
    <div class="banner_innerpage_wrapper">
        <div class="col-sm-12 banner_innerpage_hle">
            <div class="col-sm-12 banner_innerpage_background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Rodent Control Services">
            </div>
            <div class="col-sm-7 banner_innerpage_image">
                <div class="banner_innerpage_image_inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Rat and Mice Control Experts">
                </div>
            </div>
            <div class="container">
                <div class="col-sm-5 banner_innerpage_content servicedetail_banner">
                    <div class="banner_innerpage_contentinner">
                    <div>Roaches</div>
<p>Don’t let roaches take over your home. Touchdown Pest Control offers expert cockroach extermination and prevention services to eliminate infestations at the source. Schedule your inspection today for fast, effective roach control you can count on.</p>

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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/roaches.jpg" alt="Cockroach Inspection and Removal">
                    </div>
                </div>
                <div class="first_content">
                    <h1>Roach Extermination &amp; Control</h1>
                    <p>Cockroaches are fast, filthy, and extremely resilient. Once they invade your space, they multiply quickly and contaminate everything they touch. Roaches are known to spread bacteria, trigger allergies, and carry disease. Our professional roach control services are designed to eliminate the infestation and prevent it from coming back.
                </div>
                <div class="second_content">
                    <p>DIY sprays and traps often miss hidden nests and do little to stop the root of the problem. Touchdown Pest Control uses targeted treatments that eliminate roaches at all life stages—from eggs to adults. We combine chemical and non-chemical strategies to ensure complete eradication, even in hard-to-reach places.</p>
                </div>
                <div class="col-sm-7 mosquito_first_content">
                    <div class="mosquito_first_content_inner">
                        <span>Seeing roaches in your kitchen or bathroom? Act fast. Our licensed exterminators provide expert roach removal and prevention services. Call today and reclaim your space.</span>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/roaches.png" alt="Cockroach Infestation Prevention">
                    </div>
                </div>
                <div class="second_content">
                    <h3>PREVENTION AND CONTROL</h3>
                    <p>Roaches thrive in warm, moist, and dark environments. To prevent infestations, start by keeping your home clean and free of food debris. Store food in airtight containers, fix leaky pipes, and avoid leaving dirty dishes out overnight. Take out the trash regularly and keep bins sealed tightly.</p>
                    <p>Seal cracks and entry points in walls, baseboards, and around appliances to block roaches from entering. Pay extra attention to kitchens, bathrooms, and laundry rooms where moisture builds up. Reducing clutter also limits hiding spots and makes early detection easier.</p>
                    <p>While store-bought sprays may kill a few roaches on contact, they rarely stop the infestation. For complete protection, rely on trained professionals who understand cockroach behavior and know how to eliminate the source effectively and safely.</p>
                </div>
            </div>
        </div>
    </div>
</div>



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
            <div class="service_detail_wrapper">
    <!--pestthirdblck-->
    <div class="pestthirdown_section">
        <div class="col-sm-12 pestthirdown_hle">
            <div class="container">
                <div class="col-sm-6 servicedetailimagefirst">
                    <div class="servicedetailimagefirst_image_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-ants-last.png" alt="Ant Control Experts">
                    </div>
                </div>

                <div class="last_bfre">
                    <h2>Why Roaches Invade and Where They Hide</h2>
                    <p>Cockroaches are incredibly adaptable and thrive in dark, warm, and moist areas. Understanding their habits helps prevent long-term infestations:</p>
                    <ul>
                        <li><strong>Food Access:</strong> Crumbs, grease, and unsealed food containers attract roaches instantly. Kitchens and pantries are prime targets.</li>
                        <li><strong>Moisture:</strong> Roaches are drawn to damp spaces like under sinks, behind toilets, or near leaking appliances.</li>
                        <li><strong>Shelter:</strong> They hide inside walls, behind baseboards, and in small crevices during the day—making them hard to detect.</li>
                        <li><strong>Rapid Reproduction:</strong> A single roach can lay dozens of eggs, making infestations grow quickly if not addressed early.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 commercial_lastbottom">
        <div class="container">
            <div class="fourth_content">
                <h3>Why Professional Roach Control Is Essential</h3>
                <p>Store-bought sprays may kill visible roaches, but they often miss hidden nests. Here’s why calling in the pros makes all the difference:</p>
                <ul>
                    <li><strong>Deep Inspection:</strong> We find where roaches hide and breed, even in wall voids and crawl spaces.</li>
                    <li><strong>Complete Eradication:</strong> Our treatments target eggs, nymphs, and adults to stop the infestation lifecycle.</li>
                    <li><strong>Safe & Effective:</strong> We use proven, family-safe treatments that don’t just mask the problem—they solve it.</li>
                    <li><strong>Long-Term Prevention:</strong> Our team also helps seal entry points and provides tips to keep your space roach-free for good.</li>
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
[WPSM_AC id=9789]') ?>
            </div>
        </div>
    </div>
</div>




</section>










<?php 

get_footer();

?>