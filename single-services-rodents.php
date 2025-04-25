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
                    <div>Rodents</div>
                    <p>Protect your home and health from rodents with Touchdown Pest Control. We offer safe, effective removal of rats and mice, preventing damage to your property and reducing health risks. Call today for expert rodent control and long-term prevention solutions.</p>

                        <div class="banner_btn innerpagebtn">
                        <a href="tel:626-966-5600" class="learnmore" tabindex="0">626-966-5600</a>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="scheduleonline" tabindex="0">Schedule Online</a>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/rodents.jpg" alt="Rodent Infestation Treatment">
                    </div>
                </div>
                <div class="first_content">
                    <h1>Rodent Control & Removal Services</h1>
                    <p>
                        Rodents such as rats and mice pose serious risks to your home and health. These pests chew through wiring, contaminate food, and spread dangerous diseases. At <a href="#">Touchdown Pest Control</a>, we specialize in comprehensive rodent removal and prevention services. Our expert team locates entry points, eliminates infestations, and keeps rodents from returning.
                    </p>
                </div>
                <div class="second_content">
                    <h3>Common Rodents Found in Homes</h3>
                    <p>Rodents are sneaky and fast breeders, often nesting in walls, basements, and attics. These are the most common rodent types we handle:</p>
                    <ul>
                        <li><strong>House Mice:</strong> Small, gray, and agile, house mice can squeeze through openings as small as a dime and quickly contaminate food sources.</li>
                        <li><strong>Norway Rats:</strong> Larger and more destructive, these rats burrow near foundations and gnaw through wood, plastic, and even metal pipes.</li>
                        <li><strong>Roof Rats:</strong> Excellent climbers, roof rats nest in attics and trees. They often enter homes through vents or damaged roofing.</li>
                        <li><strong>Field Mice:</strong> Typically found outdoors, these mice can invade garages and sheds during colder months, bringing fleas and other pests with them.</li>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/rodent-inspection.jpg" alt="Rodent Control Experts">
                    </div>
                </div>
                <div class="second_content">
                    <h3>Why Rodents Are So Hard to Eliminate</h3>
                    <p>Rats and mice are intelligent and resourceful, making them hard to eliminate without professional help. Here's why DIY methods often fail:</p>
                    <ul>
                        <li><strong>Rapid Reproduction:</strong> Rodents reproduce quickly, with a single pair producing dozens of offspring in just a few months.</li>
                        <li><strong>Hidden Entry Points:</strong> Mice and rats squeeze through tiny cracks in walls, pipes, and vents, making them hard to track down.</li>
                        <li><strong>Contamination & Damage:</strong> Rodents chew through wires, insulation, and drywall while leaving droppings that spread bacteria and disease.</li>
                    </ul>
                    <p>Our rodent control process includes thorough inspection, sealing of entry points, trapping, and sanitation. With Touchdown Pest Control, you get fast, reliable, and long-lasting rodent protection.</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-ants-last.png" alt="Rodent Control Experts">
                    </div>
                </div>

                <div class="last_bfre">
                    <h2>Why Rodents Invade Homes and Where They Nest</h2>
                    <p>Rodents like rats and mice are persistent pests that sneak into homes in search of food and shelter. Understanding their habits can help stop infestations before they start:</p>
                    <ul>
                        <li><strong>Warm Nesting Areas:</strong> Rodents prefer hidden spaces like attics, basements, and wall voids where they can build nests out of insulation or fabric.</li>
                        <li><strong>Accessible Food:</strong> Leftover crumbs, open food containers, and pet food attract mice and rats into kitchens and pantries.</li>
                        <li><strong>Small Entry Points:</strong> Rodents can squeeze through tiny cracks in walls, gaps under doors, or openings around utility lines.</li>
                        <li><strong>Fast Reproduction:</strong> Once inside, rodents reproduce rapidly, turning a minor issue into a large infestation in a matter of weeks.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 commercial_lastbottom">
        <div class="container">
            <div class="fourth_content">
                <h3>Why Professional Rodent Control Is Essential</h3>
                <p>Traps and bait stations offer short-term relief, but long-term rodent control requires expert solutions. Touchdown Pest Control delivers proven, professional rodent removal services designed to keep your property safe:</p>
                <ul>
                    <li><strong>Accurate Detection:</strong> We identify nesting areas, track movement patterns, and find rodent entry points throughout your property.</li>
                    <li><strong>Safe Removal:</strong> Our pest control team uses targeted, pet-safe techniques to eliminate mice and rats efficiently.</li>
                    <li><strong>Exclusion & Sealing:</strong> We seal entry holes and install protective barriers to prevent future rodent access.</li>
                    <li><strong>Sanitation Support:</strong> Rodents spread bacteria, damage insulation, and leave droppings. We help restore cleanliness and safety after removal.</li>
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
[WPSM_AC id=9787]'); ?>
            </div>
        </div>
    </div>
</div>



</section>






<?php 

get_footer();

?>