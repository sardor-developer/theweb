<!-- Footer Part Start -->
<footer class="footer-part footer-bg-light">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <!-- Single widget-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							if ( $custom_logo_id ) {
								$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
								echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '">';
							} else {
								echo '<span class="blog-name">' . get_bloginfo( 'name' ) . '</span>';
							}
							?>
                        </a>
                        <p>Lorem Ipsum is simply dumy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard.Ipsum is simply dumy text of the printing and typesetting
                            industry.</p>
                        <ol class="flat-list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ol>
                    </div>
                </div>
                <!-- Single widget-->
                <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-sm-0">
                    <div class="footer-widget-item">
						<?php dynamic_sidebar( 'right_sidebar' ); ?>
                    </div>
                </div>
                <!-- Single widget-->
                <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                    <div class="footer-widget-item">
	                    <?php dynamic_sidebar( 'right_sidebar' ); ?>
                    </div>
                </div>
                <!-- Single widget-->
                <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                    <div class="footer-widget-item">
                        <h3>Open Time</h3>
                        <ul class="footer-widget-office-time">
                            <li>
                                <p>Opening Day:</p>
                                <p>Monday - Friday: 9am to 7pm</p>
                                <p>Saturday: 8am to 6pm</p>
                            </li>
                            <li>
                                <p>Vacation:</p>
                                <p>All Sunday Day</p>
                                <p>All Vacation Holiday</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Copy right Start -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p>Copyright ©<span> 2018</span> | All rights reserved | Imgra by <a href="http://themeim.com/">ThemeIM</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copy right End -->

</footer>

<div class="backtotop">
    <i class="fa fa-angle-up backtotop_btn"></i>
</div>

<?php wp_footer(); ?>
</body>

</html>