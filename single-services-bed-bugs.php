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
                        <div>Bed Bugs</div>
                        <p>Get fast and reliable services with Touchdown Pest Control. We specialize in removing rats and mice across San Diego & Riverside Counties. Call today for expert rodent removal, prevention, and exclusion services.</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/red_bugs.png" alt="Bed Bug Inspection">
                    </div>
                </div>
                <div class="first_content">
                    <h1>Bed Bug Removal &amp; Control</h1>
                    <p>Bed bugs are among the most difficult pests to eliminate. These tiny blood-feeding insects hide in mattresses, furniture, and wall cracks, emerging at night to bite and feed. Their ability to survive for months without food and hide in tight spaces makes professional treatment essential for complete eradication.
                </div>
                <div class="second_content">
                    <p>Attempting to get rid of bed bugs with DIY methods often leads to frustration and incomplete results. Professional inspection and heat or chemical treatment are necessary to eliminate bed bugs at all life stages—from eggs to adults. Regular monitoring and a comprehensive treatment strategy ensure they don’t return.
                </div>
                <div class="col-sm-7 mosquito_first_content">
                    <div class="mosquito_first_content_inner">
                        <span>Are bed bugs keeping you up at night? We offer professional bed bug inspections and extermination services. Call now to restore comfort and peace to your home.</span>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/bed_bugs-2.png" alt="Bed Bug Infestation Removal">
                    </div>
                </div>
                <div class="second_content">
                    <h3>PREVENTION AND NON-CHEMICAL CONTROL</h3>
                    <p>Bed bugs spread quickly by hitchhiking on luggage, clothing, and used furniture. To prevent infestations, avoid bringing second-hand mattresses or upholstered furniture into your home unless they’ve been professionally inspected. When traveling, always inspect hotel beds, keep your luggage elevated, and wash clothing immediately upon return.</p>
                    <p>Inside the home, regularly vacuum mattresses, bed frames, and nearby furniture. Use protective mattress encasements and seal cracks in walls and flooring. Reducing clutter makes it easier to detect and treat bed bugs early. While heat treatment and insecticides are highly effective, long-term success also depends on identifying and removing all potential hiding spots.</p>
                    <p>DIY sprays rarely eliminate all bed bugs and may even scatter the infestation. For reliable, long-lasting results, trust a certified pest control provider with experience handling bed bug infestations from start to finish.</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-ants-last.png" alt="Bed Bug Control and Treatment">
                    </div>
                </div>
                <div class="third_content">
                <p style="font-size: 28px; font-weight: 600; color: #ffffff; line-height: 1.4; margin-bottom: 20px;">
    Bed Bug Control and Professional Treatment Solutions
</p>                    <p>Bed bugs are persistent parasites that require professional intervention to remove completely. Chemical sprays alone are rarely effective unless directly applied to live bed bugs. Even then, eggs and hidden nymphs can survive. DIY sprays provide only temporary relief. For long-lasting protection, our approach includes both chemical treatment and non-chemical methods such as heat application, mattress encasements, and monitoring systems. Vacuuming and decluttering are critical during and after treatment to support full elimination.
                </div>
                <div class="last_bfre">
                    <h3>Bed Bug Bites & Health Risks</h3>
                    <p>Unlike fleas or mosquitoes, bed bugs do not spread disease, but their bites can cause intense itching, welts, allergic reactions, and sleep disruption. Bed bug bites typically appear in clusters or lines, often on exposed skin such as arms, neck, and legs. Although bites are usually not dangerous, scratching can lead to secondary infections. In some individuals, repeated bites may result in heightened sensitivity, insomnia, or psychological stress. If symptoms worsen or spread, consult a healthcare provider. Other insect bites commonly confused with bed bugs include fleas, mosquitoes, mites, ticks, and lice.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 commercial_lastbottom">
        <div class="container">
            <div class="fourth_content">
                <h3>IDENTIFYING BED BUGS</h3>
                <p>Bed bugs are small, flat, reddish-brown insects that feed on human blood. Adults are about the size of an apple seed and become more elongated after feeding. Nymphs are smaller and lighter in color, making them harder to spot. Bed bugs lack wings and cannot fly or jump, but they crawl quickly across floors, walls, and furniture. Eggs are tiny, white, and sticky, often laid in mattress seams or cracks.</p>

                <h3>Where Bed Bugs Hide</h3>
                <p>Bed bugs prefer dark, tight spaces close to where people sleep. Common hiding spots include mattress seams, box springs, headboards, bed frames, baseboards, electrical outlets, couches, and even behind wallpaper. During the day, they hide; at night, they emerge to feed. Because they can go months without feeding, they may remain hidden and undetected for long periods, multiplying silently in your home.</p>

                <h3>Infestation Signs</h3>
                <p>Signs of a bed bug infestation include:
                    <ul>
                        <li>Small red or brown stains on sheets (from crushed bugs or droppings)</li>
                        <li>Clusters of itchy bites, often in a line or zigzag pattern</li>
                        <li>Visible adult bugs or translucent nymphs in mattress crevices</li>
                        <li>Musty, sweet odor (produced by bed bug scent glands)</li>
                        <li>Shed exoskeletons or white eggs near sleeping areas</li>
                    </ul>
                </p>

                <h3>Bed Bug Reproduction and Spread</h3>
                <p>Female bed bugs can lay up to 5 eggs per day and hundreds over a lifetime. Eggs hatch in 6–10 days, and nymphs begin feeding immediately. Bed bugs are excellent hitchhikers and can spread through luggage, clothing, used furniture, and even shared walls in apartments. Once established, they are extremely difficult to eliminate without professional help.</p>

                <h3>Why Professional Bed Bug Removal Is Essential</h3>
                <p>Store-bought sprays and DIY foggers rarely reach all hiding places. In fact, they often drive bed bugs deeper into walls or neighboring rooms. At Touchdown Pest Control, our certified exterminators use advanced inspection tools, targeted treatments, and heat remediation when necessary. We also offer education on post-treatment prevention to help ensure your home remains bed bug-free.</p>

                <h3>Preventing Reinfestation</h3>
                <p>After treatment, prevent re-infestation by:
                    <ul>
                        <li>Washing and drying linens and clothes on high heat</li>
                        <li>Vacuuming regularly, especially around beds and furniture</li>
                        <li>Sealing cracks, crevices, and wall gaps</li>
                        <li>Using mattress encasements and bed bug interceptors under bed legs</li>
                        <li>Inspecting luggage and hotel rooms when traveling</li>
                    </ul>
                </p>

                <h3>When to Call a Professional</h3>
                <p>If you suspect bed bugs, don’t wait. The earlier you act, the easier and more cost-effective the treatment. Our team will perform a detailed inspection and provide the safest, most effective treatment plan customized for your situation. Bed bugs multiply fast—get peace of mind with trusted professional support.</p>
            </div>
        </div>
    </div>
</div>

            </div>


        </section>



<?php 

get_footer();

?>