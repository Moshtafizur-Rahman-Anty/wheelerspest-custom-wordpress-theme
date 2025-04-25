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
                        <div>Ants</div>
                        <p>Say goodbye to ant infestations! Touchdown Pest Control offers expert ant removal and treatment across San Diego & Riverside Counties. Call now to book a fast and reliable service.</p>
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
                            <img src="https://wheelerspestcontrol.com/images/page/image/1725052249ants-removal.webp" alt="Ant Infestation Removal">
                        </div>
                    </div>
                    <div class="first_content">
                        <h1>Ant Control & Removal Services</h1>
                        <p>
                            Noticed ants marching through your kitchen or emerging from wall cracks? You’re not alone. Ant invasions are a common nuisance in homes and businesses. At <a href="#">Touchdown Pest Control</a>, we deliver powerful ant treatment solutions designed to eliminate the problem at its root. Discover the most frequent ant species that invade Southern California homes and why professional ant control is key to long-term relief.
                        </p>
                    </div>
                    <div class="second_content">
                        <h3>Common Ant Species in Southern California</h3>
                        <p>Effective ant control begins with proper identification. Different species require tailored strategies to ensure complete removal. Here are the top invaders we handle:</p>
                        <ul>
                            <li><strong>Argentine Ants:</strong> Known for forming large colonies, these ants are drawn to moisture and sweet food. They're persistent and tough to eliminate without targeted treatment.</li>
                            <li><strong>Carpenter Ants:</strong> These wood-boring ants can weaken structural integrity by tunneling through wooden frames. Early intervention can help prevent costly damage.</li>
                            <li><strong>Odorous House Ants:</strong> Easily recognized by their foul, rotten-coconut scent when crushed. Attracted to sugary spills and leftovers.</li>
                            <li><strong>Fire Ants:</strong> Aggressive and painful, fire ants pose risks to children and pets. They often build large outdoor mounds but can find their way inside as well.</li>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services/ants-service.jpg" alt="Ant Control Experts">
                        </div>
                    </div>
                    <div class="second_content">
                        <h3>What Attracts Ants Into Your Home</h3>
                        <p>Ants are highly social insects with sharp instincts for survival. Here’s what makes your home appealing to them:</p>
                        <ul>
                            <li><strong>Food:</strong> Ants seek out sugary and greasy residues. Crumbs, unsealed snacks, or spilled liquids are prime attractants.</li>
                            <li><strong>Water:</strong> Moist environments like leaky sinks, humid bathrooms, or basements provide essential hydration for ants.</li>
                            <li><strong>Shelter:</strong> During extreme temperatures, ants seek refuge indoors. Gaps in doors, cracks in walls, and window edges become their entry points.</li>
                        </ul>
                        <p>Once ants discover a reliable food or water source, they lay down pheromone trails to guide others. Breaking this cycle with targeted ant extermination is essential. Touchdown Pest Control uses strategic methods to stop the infestation and prevent future activity.</p>
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
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-ants-last.png" alt="Ant Control Experts">
                            </div>
                        </div>

                        <div class="last_bfre">
                            <h2>How to Prevent Ant Infestations Before They Begin</h2>
                            <p>Keeping your home protected starts with prevention. Touchdown Pest Control recommends the following expert-backed steps to help keep ants out for good:</p>
                            <ul>
                                <li><strong>Seal All Entry Points:</strong> Inspect your home’s foundation, windows, and doors for cracks and openings. Seal any gaps with caulk or weatherstripping to block entry paths.</li>
                                <li><strong>Maintain a Clean Environment:</strong> Ants are attracted to food and crumbs. Wipe down surfaces daily, vacuum frequently, and store all food in sealed containers.</li>
                                <li><strong>Address Moisture Issues:</strong> Fix leaky pipes, improve drainage, and eliminate damp spots. Ants thrive in moist environments, so drying out the area makes it less inviting.</li>
                                <li><strong>Trim Exterior Vegetation:</strong> Keep tree branches and shrubs from touching your home, and avoid piling firewood near your foundation. These act as bridges for ants to access your house.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="col-sm-12 commercial_lastbottom">
                <div class="container">
                    <div class="fourth_content">
                        <h3>Why Regular Ant Control Services Matter</h3>
                        <p>DIY solutions may offer short-term relief, but they rarely solve the root of the problem. Here’s why homeowners across Southern California trust Touchdown Pest Control for ongoing ant protection:</p>
                        <ul>
                            <li><strong>Specialized Knowledge:</strong> Our trained technicians identify ant species and apply the most effective treatment plan for fast and lasting results.</li>
                            <li><strong>Colony Elimination:</strong> We go beyond surface-level treatment to eliminate the colony—including the queen—ensuring ants don’t return.</li>
                            <li><strong>Safe for Families & Pets:</strong> We use eco-friendly solutions that are powerful on pests and safe for your loved ones.</li>
                            <li><strong>Ongoing Prevention:</strong> Regular inspections and treatments catch potential problems early—before they turn into full infestations.</li>
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
[WPSM_AC id=9786]'); ?>
            </div>
        </div>
    </div>
</div>



</section>

<?php

get_footer();

?>