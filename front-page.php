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
                            $subtitle = get_field('slider_1_subtitle');
                            echo $title ? esc_html($title) : 'Pest Control';
                            echo ' <span>' . ($subtitle ? esc_html($subtitle) : 'Solutions') . '</span>';
                            ?>
                        </div>
                        <p>
                            <?php
                            $desc = get_field('slider_1_description');
                            echo $desc ? esc_html($desc) : 'We offer highly effective control solutions for dealing with rats, mice, and ground squirrels, which are among the most common and troublesome pests in the CA area.';
                            ?>
                        </p>
                        <div class="banner_btn">
                            <a href="https://wheelerspestcontrol.com/services" class="learnmore">Learn More</a>
                            <a href="https://wheelerspestcontrol.com/contact" class="scheduleonline">Schedule Online</a>
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
                            <a href="https://wheelerspestcontrol.com/services" class="learnmore">Learn More</a>
                            <a href="https://wheelerspestcontrol.com/contact" class="scheduleonline">Schedule Online</a>
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
                            <?php echo esc_html($slider_3_title); ?> <span><?php echo esc_html($slider_3_subtitle); ?></span>
                        </div>
                        <p>
                            <?php
                            $slider_3_description = get_field('slider_3_description') ?: "Our experienced pest control technicians provide the most reliable pest control service in the town. Call Wheeler's Pest Control now.";
                            echo esc_html($slider_3_description);
                            ?>
                        </p>
                        <div class="banner_btn">
                            <a href="https://wheelerspestcontrol.com/services" class="learnmore">Learn More</a>
                            <a href="https://wheelerspestcontrol.com/contact" class="scheduleonline">Schedule Online</a>
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
                        <strong>Inspection and Assessment</strong>
                    </div>
                </div>
                <div class="col-sm-4 bannerbelow_single">
                    <div class="bannerbelow_single_inner">
                        <span class="icon-wrap">
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                        </span>
                        <strong>Customized Treatment &amp; Implementation</strong>
                    </div>
                </div>
                <div class="col-sm-4 bannerbelow_single">
                    <div class="bannerbelow_single_inner">
                        <span class="icon-wrap">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                        </span>
                        <strong>Follow-Up And Prevention</strong>
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
                        <img width="630" height="800" src="https://wheelerspestcontrol.com/images/blocks/1722866054abt.webp" alt="Pest Control">
                    </a>
                </div>
            </div>
            <h1>Professional Pest Control Services in San Diego &amp;Riverside Counties</h1>
            <p>
                Pests can cause an enormous amount of property damage and can even create health risks to your family or employees. Wheeler &rsquo;s Pest Control offers <a href="/pest-control-company-del-mar-ca">comprehensive pest control services</a>
                to tackle a wide variety of issues. From ants and rodents and spiders, we &rsquo;ve got you covered. Our team begins with an inspection of your property to help identify the type of pest and the extent of the infestation. Once we have a clear understanding of the situation, we develop a customized treatment plan that targets the pests at their source. We use the latest and most effective methods to remove your unwanted guests and prevent them from returning. We believe in <a href="/pest-control-company-encinitas-ca">proactive pest management</a>
                , so our team will work to address the underlying causes to avoid future infestations.
            </p>
            <p>Whether you own a home, run a business, or manage multiple properties, pests can be a persistent and expensive problem. Wheeler &rsquo;s Pest Control offers comprehensive pest services for residential and commercial clients so you can make sure that your property remains safe and comfortable.&nbsp;</p>
            <div class="banner_btn abt_btn">
                <a href="https://wheelerspestcontrol.com/services" class="learnmore">Learn More</a>
                <a href="https://wheelerspestcontrol.com/contact" class="scheduleonline">Schedule Online</a>
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





<!--beeremoval-->
<div class="beeremoval_section" data-aos="fade-up">
    <div class="container">
        <div class="col-sm-7 beeremoval_image" data-aos="zoom-in">
            <div class="beeremoval_image_inner">
                <a href="https://wheelerspestcontrol.com/bee-removal">
                    <img width="735" height="630" src="https://wheelerspestcontrol.com/images/blocks/1722866250beeremoval.webp" alt="Bee Rmoval Servie">
                </a>
            </div>
        </div>
        <h2>BEE REMOVAL AND BEE CONTROL SERVICES</h2>
        <p>
            Bees are central to the health of our ecosystem, but when they take up residence in or around your home, they can become a serious hazard. Whether it &rsquo;s a swarm that has recently settled or an established hive that &rsquo;s growing too close for comfort, Wheeler &rsquo;s <a href="/pest-control-company-carlsbad-ca">Pest Control</a>
            offers dependable bee removal and control services. We understand that bee removal requires a delicate touch.
        </p>
        <p>Our team is trained to handle bees safely and effectively, using methods that minimize harm to the bees while protecting your property. Whenever possible, we focus on relocation rather than extermination so we can do our part to preserve these important pollinators. Our bee removal process starts with a detailed assessment to locate the hive and determine the best course of action. Depending on the situation, we may use specialized equipment to remove the bees or work with local beekeepers to relocate them. In cases where removal isn &rsquo;t feasible, we provide ongoing control measures to keep the bees at bay. If you &rsquo;re dealing with a bee problem, let us handle it safely.</p>
        <div class="banner_btn abt_btn beeremoval_btn">
            <a href="https://wheelerspestcontrol.com/bee-removal" class="learnmore">Learn More</a>
            <a href="https://wheelerspestcontrol.com/contact" class="scheduleonline">Schedule Online</a>
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
                        <img width="504" height="865" src="https://wheelerspestcontrol.com/images/blocks/1722866347pedelimage.webp" alt="Residential & Commercial Pest Service">
                    </a>
                </div>
            </div>
            <h2>RESIDENTIAL &amp;COMMERCIAL PEST SERVICES</h2>
            <p>
                For homeowners, <a href="/pest-control-company-lake-elsinore-ca">our pest control services</a>
                are designed to protect your family and your investment. We understand that your home is your sanctuary, and we work hard to keep it free from pests that could cause damage or spread disease. Our residential services include everything from one-time treatments to ongoing maintenance plans, so you can choose the appropriate level of protection that suits your needs.
            </p>
            <p>
                For businesses, pests can affect your bottom line. Whether it &rsquo;s a restaurant, office, warehouse, or retail store, maintaining a pest-free environment is critical to your reputation and compliance with health regulations. Wheeler &rsquo;s Pest Control provides <a href="/pest-control-company-menifee-ca">commercial pest services</a>
                that are customized to the unique challenges of your industry. We work discreetly and efficiently to take care of any pest issues without disrupting your operations. No matter the size or type of property, Wheeler &rsquo;s Pest Control has the experience to handle it all. We use advanced techniques to deliver results that last.&nbsp;
            </p>
            <div class="banner_btn abt_btn">
                <a href="https://wheelerspestcontrol.com/services" class="learnmore">Learn More</a>
                <a href="https://wheelerspestcontrol.com/contact" class="scheduleonline">Schedule Online</a>
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