<?php get_header(); ?>


<!-- banner-section -->
<div class="banner_hme_section">
    <div class="col-sm-12 banner_hme_slic">
        <div class="col-sm-12 banner_hme_single">
            <div class="col-sm-12 banner_hme_image">
                <?php
                $slider_image = get_field('slider_1_image');
                if ($slider_image) {
                    echo '<img src="' . esc_url($slider_image) . '" alt="Pest Service in San Diego & Riverside Counties">';
                } else {
                    echo '<img src="https://wheelerspestcontrol.com/images/banner/1724713429banner-13.webp" alt="Pest Service in San Diego & Riverside Counties">';
                }
                ?>
            </div>
            <div class="container">
                <div class="col-sm-5 banner_hme_content">
                    <div class="banner_hme_content_inner">
                        <div>
                            <?php
                            $title    = get_field('slider_1_title');
                            echo $title ? esc_html($title) : 'Pest Control';
                            ?>
                        </div>
                        <p>
                            <?php
                            $desc = get_field('slider_1_description');
                            echo $desc ? esc_html($desc) : 'We offer highly effective control solutions for dealing with rats, mice, and ground squirrels, which are among the most common and troublesome pests in the CA area.';
                            ?>
                        </p>
                        <div class="banner_btn">
                        <a href="<?php echo esc_url(home_url('/services-page')); ?>" class="learnmore">Learn More</a>
<a href="<?php echo esc_url(home_url('/contact')); ?>" class="scheduleonline">Schedule Online</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="col-sm-12 banner_hme_single">
            <div class="col-sm-12 banner_hme_image">
                <?php
                $slider_2_image = get_field('slider_2_image');
                $slider_2_image = $slider_2_image ?: 'https://wheelerspestcontrol.com/images/banner/1724689049banner-7.webp';
                ?>
                <img src="<?php echo esc_url($slider_2_image); ?>" alt="Pest Service in San Diego & Riverside Counties">
            </div>
            <div class="container">
                <div class="col-sm-5 banner_hme_content">
                    <div class="banner_hme_content_inner">
                        <?php
                        $slider_2_title    = get_field('slider_2_title') ?: 'Get Rid Of Your Pests';
                        $slider_2_subtitle = get_field('slider_2_subtitle') ?: 'Today';
                        ?>
                        <div>
                            <?php echo esc_html($slider_2_title); ?> <span><?php echo esc_html($slider_2_subtitle); ?></span>
                        </div>
                        <p>
                            <?php
                            $slider_2_description = get_field('slider_2_description') ?: 'Have you got pest? We can help get rid of them professionally. We provide reliable residential and commercial pest control services in the area.';
                            echo esc_html($slider_2_description);
                            ?>
                        </p>
                        <div class="banner_btn">
                        <a href="<?php echo esc_url(home_url('/services-page')); ?>" class="learnmore">Learn More</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="scheduleonline">Schedule Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 banner_hme_single">
            <div class="col-sm-12 banner_hme_image">
                <?php
                $slider_3_image = get_field('slider_3_image');
                $slider_3_image = $slider_3_image ?: 'https://wheelerspestcontrol.com/images/banner/1724702843banner-11.webp';
                ?>
                <img src="<?php echo esc_url($slider_3_image); ?>" alt="Pest Service in San Diego & Riverside Counties">
            </div>
            <div class="container">
                <div class="col-sm-5 banner_hme_content">
                    <div class="banner_hme_content_inner">
                        <?php
                        $slider_3_title    = get_field('slider_3_title') ?: "WE ’RE NOT HAPPY";
                        $slider_3_subtitle = get_field('slider_3_subtitle') ?: "UNTIL YOU ’RE HAPPY";
                        ?>
                        <div>
                            <?php echo esc_html($slider_3_title); ?> <span></span>
                        </div>
                        <p>
                            <?php
                            $slider_3_description = get_field('slider_3_description') ?: "Our experienced pest control technicians provide the most reliable pest control service in the town. Call Wheeler's Pest Control now.";
                            echo esc_html($slider_3_description);
                            ?>
                        </p>
                        <div class="banner_btn">
                        <a href="<?php echo esc_url(home_url('/services-page')); ?>" class="learnmore">Learn More</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="scheduleonline">Schedule Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--Bannerbelow-->
<div class="bannerbelow_wrapper">
    <div class="col-sm-12 bannerbelow_hle">
        <div class="container">
            <div class="col-sm-12 bannerbelow_firstblck">
                <div class="col-sm-4 bannerbelow_single">
                    <div class="bannerbelow_single_inner">
                        <span class="icon-wrap">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>
                        <strong>Comprehensive Inspection & Evaluation</strong>
                    </div>
                </div>
                <div class="col-sm-4 bannerbelow_single">
                    <div class="bannerbelow_single_inner">
                        <span class="icon-wrap">
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                        </span>
                        <strong>Comprehensive Inspection & Evaluation</strong>
                    </div>
                </div>
                <div class="col-sm-4 bannerbelow_single">
                    <div class="bannerbelow_single_inner">
                        <span class="icon-wrap">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                        </span>
                        <strong>Ongoing Monitoring & Protection</strong>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 bannerbelow_secondblck">
                <div class="col-sm-4 bannerbelow_secondsingle">
                    <div class="bannerbelow_secondsingle_inner">
                        <span>1</span>
                        <p>Our certified professionals conduct a thorough inspection of your property to identify the type of the pest infestation.</p>
                    </div>
                </div>
                <div class="col-sm-4 bannerbelow_secondsingle">
                    <div class="bannerbelow_secondsingle_inner">
                        <span>2</span>
                        <p>We create and implement a tailored treatment plan using safe and effective methods to target and eliminate pests.</p>
                    </div>
                </div>
                <div class="col-sm-4 bannerbelow_secondsingle">
                    <div class="bannerbelow_secondsingle_inner">
                        <span>3</span>
                        <p>We provide follow-up visits to ensure complete eradication of the pests and prevent future infestations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!--professional-->
<div class="professional_hme" data-aos="fade-up">
    <div class="col-sm-12 professional_hme_inner">
        <div class="container">
            <div class="col-sm-6 professional_hme_image" data-aos="zoom-in">
                <div class="professional_hme_image_inner">
                    <a href="https://wheelerspestcontrol.com/home-pest-control">
                        <img width="630" height="800" src="<?php echo get_template_directory_uri(); ?>/images/services/pest-expert.png" alt="Pest Control">
                    </a>
                </div>
            </div>
            <h1>Strategic Pest Control for Homes & Businesses
            </h1>
<p>
Pests don’t stand a chance when you’ve got the right team in your corner. At Touchdown Pest Control, we take a playbook-style approach to pest management—combining expert strategy, strong defense, and quick execution.
</p>
<p>From ants and rodents to spiders and termites, we tackle infestations head-on using eco-conscious treatments and targeted solutions. It all starts with a detailed inspection, followed by a custom treatment plan built to shut pests down at the source.</p>
<p>
    Whether you're a homeowner, business owner, or property manager, pest issues can be persistent and costly. Touchdown Pest Control delivers tailored residential and commercial pest control services to ensure your property stays protected, healthy, and pest-free all year round.
</p>
            <div class="banner_btn abt_btn">
            <a href="<?php echo esc_url(home_url('/services-page'));?>" class="learnmore">Learn More</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="scheduleonline">Schedule Online</a>
            </div>
        </div>
    </div>
</div>


<!--service-->
<div class="service_hme_wrapper" data-aos="fade-up">
    <div class="col-sm-12 service_hme_hle">
        <div class="container">
            <div class="col-sm-12 service_hme_title couponshme_title">
                <h2>Pick Your Game Plan</h2> <h2>Choose the Right Service</h2>
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





<!--beeremoval-->
<div class="beeremoval_section" data-aos="fade-up">
    <div class="container">
        <div class="col-sm-7 beeremoval_image" data-aos="zoom-in">
            <div class="beeremoval_image_inner">
                <a href="https://wheelerspestcontrol.com/bee-removal">
                    <img width="735" height="630" src="<?php echo get_template_directory_uri(); ?>/images/services/bees-2.png" alt="Bee Rmoval Servie">
                </a>
            </div>
        </div>
        <h2>Bee Defense You Can Rely</h2>
<p>
Even the best teams need a solid defense—and when bees swarm too close to home, Touchdown Pest Control is ready to suit up. Whether it's a newly formed hive or a full-blown colony taking over your space, we bring strategy, precision, and control to the field.
</p>
<p>
Our certified technicians prioritize safe, eco-friendly solutions. Whenever possible, we go for relocation over extermination—protecting your property and the environment. We begin with a thorough inspection, then execute the best game plan using advanced tools or working with local beekeepers. If relocation isn’t an option, we apply long-term exclusion methods to prevent future swarms.
</p>
<p>Protect your space with the kind of defense that wins every time—schedule your bee control service today.</p>

        <div class="banner_btn abt_btn beeremoval_btn">
        <a href="<?php echo esc_url(home_url('/bees-wasps-hornets')); ?>" class="learnmore">Learn More</a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="scheduleonline">Schedule Online</a>
        </div>
    </div>
</div>



<!--pest-control-->
<div class="pestcontrol_wrapper" data-aos="fade-up">
    <div class="col-sm-12 pestcontrol_hle">
        <div class="container">
            <div class="col-sm-6 pestcontrol_image" data-aos="zoom-in">
                <div class="pestcontrol_image_inner">
                    <a href="https://wheelerspestcontrol.com/services">
                        <img width="1000" height="504"  src="<?php echo get_template_directory_uri(); ?>/images/services/commercial.png"  alt="Residential & Commercial Pest Service">
                    </a>
                </div>
            </div>
            <h2>RESIDENTIAL &amp;COMMERCIAL PEST SERVICES</h2>
            <p>
            At Touchdown Pest Control, we know that a strong defense starts at home. Our residential pest control services are built to protect both your family and your investment. Whether you need a one-time treatment or a year-round maintenance plan, we help keep your sanctuary pest-free with solutions tailored to your lifestyle.
            </p>
            <p>
            For businesses, pests can interfere with operations, safety, and reputation. From restaurants and offices to warehouses and retail spaces, we offer commercial pest services designed to meet the unique demands of your industry. Our team works discreetly, efficiently, and with the precision of a well-coached unit—so your business stays protected and compliant, without missing a beat.
            </p>
            <p>No matter the property size, we bring a game-ready strategy and proven tools to keep pests off your field—for good.</p>
            <div class="banner_btn abt_btn">
            <a href="<?php echo esc_url(home_url('/residential')); ?>" class="learnmore">Learn More</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="scheduleonline">Schedule Online</a>
            </div>
        </div>
    </div>
</div>



<!--Blog-->
<div class="bloghme_wrapper" data-aos="fade-up">
    <div class="col-sm-12 bloghme_hle">
        <div class="container">
            <div class="col-sm-12 bloghme_title">
                <h2>Latest Blog Posts & Updates</h2>
            </div>
            <div class="col-sm-12 bloghme_slic">

                <?php
                $latest_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 6
                ));

                if ($latest_posts->have_posts()):
                    while ($latest_posts->have_posts()): $latest_posts->the_post();
                        $date_day = get_the_date('d');
                        $date_month = get_the_date('M');
                        ?>
                        <div class="col-sm-4 bloghme_single" data-aos="zoom-in">
                            <div class="bloghme_single_inner">
                                <div class="bloghme_single_image">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="bloghme_single_cont">
                                    <div class="bloghme_single_date">
                                        <span><?php echo $date_month; ?><br><?php echo $date_day; ?></span>
                                    </div>
                                    <h4>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                </div>
                                <div class="bloghme_single_contsecond">
                                    <div class="bloghme_single_date">
                                        <span><?php echo $date_month; ?><br><?php echo $date_day; ?></span>
                                    </div>
                                    <div class="bloghme_single_contnew">
                                        <h4>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                                        <a class="bloglinkhme" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </div>
</div>





</div>
</section>
<!--footer-->
<?php get_footer(); ?>