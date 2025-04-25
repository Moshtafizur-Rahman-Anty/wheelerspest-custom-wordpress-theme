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
                <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Flea Control Services">
            </div>
            <div class="col-sm-7 banner_innerpage_image">
                <div class="banner_innerpage_image_inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Flea Extermination Experts">
                </div>
            </div>
            <div class="container">
                <div class="col-sm-5 banner_innerpage_content servicedetail_banner">
                    <div class="banner_innerpage_contentinner">
                        <div>Fleas</div>
                        <p>Fighting a flea infestation? Touchdown Pest Control provides expert flea removal and prevention services across San Diego & Riverside Counties. Book your home inspection today and enjoy long-term relief from itching, bites, and discomfort.</p>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services/fleas-2.png" alt="Flea Infestation Treatment">
                        </div>
                    </div>
                    <div class="first_content">
                        <h1>Flea Control & Removal Services</h1>
                        <p>
                            Fleas are more than a nuisance—they’re a health risk to both pets and people. These tiny pests spread fast, hide in carpets, and lay eggs in bedding and furniture. At <a href="#">Touchdown Pest Control</a>, we offer complete flea extermination solutions that target every stage of the flea life cycle and keep your home protected.
                        </p>
                    </div>
                    <div class="second_content">
                        <h3>Common Flea Types Found Indoors</h3>
                        <p>Fleas reproduce rapidly and can be extremely hard to eliminate without professional help. Here are the most common flea types we handle:</p>
                        <ul>
                            <li><strong>Cat Fleas:</strong> Despite the name, cat fleas bite dogs, cats, and humans. They're the most common fleas in homes and can infest entire households if untreated.</li>
                            <li><strong>Dog Fleas:</strong> Less common than cat fleas but equally dangerous, dog fleas can carry tapeworms and trigger allergic reactions in pets.</li>
                            <li><strong>Human Fleas:</strong> Rare but possible, these fleas can bite and live off humans when pets aren't around, often causing skin irritation and discomfort.</li>
                            <li><strong>Rodent Fleas:</strong> Found on rats and mice, these fleas can enter homes through rodent infestations and transmit serious diseases like typhus and plague.</li>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services/ants-service.jpg" alt="Flea Removal Experts">
                        </div>
                    </div>
                    <div class="second_content">
                        <h3>Why Fleas Are So Hard to Eliminate</h3>
                        <p>Fleas thrive in warm, humid environments and can lay hundreds of eggs in carpets, upholstery, and pet bedding. Here’s what makes them so tough to get rid of:</p>
                        <ul>
                            <li><strong>Rapid Breeding:</strong> A single female flea can lay up to 50 eggs per day, leading to fast and widespread infestations.</li>
                            <li><strong>Hidden Life Stages:</strong> Eggs, larvae, and pupae often go unnoticed, hiding deep in carpets, cracks, and cushions.</li>
                            <li><strong>Pet Hosts:</strong> Pets carry fleas indoors from parks, kennels, or other animals, starting the infestation cycle.</li>
                        </ul>
                        <p>Our proven flea treatment includes targeted insecticides, pet-safe products, and follow-up inspections to ensure total eradication. With Touchdown Pest Control, you get relief that lasts.</p>
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
    <div class="service_detail_wrapper">
        <!--pestthirdblck-->
        <div class="pestthirdown_section">
            <div class="col-sm-12 pestthirdown_hle">
                <div class="container">
                    <div class="col-sm-6 servicedetailimagefirst">
                        <div class="servicedetailimagefirst_image_inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/services/fleas.png" alt="Flea Control and Prevention">
                        </div>
                    </div>
                    <div class="third_content">
                        <p style="font-size: 28px; font-weight: 600; color: #ffffff; line-height: 1.4; margin-bottom: 20px;">
                            Flea Control and Professional Treatment Services
                        </p>
                        <p>Fleas can quickly turn your home into a hotspot of discomfort. These biting pests thrive in carpets, pet bedding, and cracks in flooring. DIY flea sprays and powders may kill some adults but often miss hidden eggs and larvae. Our expert flea control service uses a combination of pet-safe treatments and advanced techniques to eliminate fleas at every stage of life. We target not just the pests, but the root of the problem—ensuring long-lasting protection and relief.</p>
                    </div>
                    <div class="last_bfre">
                        <h3>Flea Bites & Health Risks</h3>
                        <p>Flea bites can cause intense itching, allergic reactions, and secondary skin infections in both humans and pets. Pets suffering from flea infestations may develop dermatitis, hair loss, or tapeworm infections from swallowing fleas during grooming. Children and allergy-prone individuals are especially vulnerable. Early intervention is critical to stopping the flea life cycle and preventing recurring issues. If you or your pets show signs of flea bites or scratching, call a professional right away.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 commercial_lastbottom">
            <div class="container">
                <div class="fourth_content">
                    <h3>IDENTIFYING FLEAS</h3>
                    <p>Fleas are tiny, wingless insects with reddish-brown bodies that can jump long distances. Adult fleas are only 1–3mm long, making them difficult to detect. They often hide in carpets, furniture seams, pet fur, and bedding. Eggs are white and oval-shaped, while larvae resemble tiny worms and burrow deep into fabrics or floor cracks.</p>

                    <h3>Where Fleas Hide</h3>
                    <p>Fleas prefer warm, humid areas and are commonly found in pet bedding, carpets, upholstery, and cracks in hardwood floors. Outdoors, they thrive in shady, moist spots like under decks and shrubs. Fleas lay hundreds of eggs, which can fall off pets and spread throughout the home, making complete elimination difficult without professional help.</p>

                    <h3>Infestation Signs</h3>
                    <p>Signs of a flea infestation include:
                        <ul>
                            <li>Pets scratching, biting, or licking excessively</li>
                            <li>Small red bites on ankles or legs</li>
                            <li>Flea dirt (tiny black specks) on pet bedding or fur</li>
                            <li>Live fleas seen jumping on furniture, floors, or pets</li>
                            <li>Restless pets and hair loss in affected areas</li>
                        </ul>
                    </p>

                    <h3>Flea Reproduction and Spread</h3>
                    <p>Fleas reproduce rapidly—females lay up to 50 eggs per day. Eggs hatch into larvae, develop into pupae, and eventually emerge as biting adults. Fleas spread easily between pets, homes, and outdoor environments. Without thorough treatment, they can persist in carpets, baseboards, and under furniture for weeks or months.</p>

                    <h3>Why Professional Flea Removal Is Essential</h3>
                    <p>Store-bought flea bombs and sprays only treat surface-level infestations. Touchdown Pest Control uses a comprehensive approach—targeting eggs, larvae, and adult fleas with safe, effective products and specialized equipment. Our trained technicians assess your home, provide immediate relief, and offer prevention strategies to stop fleas from returning.</p>

                    <h3>Preventing Reinfestation</h3>
                    <p>After treatment, follow these steps to keep fleas away:
                        <ul>
                            <li>Wash pet bedding, toys, and blankets in hot water</li>
                            <li>Vacuum carpets, rugs, and furniture daily for 7–10 days</li>
                            <li>Use vet-approved flea treatments on all household pets</li>
                            <li>Trim grass and remove debris from outdoor areas</li>
                            <li>Seal entry points to keep stray animals from entering your yard</li>
                        </ul>
                    </p>

                    <h3>When to Call a Professional</h3>
                    <p>If fleas keep coming back despite home remedies, it’s time to call in the experts. Touchdown Pest Control provides thorough flea inspections, customized treatments, and follow-up services to ensure your home stays flea-free for good. Contact us today to protect your pets, your family, and your comfort.</p>
                </div>
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
[WPSM_AC id=9795]') ?>
            </div>
        </div>
    </div>
</div>


<?php 

get_footer();

?>