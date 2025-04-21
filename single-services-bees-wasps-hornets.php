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
                    <div>Bees, Wasps & Hornets</div>
<p>Protect your property from stinging insects with Touchdown Pest Control. We provide safe and effective removal of bee, wasp, and hornet nests to prevent harm and restore peace of mind. Call today for expert stinging insect control and prevention services.</p>

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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/bees.png" alt="Bee Wasp Hornet Removal">
                    </div>
                </div>
                <div class="first_content">
                    <h1>Bee, Wasp & Hornet Removal Services</h1>
                    <p>Bees, wasps, and hornets can turn a peaceful yard into a danger zone—especially when nests are close to entrances, attics, or high-traffic areas. Their stings can cause pain, allergic reactions, and serious risk for children and pets. Touchdown Pest Control offers safe, effective removal of nests and swarms to protect your home and family.
                </div>
                <div class="second_content">
                    <p>Our licensed pest control experts use humane and eco-friendly methods to eliminate stinging insects without putting your household at risk. Whether it’s an aggressive wasp nest under your eaves or a swarm of bees in your shed, we’re equipped to handle it quickly and professionally.</p>
                </div>
                <div class="col-sm-7 mosquito_first_content">
                    <div class="mosquito_first_content_inner">
                        <span>Dealing with stinging insects on your property? We provide fast, reliable bee, wasp, and hornet removal services. Call now to speak with a certified technician.</span>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/bees-2.png" alt="Bee and Wasp Nest Removal">
                    </div>
                </div>
                <div class="second_content">
                    <h3>PREVENTION AND SAFETY TIPS</h3>
                    <p>Bees, wasps, and hornets typically build nests in eaves, trees, attics, sheds, and wall voids. To reduce the chances of stings or infestations, avoid disturbing nests and keep food and trash sealed when outdoors. Wearing light-colored clothing and avoiding perfumes can also reduce the likelihood of attracting them.</p>
                    <p>Inspect your home’s exterior regularly for small nests in early spring, when colonies begin to form. Early detection allows for quicker, safer removal before they expand. Avoid spraying nests yourself, especially if you are unsure about the species or are allergic to stings.</p>
                    <p>For best results, trust Touchdown Pest Control’s certified professionals to assess the situation and implement the safest removal solution possible—whether it's a honey bee relocation or hornet extermination. Our team ensures complete elimination with minimal risk to your household and property.</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-ants-last.png" alt="Bee and Wasp Control and Removal">
                    </div>
                </div>
                <div class="third_content">
                <p style="font-size: 28px; font-weight: 600; color: #ffffff; line-height: 1.4; margin-bottom: 20px;">
    Bee, Wasp & Hornet Control and Safe Nest Removal
</p>                    <p>Stinging insects like bees, wasps, and hornets can pose serious health risks when they build nests near homes or public areas. Touchdown Pest Control offers professional stinging insect removal using safe, humane, and eco-conscious techniques. We eliminate active nests and help prevent reinfestation through targeted exclusion and preventative methods.</p>
                </div>
                <div class="last_bfre">
                    <h3>Sting Risks & Safety Concerns</h3>
                    <p>Bees, wasps, and hornets defend their nests aggressively when disturbed, leading to painful stings and even allergic reactions in sensitive individuals. While a single sting may cause mild discomfort, multiple stings or allergic responses can be dangerous. Children and pets are especially vulnerable when nests are located near doors, patios, or play areas. If you suspect an active nest, do not attempt removal—professional treatment ensures your safety and avoids provoking the colony.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 commercial_lastbottom">
        <div class="container">
            <div class="fourth_content">
                <h3>IDENTIFYING STINGING INSECTS</h3>
                <p>Wasps and hornets are typically more aggressive than bees and are identifiable by their slender, elongated bodies and shiny, hairless appearance. Bees are generally more docile, rounder, and hairy, and may be seen pollinating flowers. Nests can vary—paper wasps build umbrella-shaped nests, hornets create large ball-shaped structures, and bees form waxy hives in sheltered areas.</p>

                <h3>Where Nests Are Found</h3>
                <p>Nests can appear under eaves, in attics, trees, walls, sheds, or even underground. Early detection is crucial. A small nest in spring can grow into a large, aggressive colony by summer. If buzzing activity increases or you spot a visible nest, avoid the area and call for professional help immediately.</p>

                <h3>Signs of Nest Activity</h3>
                <ul>
                    <li>Increased insect presence near doors, windows, or eaves</li>
                    <li>Visible nests under gutters, trees, decks, or attic corners</li>
                    <li>Buzzing sounds inside walls or around your property</li>
                    <li>Swarming behavior or insects entering and exiting holes or cracks</li>
                </ul>

                <h3>Reproduction and Nest Growth</h3>
                <p>Queen wasps and hornets start new nests each spring. As the colony grows, so does the risk of stings and aggressive behavior. Colonies may house hundreds to thousands of stinging insects by late summer. Without removal, these pests can return yearly or even expand into other parts of your property.</p>

                <h3>Why Professional Removal Is Necessary</h3>
                <p>DIY nest removal can be extremely dangerous. Touchdown Pest Control uses protective equipment, specialized tools, and expert techniques to eliminate nests safely. Our treatments are designed to neutralize active colonies and prevent regrowth. Whether it's a beehive relocation or hornet extermination, we tailor our services to ensure complete safety and lasting protection.</p>

                <h3>Preventing Future Infestations</h3>
                <ul>
                    <li>Seal gaps in siding, soffits, and vents</li>
                    <li>Remove fallen fruit, sugary spills, and trash from outdoor spaces</li>
                    <li>Inspect attics, sheds, and rooflines regularly</li>
                    <li>Install fine mesh screens over vents and chimneys</li>
                    <li>Limit outdoor lighting that attracts insects</li>
                </ul>

                <h3>When to Call a Professional</h3>
                <p>Never attempt to spray or knock down a wasp or hornet nest yourself. If you notice heightened insect activity or a visible nest near your home, contact Touchdown Pest Control. Our expert team will assess the situation and safely remove the threat—giving you peace of mind and a sting-free property.</p>
            </div>
        </div>
    </div>
</div>
            </div>
</section>





<?php 

get_footer();

?>