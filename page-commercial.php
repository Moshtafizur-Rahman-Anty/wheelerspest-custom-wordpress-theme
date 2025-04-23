<?php 


get_header();


?>
<svg class="svg">
    <clipPath id="banner_inner" clipPathUnits="objectBoundingBox">
        <path d="M0.407,0.002 H1 L0.999,1 H0.378 C0.353,1,0.336,0.986,0.331,0.979 L0.319,0.963 L0.019,0.547 C0.009,0.533,0.004,0.523,0.004,0.52 C-0.003,0.49,0.007,0.471,0.012,0.466 L0.139,0.289 L0.328,0.027 C0.344,0.006,0.367,0.001,0.377,0.002 H0.407"></path>
    </clipPath>
</svg>
<div class="banner_innerpage_wrapper">
    <div class="col-sm-12 banner_innerpage_hle">
        <div class="col-sm-12 banner_innerpage_background">
        <img src="<?php echo get_template_directory_uri(); ?>/images/services/commercial-1.png" alt="commercial">
        </div>
        <div class="col-sm-7 banner_innerpage_image">
            <div class="banner_innerpage_image_inner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/services/commercial-1.png" alt="commercial">
            </div>
        </div>
        <div class="container">
            <div class="col-sm-5 banner_innerpage_content servicedetail_banner">
                <div class="banner_innerpage_contentinner">
                    <div>Commercial
                    </div>
                    <p>Touchdown Pest Control brings dependable commercial pest control solutions that protect your business with precision. From roaches to rodents, our team runs a proven playbook to keep your property pest-free and game-day ready.

</p>
                    <div class="banner_btn innerpagebtn">
                        <a href="tel:951-681-2847" class="learnmore" tabindex="0">951-681-2847</a>
                        <a href="contact" class="scheduleonline" tabindex="0">Schedule Online</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Bannerbelow-->
<div class="commercial_first_blck" data-aos="fade-up">
    <div class="container">
        <div class="col-sm-12 commercial_first_hle">
            <div class="col-sm-6 commercial_first_image" data-aos="zoom-in">
                <div class="commercial_first_image_inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/commertial-3.png"  alt="Commercial Pest Control Services">
                </div>
            </div>
            <div class="first_content">
                <h1>Commercial Pest Control That’s Always Game-Ready
                </h1>
                <p>Whether you run a restaurant, warehouse, retail space, or office, pest activity can sideline your operations fast. At Touchdown Pest Control, we build tailored commercial pest control strategies that protect your property and reputation—keeping your business compliant, clean, and pest-free all year.</p>
            </div>
            <div class="second_content">
                <h3>Why a Strong Defense Is Key to Reputation Protection</h3>
                <p>
                One rodent in the stockroom or a single cockroach near customers can damage more than just your image—it can lead to lost business and bad reviews. That’s why we deliver routine inspections, proactive treatments, and a pest control game plan customized for your space. With Touchdown Pest on your team, your business stays ready for every customer—and every health inspection.
                </p>
            </div>
            <div class="col-sm-8 commercial_firstblckimp">
                <div class="commercial_firstblckimp_inner">
                    <p>Get in touch today to schedule commercial pest services that protect your brand like a seasoned defense</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="commercial_second_blck" data-aos="fade-up">
    <div class="col-sm-12 commercial_second_hle">
        <div class="container">
            <div class="col-sm-6 commercial_second_image" data-aos="zoom-in">
                <div class="commercial_second_image_inner">
                    <img src="https://wheelerspestcontrol.com/images/page/image/1724927060commercial3.webp" alt="Pest Prevention Services for Businesses">
                </div>
            </div>
            <h3>The Hidden Costs of Pest Infestations for Businesses</h3>
            <p>When pests strike, the damage isn't just physical—it can hit your bottom line. From inventory loss and structural damage to emergency shutdowns and lost productivity, the financial impact can be overwhelming. At Touchdown Pest Control, we help minimize risk by eliminating pests quickly and efficiently—before they harm your business operations.</p>

            <h2>Stay Compliant with Industry Health and Safety Regulations</h2>
            <p>
                Food service establishments, healthcare facilities, warehouses, and other businesses are held to high safety standards. Pest infestations can result in regulatory violations, fines, or even closures. Our team is trained in health code compliance and offers detailed reporting, scheduled inspections, and integrated pest management (IPM) plans. Touchdown Pest Control helps ensure you meet industry regulations while maintaining a healthy, pest-free workplace for staff and customers alike.
            </p>
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



<div class="commercial_lastblck" data-aos="fade-up">
    <div class="col-sm-12 commercial_lasthle">
        <div class="container">
            <div class="col-sm-6 commercial_lastimage" data-aos="zoom-in">
                <div class="commercial_lastimagefirst">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/commertial-last.png" alt="Commercial Pest Technician at Work">
                </div>
                <div class="commercial_lastimagesecond">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/commertial-last.png" alt="Commercial Pest Control Inspection">
                </div>
            </div>
            <h3>Why Ongoing Pest Control Maintenance Is a Smart Play</h3>
            <p>
            A one-time treatment might stop today’s problem—but it won’t stop pests from making a comeback. That’s why Touchdown Pest Control offers scheduled maintenance plans built for long-term defense. With regular inspections and proactive treatments, we help you stay ahead of the game and avoid costly surprises.
            </p>
            <div class="last_bfre">
                <p>
                    Businesses in pest-prone areas—or industries like hospitality, food service, and storage—are at higher risk for infestations. Routine pest control plans allow for early detection and intervention, preventing costly damage and downtime. Our proactive strategies build a strong defense around your property, minimizing pest access and keeping your workspace safe, sanitary, and professionally maintained.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 commercial_lastbottom" data-aos="fade-up">
    <div class="container">
        <h2>Looking for a Trusted Local Pest Control Partner?</h2>
        <p>
            Don’t let pests disrupt your business operations or endanger your reputation. Contact Touchdown Pest Control today to schedule a consultation. Our experts will build a treatment plan that fits your hours and industry needs—so you stay protected without interruptions.
        </p>
    </div>
</div>



<?php 


get_footer();


?>