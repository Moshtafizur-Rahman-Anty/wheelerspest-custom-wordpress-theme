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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/blog.png" alt="commercial">
                    </div>
                    <div class="col-sm-7 banner_innerpage_image">
                        <div class="banner_innerpage_image_inner">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/blog.png" alt="commercial">
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-sm-5 banner_innerpage_content">
                            <div class="banner_innerpage_contentinner">
                                <div>BLogs</div>
                                <p>Stay ahead of the pests with expert tips and insights from the Touchdown playbook—your guide to a pest-free environment.
</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

  <!--Blog-->
<div class="backgroundoverall blogpge">
    <div class="blogown_wrapper" data-aos="fade-up">
        <div class="col-sm-12 blogown_latest">
            <div class="container">
                <div class="col-sm-12 blogown_title">
                    <h1>Latest Blog Posts & Updates</h1>
                </div>

                <?php
                $all_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1
                ));

                if ($all_posts->have_posts()) :
                    $count = 0;
                    while ($all_posts->have_posts()) : $all_posts->the_post();
                        $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $link = get_permalink();
                        $title = get_the_title();
                        $excerpt = get_the_excerpt();
                        $date = get_the_date('M<br>d');
                        $year = get_the_date('Y');

                        // Open row every 3 posts
                        if ($count % 3 === 0) {
                            echo '<div class="col-sm-12 blogown_firstblk">';
                        }
                ?>

                    <div class="col-sm-4 blogown_firstblk_single">
                        <div class="blogown_firstblk_single_inner">
                            <div class="blogown_firstblk_single_image">
                                <a href="<?php echo esc_url($link); ?>">
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>">
                                </a>
                                <div class="blogown_firstblk_single_date">
                                    <span><?php echo $date; ?></span>
                                    <strong><?php echo esc_html($year); ?></strong>
                                </div>
                            </div>
                            <div class="blogown_firstblk_single_content">
                                <a href="<?php echo esc_url($link); ?>">
                                    <h4><?php echo esc_html($title); ?></h4>
                                </a>
                                <p><?php echo wp_trim_words($excerpt, 20); ?></p>
                                <a href="<?php echo esc_url($link); ?>" class="blogreadown">Read More</a>
                            </div>
                        </div>
                    </div>

                <?php
                        $count++;
                        // Close row after 3 posts OR if it's the last post
                        if ($count % 3 === 0 || $count === $all_posts->post_count) {
                            echo '</div>'; // Close .blogown_firstblk
                        }
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </div>
</div>


        </section> 


<?php

get_footer();

?>