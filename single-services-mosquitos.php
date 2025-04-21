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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/mosquitos.jpg" alt="Mosquito Control Experts">
                    </div>
                </div>
                <div class="first_content">
                    <h1>Mosquito Control & Extermination Services</h1>
                    <p>
                        Are buzzing mosquitoes ruining your outdoor time or keeping you up at night? These pests aren’t just annoying—they can also carry dangerous diseases. At <a href="#">Touchdown Pest Control</a>, we offer targeted mosquito control services to protect your family and improve your comfort. Learn what attracts mosquitoes, how to recognize signs of infestation, and why professional mosquito removal is the most effective long-term solution.
                    </p>
                </div>
                <div class="second_content">
                    <h3>Common Mosquito Species Around Homes</h3>
                    <p>Mosquitoes vary by species, but they all thrive in warm, humid environments. Understanding which species you’re dealing with can help determine the most effective strategy:</p>
                    <ul>
                        <li><strong>Culex Mosquitoes:</strong> These mosquitoes are known carriers of West Nile Virus. They usually breed in stagnant water and are most active at dusk and dawn.</li>
                        <li><strong>Aedes Mosquitoes:</strong> Recognizable by their black-and-white markings, these aggressive biters are active during the day and can transmit Zika, Dengue, and Chikungunya.</li>
                        <li><strong>Anopheles Mosquitoes:</strong> Known for transmitting malaria in some parts of the world. Though less common, they’re still found in certain environments and require immediate action.</li>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/mosquitos-2.jpg" alt="Mosquito Control Experts">
                    </div>
                </div>
                <div class="second_content">
                    <h3>What Attracts Mosquitoes to Your Property</h3>
                    <p>Mosquitoes are drawn to specific conditions that make your home or yard a perfect breeding ground. Here's what brings them in:</p>
                    <ul>
                        <li><strong>Standing Water:</strong> Birdbaths, clogged gutters, buckets, and even potted plant trays can hold water where mosquitoes lay their eggs.</li>
                        <li><strong>Humidity & Shade:</strong> Dense shrubs, tall grass, and damp areas provide the perfect shelter for mosquitoes during the day.</li>
                        <li><strong>Carbon Dioxide & Body Heat:</strong> Mosquitoes use scent and body heat to find hosts, making humans and pets prime targets.</li>
                    </ul>
                    <p>At Touchdown Pest Control, we implement a combination of larvicide treatments, fogging, and habitat modification to break the mosquito life cycle and reduce population levels significantly—fast.</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-ants-last.png" alt="Mosquito Control Specialists">
                    </div>
                </div>

                <div class="last_bfre">
                    <h2>How to Prevent Mosquito Infestations Around Your Property</h2>
                    <p>Mosquitoes are more than a nuisance—they pose real health risks by transmitting diseases. Touchdown Pest Control recommends these proven strategies to help prevent mosquito breeding and keep your outdoor spaces safe and enjoyable:</p>
                    <ul>
                        <li><strong>Eliminate Standing Water:</strong> Mosquitoes breed in stagnant water. Regularly empty flower pots, birdbaths, clogged gutters, buckets, and any outdoor containers where water may collect.</li>
                        <li><strong>Maintain Your Lawn & Landscaping:</strong> Trim grass, weeds, and overgrown bushes regularly. Mosquitoes rest in tall grass and shady, humid areas during the day.</li>
                        <li><strong>Use Screens & Seal Entry Points:</strong> Ensure windows and doors have intact screens. Seal any gaps to prevent mosquitoes from entering your home.</li>
                        <li><strong>Install Outdoor Fans:</strong> Mosquitoes are weak fliers. Installing fans in patios or porches can help keep them away from outdoor seating areas.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 commercial_lastbottom">
        <div class="container">
            <div class="fourth_content">
                <h3>The Benefits of Ongoing Mosquito Control Services</h3>
                <p>DIY sprays and repellents provide only temporary relief. Professional mosquito control ensures long-lasting protection. Here’s why Touchdown Pest Control is trusted for mosquito extermination:</p>
                <ul>
                    <li><strong>Targeted Treatment:</strong> Our technicians identify mosquito breeding zones and apply safe, effective treatments that eliminate both larvae and adult mosquitoes.</li>
                    <li><strong>Eco-Conscious Solutions:</strong> We use family- and pet-safe methods to control mosquito populations without harming beneficial insects or the environment.</li>
                    <li><strong>Preventative Monitoring:</strong> Routine inspections help detect new breeding activity early and stop infestations before they spread.</li>
                    <li><strong>Improved Comfort & Safety:</strong> Our services reduce bite frequency, minimize disease risk, and make your outdoor spaces more comfortable year-round.</li>
                </ul>
            </div>
        </div>
    </div>
</div>






<?php 

get_footer();

?>