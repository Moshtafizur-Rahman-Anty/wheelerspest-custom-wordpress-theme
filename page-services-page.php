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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Rodents">
                    </div>
                    <div class="col-sm-7 banner_innerpage_image">
                        <div class="banner_innerpage_image_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/cover-services.webp" alt="Rodents">
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-5 banner_innerpage_content">
                            <div class="banner_innerpage_contentinner">
                            <div><?php the_title(); ?></div>
                            <p>We’re committed to delivering effective, tailored pest control—with a smart game plan built around your property</p>
                                <div class="banner_btn innerpagebtn">
                                <a href="tel:626-966-5600" class="learnmore" tabindex="0">626-966-5600</a>
                                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="scheduleonline" tabindex="0">Schedule Online</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Service-->
            <div class="serviceown_section" data-aos="fade-up">
                <div class="col-sm-12 serviceown_hle">
                    <div class="col-sm-12 serviceown_firstsect">
                        <div class="container">
                            <div class="col-sm-7 serviceown_firstimage">
                                <div class="serviceown_firstimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/rodents.jpg" alt="Rodents">
                                </div>
                            </div>
                            <div class="col-sm-6 serviceown_firstcontent">
                                <div class="serviceown_firstcontent_inner">
                                    <a href="<?php echo esc_url(home_url('/services/rodents')); ?>">
                                        <h1>Rodents</h1>
                                    </a>
                                    <p>Rodents like rats and mice are more than just a nuisance—they can cause severe property damage, contaminate food, and spread dangerous diseases. Our rodent control services in Southern California are designed to quickly eliminate infestations and prevent future entry. If you’re hearing scratching noises, noticing droppings, or finding gnawed materials, don’t wait. We provide effective rat and mice extermination using proven strategies to protect your home or business.</p>
                                    <div class="banner_btn abt_btn beeremoval_btn">
                                        <a href="https://wheelerspestcontrol.com/bed-bugs" class="learnmore">Learn More</a>
                                        <a href="#" class="scheduleonline">Schedule Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 serviceown_secondsect">
                        <div class="container">
                            <div class="col-sm-7 serviceown_secondimage">
                                <div class="serviceown_secondimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/ants.jpg" alt="Ants">
                                </div>
                            </div>
                            <a href="<?php echo esc_url(home_url('/services/ants')); ?>">
                                <h4>Ants</h4>
                            </a>
                            <p>Ant infestations can escalate rapidly, especially in kitchens and bathrooms where moisture and food are present. At Touchdown Pest Control, we provide professional ant removal and treatment that targets the colony at its source. Whether you’re dealing with Argentine ants, carpenter ants, or pavement ants, our customized ant control services will help eliminate them effectively and stop them from coming back.</p>
                            <div class="banner_btn abt_btn beeremoval_btn">
                                <a href="<?php echo esc_url(home_url('/services/ants')); ?>" class="learnmore">Learn More</a>
                                <a href="#" class="scheduleonline">Schedule Online</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 serviceown_thirdsect">
                        <div class="container">
                            <div class="col-sm-6 serviceown_thirdimage">
                                <div class="serviceown_thirdimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/bees.png" alt="Bees">
                                </div>
                            </div>
                            <a href="<?php echo esc_url(home_url('/services/bees-wasps-hornets')); ?>">
                                <h4>Bees, Wasps & Hornets</h4>
                            </a>
                            <p>Bees, wasps, and hornets can be aggressive and dangerous when nesting near homes or businesses. Our expert bee and wasp removal service ensures safe, humane, and thorough relocation or extermination of hives and nests. We assess the level of threat and implement eco-friendly methods to prevent re-infestation while protecting your family or customers from painful stings and allergic reactions.</p>
                            <div class="banner_btn abt_btn beeremoval_btn">
                                <a href="<?php echo esc_url(home_url('/services/bees-wasps-hornets')); ?>" class="learnmore">Learn More</a>
                                <a href="#" class="scheduleonline">Schedule Online</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 serviceown_firstsect fourthservice">
                        <div class="container">
                            <div class="col-sm-7 serviceown_firstimage">
                                <div class="serviceown_firstimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/termites.jpg" alt="termites">
                                </div>
                            </div>
                            <div class="col-sm-6 serviceown_firstcontent">
                                <div class="serviceown_firstcontent_inner">
                                    <a href="<?php echo esc_url(home_url('/services/termites')); ?>">
                                        <h4>Termites</h4>
                                    </a>
                                    <p>Termites silently cause thousands of dollars in structural damage before most homeowners even notice them. Our advanced termite control services include inspection, treatment, and long-term protection for your property. Whether you're a homeowner or managing commercial property, Touchdown Pest Control uses proven solutions to detect, eliminate, and prevent future termite infestations.</p>
                                    <div class="banner_btn abt_btn beeremoval_btn">
                                        <a href="<?php echo esc_url(home_url('/services/termites')); ?>" class="learnmore">Learn More</a>
                                        <a href="#" class="scheduleonline">Schedule Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 serviceown_secondsect fiifthservice">
                        <div class="container">
                            <div class="col-sm-7 serviceown_secondimage">
                                <div class="serviceown_secondimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/red_bugs.png" alt="red bugs">
                                </div>
                            </div>
                            <a href="<?php echo esc_url(home_url('/services/bed-bugs')); ?>">
                                <h4>Bed Bugs</h4>
                            </a>
                            <p>Bed bugs are notoriously difficult to eliminate without professional help. These tiny insects hide in cracks and crevices and come out at night to feed. Our bed bug removal services use cutting-edge technology to detect and exterminate infestations at all life stages. Say goodbye to sleepless nights—our experienced technicians will restore comfort and safety to your home.</p>
                            <div class="banner_btn abt_btn beeremoval_btn">
                                <a href="<?php echo esc_url(home_url('/services/bed-bugs')); ?>" class="learnmore">Learn More</a>
                                <a href="#" class="scheduleonline">Schedule Online</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 serviceown_hle">
                    <div class="col-sm-12 serviceown_firstsect">
                        <div class="container">
                            <div class="col-sm-7 serviceown_firstimage">
                                <div class="serviceown_firstimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/wild_life.png" alt="red bugs">
                                </div>
                            </div>
                            <div class="col-sm-6 serviceown_firstcontent">
                                <div class="serviceown_firstcontent_inner">
                                    <a href="<?php echo esc_url(home_url('/services/wildlife-control')); ?>">
                                        <h4>Wildlife Control</h4>
                                    </a>
                                    <p>Wild animals like raccoons, squirrels, and opossums often invade attics, basements, and crawl spaces in search of shelter. Our humane wildlife control services focus on safe trapping, removal, and exclusion techniques to keep your property secure. Prevent structural damage and protect your family from potential health hazards with our professional wildlife management solutions.</p>
                                    <div class="banner_btn abt_btn beeremoval_btn">
                                        <a href="<?php echo esc_url(home_url('/services/wildlife-control')); ?>" class="learnmore">Learn More</a>
                                        <a href="#" class="scheduleonline">Schedule Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 serviceown_secondsect">
                        <div class="container">
                            <div class="col-sm-7 serviceown_secondimage">
                                <div class="serviceown_secondimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/spider.jpg" alt="red bugs">
                                </div>
                            </div>
                            <a href="<?php echo esc_url(home_url('/services/spiders')); ?>">
                                <h4>Spiders</h4>
                            </a>
                            <p>While most spiders are harmless and even beneficial in gardens, some species can pose serious health risks when found indoors. Touchdown Pest Control offers targeted spider removal and control services that address infestations without harming the ecosystem. Let us help you maintain a safe, spider-free environment in your home or workplace.</p>
                            <div class="banner_btn abt_btn beeremoval_btn">
                                <a href="<?php echo esc_url(home_url('/services/spiders')); ?>" class="learnmore">Learn More</a>
                                <a href="#" class="scheduleonline">Schedule Online</a>
                            </div>
                        </div>
                    </div>




                    <div class="col-sm-12 serviceown_thirdsect">
                        <div class="container">
                            <div class="col-sm-6 serviceown_thirdimage">
                                <div class="serviceown_thirdimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/pest-control.jpg" alt="red bugs">
                                </div>
                            </div>
                            <a href="<?php echo esc_url(home_url('/residential')); ?>">
                                <h4>Pest Control</h4>
                            </a>
                            <p>Whether you're dealing with signs of bed bugs or hearing the scurrying of rodents in your attic, pests have a way of invading where they’re least expected. When unwanted intruders show up, trust Touchdown Pest Control for fast, effective pest control services in Winchester, California. Our experienced team ensures your home or business is protected with proven solutions. Many common pests are experts at staying hidden, often establishing infestations long before you notice the signs. By the time droppings, gnaw marks, or strange odors appear, serious damage may already be done. Routine inspections by licensed pest control professionals can help detect early infestations and identify structural vulnerabilities before they escalate.</p>
                            <div class="banner_btn abt_btn beeremoval_btn">
                                <a href="<?php echo esc_url(home_url('/residential')); ?>" class="learnmore">Learn More</a>
                                <a href="#" class="scheduleonline">Schedule Online</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 serviceown_firstsect fourthservice">
                        <div class="container">
                            <div class="col-sm-7 serviceown_firstimage">
                                <div class="serviceown_firstimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/mosquitos.jpg" alt="red bugs">
                                </div>
                            </div>
                            <div class="col-sm-6 serviceown_firstcontent">
                                <div class="serviceown_firstcontent_inner">
                                    <a href="<?php echo esc_url(home_url('/services/mosquitos')); ?>">
                                        <h4>Mosquitos</h4>
                                    </a>
                                    <p>Mosquitoes are more than annoying—they’re carriers of dangerous diseases like West Nile virus and Zika. Our mosquito control treatments reduce breeding sites, treat hotspots, and provide lasting protection for your yard or business property. Reclaim your outdoor space with Touchdown safe and effective mosquito extermination services.</p>
                                    <div class="banner_btn abt_btn beeremoval_btn">
                                        <a href="<?php echo esc_url(home_url('/services/mosquitos')); ?>" class="learnmore">Learn More</a>
                                        <a href="#" class="scheduleonline">Schedule Online</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 serviceown_secondsect fiifthservice">
                        <div class="container">
                            <div class="col-sm-7 serviceown_secondimage">
                                <div class="serviceown_secondimage_inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/roaches.jpg" alt="red bugs">
                                </div>
                            </div>
                            <a href="<?php echo esc_url(home_url('/services/roaches')); ?>">
                                <h4>Roaches</h4>
                            </a>
                            <p>Cockroaches are resilient, fast breeders, and notorious for spreading bacteria and allergens. At Touchdown Pest Control, we tackle roach infestations with powerful treatments and preventative strategies. Our services are designed to eliminate all hiding spots and breeding grounds, ensuring a clean and safe living environment for your family or employees.</p>
                            <div class="banner_btn abt_btn beeremoval_btn">
                                <a href="<?php echo esc_url(home_url('/services/roaches')); ?>" class="learnmore">Learn More</a>
                                <a href="#" class="scheduleonline">Schedule Online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section> 



<?php

get_footer();

?>