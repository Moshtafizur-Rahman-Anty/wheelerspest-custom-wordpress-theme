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
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Ant Control Services">
            </div>
            <div class="col-sm-7 banner_innerpage_image">
                <div class="banner_innerpage_image_inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Ant Control Experts">
                </div>
            </div>
            <div class="container">
                <div class="col-sm-5 banner_innerpage_content servicedetail_banner">
                    <div class="banner_innerpage_contentinner">
                        <div>Termites</div>
                        <p>Protect your home from costly termite damage with Touchdown Pest Control. We specialize in expert termite inspection, treatment. Call now to schedule fast, reliable, and long-lasting termite control solutions.</p>
                        <div class="banner_btn innerpagebtn">
                        <a href="tel:626-966-5600" class="learnmore" tabindex="0">626-966-5600</a>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="scheduleonline" tabindex="0">Schedule Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--pest-->
<div class="service_detail_wrapper">
    <div class="pestcontrolown_services servicedetailfirst">
        <div class="container">
            <div class="col-sm-12 pestcontrolown_hle">
                <div class="col-sm-6 servicedetailimagefirst">
                    <div class="servicedetailimagefirst_image_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/termites-1.png" alt="Termite Inspection">
                    </div>
                </div>
                <div class="first_content">
                    <h1>Termite Inspection & Treatment Services</h1>
                    <p>
                        Noticing unexplained wood damage, hollow-sounding walls, or small piles of dust? You could be dealing with a termite infestation. At <a href="/pest-control-company-lake-elsinore-ca">Touchdown Pest Control</a>, we provide expert termite inspection, removal, and prevention services to help protect your home or business. Learn how to identify signs of termite activity and why fast, professional action is essential.
                    </p>
                </div>
                <div class="second_content">
                    <h2>How to Tell if Termites Have Invaded Your Property</h2>
                    <p>Termites are silent and destructive, often going unnoticed until severe damage has already been done. Look out for these warning signs of a termite problem:</p>
                    <ul>
                        <li><strong>Hollow-Sounding Wood:</strong> Tap on wooden surfaces—if they sound thin or papery, termites may have tunneled inside.</li>
                        <li><strong>Frass (Droppings):</strong> Drywood termites leave behind small, pellet-like droppings near baseboards, windows, or furniture.</li>
                        <li><strong>Mud Tubes:</strong> Subterranean termites create narrow tunnels made of mud along foundation walls, pipes, and crawl spaces.</li>
                        <li><strong>Swarmers or Shed Wings:</strong> Discarded wings from flying termites near windows or doors often indicate a nearby infestation.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="servicedetail_section_second">
        <div class="container">
            <div class="col-sm-12 servicedetail_section_hle">
                <div class="col-sm-5 servicedetail_secondimage">
                    <div class="servicedetail_secondimage_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/termites-2.png" alt="Termite Damage Repair">
                    </div>
                </div>
                <div class="second_content">
                    <h3>The Dangers of Termite Infestations in Your Home</h3>
                    <p>Termites can cause significant damage before you ever see the signs. Here’s why professional termite control is so important:</p>
                    <ul>
                        <li><strong>Structural Damage:</strong> Termites feed on wood, drywall, and insulation—weakening the integrity of your home and leading to costly repairs.</li>
                        <li><strong>Hidden Colonies:</strong> They often live within walls and underground, staying undetected for months or even years.</li>
                        <li><strong>Property Value Impact:</strong> A termite infestation can drastically reduce property value and delay real estate transactions.</li>
                        <li><strong>Fast Spread:</strong> Once established, termite colonies can expand rapidly, increasing the scale and cost of damage.</li>
                    </ul>

                    <h3>Why DIY Termite Removal Fails</h3>
                    <p>While store-bought sprays and bait traps may seem convenient, they rarely eliminate the entire colony. Here's why professional termite treatment is the better solution:</p>
                    <ul>
                        <li><strong>Specialized Tools & Techniques:</strong> <a href="/pest-control-company-menifee-ca">Certified technicians</a> use advanced detection and treatment systems to reach hidden termites effectively.</li>
                        <li><strong>Colony Elimination:</strong> DIY methods often miss the queen and core colony, allowing termites to return.</li>
                        <li><strong>Safe & Targeted Treatments:</strong> Professional products are safer for use in homes and more powerful against termites.</li>
                        <li><strong>Preventive Protection:</strong> We offer long-term treatment plans to protect your home from future infestations and ongoing damage.</li>
                    </ul>
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
    <div class="pestthirdown_section">
        <div class="col-sm-12 pestthirdown_hle">
            <div class="container">
                <div class="col-sm-6 servicedetailimagefirst">
                    <div class="servicedetailimagefirst_image_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-ants-last.png" alt="Termite Damage in Wood">
                    </div>
                </div>
                <div class="third_content">
                    <p style="font-size: 28px; font-weight: 600; line-height: 1.4; margin-bottom: 20px;">
                        The longer you wait to address a termite problem, the more damage they cause—often silently and out of sight. Here’s why immediate termite control is essential:
                    </p>
                </div>
                <div class="last_bfre">
                    <ul>
                        <li><strong>Preventing Widespread Structural Damage:</strong> Termites feed on wood, drywall, and insulation. Delayed treatment allows colonies to grow, leading to more extensive and expensive damage to your home’s structure.</li>
                        <li><strong>Stopping the Spread of Hidden Colonies:</strong> Termites often operate in hidden areas like walls, basements, and crawl spaces. Acting quickly prevents these colonies from expanding throughout your property.</li>
                        <li><strong>Avoiding Decreased Property Value:</strong> A known termite infestation can significantly reduce your property’s market value. Early detection and professional intervention protect your investment.</li>
                        <li><strong>Minimizing Long-Term Costs:</strong> The longer termites remain, the more complex and costly the repair. Fast action means simpler treatment and fewer reconstruction expenses.</li>
                    </ul>
                    <h2>Need Trusted Termite Control Services?</h2>
                    <p>
                        If you've seen signs of termite activity or suspect an infestation, don’t wait. Touchdown Pest Control offers advanced termite inspection, treatment, and prevention services to eliminate the threat and protect your home for the long term. <a href="/contact">Contact us today</a> to schedule your professional termite control service.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



        </section>



<?php 

get_footer();

?>