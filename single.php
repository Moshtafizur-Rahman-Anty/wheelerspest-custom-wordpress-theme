 <!--Header Section-->

<?php get_header(); ?>


            <!-- banner-section -->
            <svg class="svg">
                <clipPath id="banner_inner" clipPathUnits="objectBoundingBox">
                    <path d="M0.407,0.002 H1 L0.999,1 H0.378 C0.353,1,0.336,0.986,0.331,0.979 L0.319,0.963 L0.019,0.547 C0.009,0.533,0.004,0.523,0.004,0.52 C-0.003,0.49,0.007,0.471,0.012,0.466 L0.139,0.289 L0.328,0.027 C0.344,0.006,0.367,0.001,0.377,0.002 H0.407"></path>
                </clipPath>
            </svg>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="banner_innerpage_wrapper">
    <div class="col-sm-12 banner_innerpage_hle">
        <div class="col-sm-12 banner_innerpage_background">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/default-banner.jpg" alt="Default Banner">
            <?php endif; ?>
        </div>
        <div class="col-sm-7 banner_innerpage_image">
            <div class="banner_innerpage_image_inner">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-5 banner_innerpage_content servicedetail_banner">
                <div class="banner_innerpage_contentinner">
                    <div><?php the_title(); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mosquitoes_overall blogdetailpage" style="padding: 80px 0; background-color: #f4f6f8;">
    <div class="container" style="max-width: 1280px; margin: 0 auto; padding: 0 24px;">
        <div class="row" data-aos="fade-up" style="display: flex; justify-content: center;">

            <!-- Main Content -->
            <main class="col-lg-8" style="flex: 0 0 100%; max-width: 1100px;">
                <div style="
                    background-color: #ffffff;
                    padding: 50px 40px;
                    border-radius: 20px;
                    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
                    transition: all 0.3s ease-in-out;
                ">
                    <div class="first_content" style="
                        font-family: 'Inter', 'Segoe UI', sans-serif;
                        font-size: 20px;
                        color: #2e2e2e;
                        line-height: 1.8;
                        letter-spacing: 0.3px;
                        word-break: break-word;
                    ">
                        <?php the_content(); ?>
                    </div>
                </div>
            </main>

        </div>
    </div>
</div>





<?php endwhile; else : ?>
    <div class="container">
        <h2>Post Not Found</h2>
        <p>Sorry, the content you're looking for isn't available.</p>
    </div>
<?php endif; ?>

<br><br><hr><br>
<br><br><br><br>
        
            

<!--service-->
<div class="service_hme_wrapper" data-aos="fade-up" style="margin-top: 50px;">
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

        </section>

        <?php get_footer(); ?>