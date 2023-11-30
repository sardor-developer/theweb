<?php get_header(); ?>
<!-- Banner Part Start -->
<section class="banner-3-part">
    <div class="swiper-container banner-slider-3"
         data-swiper-config='{"loop": true, "effect": "fade", "speed": 800, "autoplay": 5000, "paginationClickable": true ,"crossFade" : true }'>
        <div class="swiper-wrapper">
			<?php $slider_banner = new WP_Query( array( 'post_type' => 'slider_banner', 'posts_per_page' => - 1 ) ); ?>
			<?php if ( $slider_banner->have_posts() ) : while ( $slider_banner->have_posts() ) : $slider_banner->the_post(); ?>
                <!-- Single Slider -->
                <div class="swiper-slide banner-3-item" data-bg-image="<?php the_post_thumbnail_url(); ?>">
                    <div class="container">
                        <div class="row d-flex">
                            <div class="col-xl-7 col-md-6">
                                <div class="banner-caption text-left">
                                    <h2 class="brand-color"><?php the_field( 'brand_name' ) ?></h2>
                                    <h1 class="text-left"><?php the_title(); ?></h1>
									<?php the_content(); ?>
                                    <a href="#">FREE CONSULTATION</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
			<?php endwhile; endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <div class="banner-overlay-form">
        <div class="container">
            <div class="row">
                <div class="banner-contact">
                    <h2 class="brand-color"><span class="secondary-color">FREE</span>CONSULTATION</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<?php echo do_shortcode( "[contact-form-7 id='ff581af' title='Contact form 1']" ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Part End -->

<!-- About Part Start -->
<section class="about-3-part section-p">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-head">
                    <h2>Why Us</h2>
                    <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        unknown printer took a quis nostrud exercitatliquip.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-5 col-xl-6">
                <div id="accordion" class="about-accodian">
					<?php
					$why_us = new WP_Query( array( 'post_type' => 'why_us', 'posts_per_page' => - 1 ) );
					if ( $slider_banner->have_posts() ) :
						$counter = 1;
						while ( $why_us->have_posts() ) :
							$why_us->the_post();
							$accordion_id = 'collapse' . $counter;
							?>
                            <!-- Single Accordion -->
                            <div class="accodian-item">
                                <div class="accodian-head <?php echo ( $counter === 1 ) ? 'active' : ''; ?> d-flex align-items-center">
                                    <h5><a class="<?php echo ( $counter === 1 ) ? '' : 'collapsed'; ?>" href="#"
                                           data-toggle="collapse" data-target="#<?php echo $accordion_id; ?>"
                                           aria-expanded="<?php echo ( $counter === 1 ) ? 'true' : 'false'; ?>"
                                           aria-controls="<?php echo $accordion_id; ?>"><?php the_title(); ?></a></h5>
                                </div>
                                <div id="<?php echo $accordion_id; ?>"
                                     class="accodian-result collapse <?php echo ( $counter === 1 ) ? 'show' : ''; ?>"
                                     data-parent="#accordion">
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
							<?php $counter ++; endwhile;
						wp_reset_postdata(); endif; ?>

                </div>
            </div>
            <div class="col-md-12 col-lg-5  col-xl-6">
                <div class="about-3">
                    <div class="about-3-1">
                        <div data-relative-input="true" id="about-3-1">
                            <div data-depth="0.4"><img
                                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-3-1.jpg' ); ?>"
                                        alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Part End -->

<!-- Service Part Start -->
<section class="practise-3-part section-p pad-bot-50">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-head">
                    <h2>Our Service</h2>
                    <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        unknown printer took a quis nostrud exercitatliquip.</p>
                </div>
            </div>
        </div>

        <div class="row">
			<?php $services = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => - 1 ) ); ?>
			<?php if ( $services->have_posts() ) : while ( $services->have_posts() ) : $services->the_post(); ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="practise-3-item">
                        <div class="icon-box"><i class="fa <?php echo the_field( 'services_icon' ) ?>"></i></div>
                        <h5><a href="#"><?php the_title(); ?></a></h5>
						<?php the_content(); ?>
                        <a href="#">→</a>
                    </div>
                </div>
			<?php endwhile; endif; ?>
        </div>

    </div>
</section>
<!-- Service Part End -->

<!-- Team-2 Part Start -->
<section class="team-2-part section-p bg_dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-head">
                    <h2>Our Consultant</h2>
                    <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        unknown printer took a quis nostrud exercitatliquip.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-container team-3-slider"
                     data-swiper-config='{"loop": true, "effect": "slide", "speed": 800, "autoplay": 5000, "paginationClickable": true,"slidesPerView" : 3 ,"spaceBetween": 30,"breakpoints": { "500": { "slidesPerView": 1},"768": { "slidesPerView": 2 }}}'>
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
						<?php $teams = new WP_Query( array( 'post_type' => 'teams', 'posts_per_page' => - 1 ) ); ?>
						<?php if ( $teams->have_posts() ) : while ( $teams->have_posts() ) : $teams->the_post(); ?>
                            <!-- Single Exprt Slider  -->
                            <div class="swiper-slide">
                                <div class="team-2-item text-center">
                                    <div class="team-2-img">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        <div class="team-2-social">
                                            <ul>
                                                <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                                                <li><a href="#"><i class='fa fa-twitter'></i></a></li>
                                                <li><a href="#"><i class='fa fa-instagram'></i></a></li>
                                                <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-2-des">
                                        <h4><?php the_title(); ?></h4>
										<?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Exprt Slider  -->
						<?php endwhile; endif; ?>


                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team-2 Part End -->

<!-- Counter-3 Part Start -->
<section class="counter-3-part section-p">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-head light">
                    <h2>Our Experience</h2>
                    <p>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        unknown printer took a quis nostrud exercitatliquip.</p>
                </div>
            </div>
        </div>
        <div class="row">
			<?php $counter = new WP_Query( array( 'post_type' => 'counter', 'posts_per_page' => - 1 ) ); ?>
			<?php if ( $counter->have_posts() ) : while ( $counter->have_posts() ) : $counter->the_post(); ?>
                <!-- Single Counter -->
                <div class="col-md-3 col-6 text-center">
                    <div class="counter-3-item">
                        <div class="number-box">
                            <i class="fa <?php echo the_field( 'counter_icon' ) ?>"></i>
                        </div>
                        <h2 class="white counter"><?php the_field( 'counter' ) ?></h2>
                        <h3 class="font-size-16"><?php the_title(); ?></h3>
                    </div>
                </div>
                <!-- Single Counter -->
			<?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- Counter-3 Part End -->

<?php get_footer(); ?>
