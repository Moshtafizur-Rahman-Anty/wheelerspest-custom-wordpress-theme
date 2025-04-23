<?php 

get_header();

?>



<section>
            <!-- banner-section -->
            <!-- <svg class="svg"> <clipPath id="banner_inner" clipPathUnits="objectBoundingBox"><path d="M0.407,0.002 H1 L0.999,1 H0.378 C0.353,1,0.336,0.986,0.331,0.979 L0.319,0.963 L0.019,0.547 C0.009,0.533,0.004,0.523,0.004,0.52 C-0.003,0.49,0.007,0.471,0.012,0.466 L0.139,0.289 L0.328,0.027 C0.344,0.006,0.367,0.001,0.377,0.002 H0.407"></path></clipPath> </svg> -->
            <svg class="svg">
                <clipPath id="banner_inner" clipPathUnits="objectBoundingBox">
                    <path d="M0.01,0.433 L0.287,0 H1 V0.99 C0.99,0.997,0.977,1,0.971,1 H0.36 C0.343,1,0.335,0.996,0.325,0.99 C0.317,0.985,0.309,0.974,0.306,0.97 C0.212,0.824,0.024,0.53,0.018,0.519 C0.011,0.507,0.002,0.495,0,0.473 C-0.001,0.455,0.006,0.439,0.01,0.433"></path>
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
                        <div class="col-sm-5 banner_innerpage_content">
                            <div class="banner_innerpage_contentinner">
                                <div>Service Areas</div>
                                <p>Now serving West Covina and San Gabriel — call Touchdown Pest Control and put a winning local team on your pest defense.</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/commertial-last.png"  alt="West Covina and San Gabriel Pest Control">
                    </div>
                </div>
                <div class="first_content">
                    <h1>Pest Control in West Covina & San Gabriel, CA</h1>
                    <p>
                    Your home should be a safe zone—not the home field for pests. Whether it’s rodents in the attic, ants in the kitchen, or bees buzzing too close to your yard, even a small pest problem can disrupt your peace of mind. That’s why smart, professional pest control isn’t just a fix—it’s a defense strategy.
                    </p>
                </div>
                <div class="second_content">
                    <h3>Why Professional Pest Control Matters</h3>
                    <p>
                    Pests aren’t just annoying—they’re a real threat. Rodents can chew through wires and spread illness. Bees and wasps can become dangerous when they settle too close to home. Left unchecked, minor issues can escalate into full-blown infestations that cost more time, money, and stress to fix.<br/>
                        Acting quickly with the help of a trusted pest control company like Touchdown Pest Control can save you time, money, and stress in the long run.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="servicedetail_section_second">
        <div class="container">
            <div class="col-sm-12 servicedetail_section_hle">
                <div class="col-sm-5 servicedetail_secondimage">
                    <div class="servicedetail_secondimage_inner">
                        <img src="https://wheelerspestcontrol.com/images/page/image/1724783279pic-17.webp" alt="Pest Control Experts West Covina and San Gabriel">
                    </div>
                </div>
                <div class="second_content">
                    <h2>Why Choose Touchdown Pest Control?</h2>
                    <p>
                        Touchdown Pest Control brings years of hands-on experience and a customer-first approach to every service call. Our certified technicians are skilled in identifying, eliminating, and preventing pest issues of all kinds. We don’t just remove pests—we create long-lasting solutions tailored to your property.<br/>
                        We proudly serve residential and commercial properties throughout West Covina and San Gabriel with safe, eco-conscious pest control methods that keep your loved ones and the environment protected.
                    </p>
                    <h3>Our Pest Control Services Include:</h3>
                    <ul>
                        <li>Ant extermination and prevention</li>
                        <li>Rodent removal and exclusion</li>
                        <li>Spider control</li>
                        <li>Bee and wasp removal</li>
                        <li>Gopher and mole control</li>
                        <li>Wildlife and animal trapping</li>
                        <li>Bed bug treatment</li>
                        <li><a href="#">Squirrel removal services</a></li>
                    </ul>
                    <p>🏈 Call Touchdown Pest Control today to schedule your inspection in <strong>West Covina</strong> or <strong>San Gabriel</strong>!</p>
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

<?php 

get_footer();

?>