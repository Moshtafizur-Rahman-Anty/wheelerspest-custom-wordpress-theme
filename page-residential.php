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
        <img src="<?php echo get_template_directory_uri(); ?>/images/services/residential.png" alt="commercial">
        </div>
        <div class="col-sm-7 banner_innerpage_image">
            <div class="banner_innerpage_image_inner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/services/residential.png" alt="commercial">
            </div>
        </div>
        <div class="container">
            <div class="col-sm-5 banner_innerpage_content servicedetail_banner">
                <div class="banner_innerpage_contentinner">
                <div>Residential</div>
<p>Touchdown Pest Control provides reliable residential pest control services to keep your home safe and pest-free. Whether you're dealing with ants, spiders, rodents, or other unwanted guests, our expert team ensures effective, family-safe solutions tailored for your living space.</p>

                    <div class="banner_btn innerpagebtn">
                        <a href="tel:951-681-2847" class="learnmore" tabindex="0">951-681-2847</a>
                        <a href="contact" class="scheduleonline" tabindex="0">Schedule Online</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--pest-->
<div class="service_detail_wrapper">
    <div class="pestcontrolown_services servicedetailfirst">
        <div class="container">
            <div class="col-sm-12 pestcontrolown_hle">
                <div class="col-sm-6 servicedetailimagefirst">
                    <div class="servicedetailimagefirst_image_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/residential-2.png" alt="Residential Pest Control Services">
                    </div>
                </div>
                <div class="first_content">
                    <h1>Residential Pest Control Services</h1>
                    <p>
                        A pest-free home is essential for the safety and well-being of your family. At <a href="#">Touchdown Pest Control</a>, we specialize in residential pest control solutions tailored to your home’s unique needs. Whether you're dealing with ants in the kitchen, rodents in the attic, or mosquitoes in the backyard, our proven treatments will restore peace and comfort indoors and out.
                    </p>
                </div>
                <div class="second_content">
                    <h3>Why Choose Touchdown Pest Control for Your Home</h3>
                    <p>Our residential services go beyond just spraying. We combine expert inspections, targeted treatments, and long-term prevention to give you complete protection. Here’s why homeowners trust us:</p>
                    <ul>
                        <li><strong>Customized Solutions:</strong> Every home is different. We assess your property to create a treatment plan specific to your pest issues.</li>
                        <li><strong>Safe for Family & Pets:</strong> We use eco-friendly products and advanced techniques that are tough on pests but safe around your loved ones.</li>
                        <li><strong>Comprehensive Protection:</strong> From ants and spiders to rodents and termites, we’ve got every corner of your property covered.</li>
                        <li><strong>Long-Term Prevention:</strong> Our proactive approach prevents re-infestations, giving you lasting peace of mind.</li>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/residential-3.png" alt="Home Pest Protection">
                    </div>
                </div>
                <div class="second_content">
                    <h3>Common Pests in Residential Areas</h3>
                    <p>Your home can attract a range of pests without warning. Here are some of the most common threats we handle:</p>
                    <ul>
                    <li><strong>Rodent Control (Mice & Rats):</strong> Eliminate infestations caused by mice and rats with advanced trapping, exclusion, and sanitation services to protect your home or business.</li>
    
    <li><strong>Ant Removal & Prevention:</strong> Stop invasive ant colonies from taking over your kitchen, walls, or outdoor areas with targeted treatments tailored to different ant species.</li>
    
    <li><strong>Bee, Wasp & Hornet Nest Removal:</strong> Safely remove aggressive stinging insect nests from your property using humane and eco-friendly control methods.</li>
    
    <li><strong>Termite Inspection & Treatment:</strong> Detect and eliminate termite colonies before they cause structural damage. Our termite experts provide wood repair and prevention solutions.</li>
    
    <li><strong>Bed Bug Extermination:</strong> Get rid of bed bugs fast with professional heat or chemical treatments designed to kill bugs at every stage of life and prevent reinfestation.</li>
    
    <li><strong>Wildlife Control (Raccoons, Squirrels, Opossums):</strong> Humanely trap and relocate nuisance wildlife while sealing off entry points to keep them from returning.</li>
    
    <li><strong>Spider Control & Web Removal:</strong> Remove unsightly webs and reduce the population of potentially harmful spiders like black widows or brown recluses inside and outside your home.</li>
    
    <li><strong>Mosquito Control & Reduction:</strong> Reclaim your yard with professional mosquito treatments that target breeding grounds and break their lifecycle for long-lasting relief.</li>
    
    <li><strong>Roach Extermination Services:</strong> Eliminate cockroach infestations in kitchens, bathrooms, and other hotspots using baiting, trapping, and preventative exclusion methods.</li>
    
    <li><strong>Flea Treatment for Homes & Pets:</strong> Protect your home and furry family members with comprehensive flea control that targets eggs, larvae, and adults throughout your property.</li>
</ul>
                    </ul>
                    <p>Touchdown Pest Control offers reliable, year-round protection for your home—backed by experience and a satisfaction guarantee.</p>
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



<div class="commercial_lastblck" data-aos="fade-up">
    <div class="col-sm-12 commercial_lasthle">
        <div class="container">
           
            <h3>Protect Your Family, Home, and Peace of Mind</h3>
            <p>
                A pest-free home isn’t just more comfortable—it’s safer and healthier too. With Touchdown Pest Control’s <a href="/pest-control-company-west-covina-ca">residential treatment plans</a>, you can stop worrying about infestations that threaten your family’s well-being or damage your home. We focus on both immediate relief and long-term prevention.
            </p>
            <div class="last_bfre">
                <p>
                    Our experienced technicians understand how pests invade homes and where they hide. That’s why we use targeted, family-safe treatments that reach deep into walls, attics, basements, and outdoor zones. Whether it’s ants in your kitchen or rodents in the attic, we’re here to protect your home from top to bottom—all year long.
                </p>
            </div>
        </div>
    </div>
</div>





<?php 


get_footer();


?>