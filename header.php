<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <title>Imgra-Business cunsultancy and Immigration Agency Template</title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav-icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav-icons/favicon-16x16.png">

	<?php wp_head(); ?>
</head>

<body class="home-3">
<!-- Preloader Start-->
<div id="loader-wrapper">
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>
</div><!-- Preloader end-->
<!-- Header Part Start -->
<header class="header-part bg-white header-two">
    <div class="container">
        <div class="row d-sm-flex align-items-sm-center">
            <div class="col-lg-4 col-md-4 col-6 text-center text-sm-left">
                <div class="header-item">
                    <p class="pl-0"><i class="fa fa-phone"></i> <span class="d-none d-md-inline-block">Phone: </span><a
                                href="tel:<?php pll_e( 'tel' ); ?>"> <?php pll_e( 'tel' ); ?></a></p>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 text-center d-none d-md-inline-block">
                <div class="header-item">
                    <p><i class="fa fa-clock-o"></i> <span class="d-none d-lg-inline-block">We are open: </span>Mn-Fr:
                        10 am-8 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 text-right">
                <div class="header-icon">
                    <ul class="flat-list social-icon d-inline-block">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Part End -->
<!-- Navigation Part Start -->
<nav id="navigation" class="navbar navbar-expand-lg nav-bg-white">
    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
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


        <div class="collapse navbar-collapse" id="nav-list">
			<?php wp_nav_menu( [
				'theme_location' => 'top',
				'container'      => false,
				'menu_class'     => 'navbar-nav ml-auto',
			] ); ?>
        </div>
        <button class="second-nav-toggler" type="button">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/menu.png' ); ?>" alt="">
        </button>
    </div>
</nav>
<!-- mobile manu  -->
<div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
    <div class="mobile-nav-box">
        <div class="mobile-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-main-logo">
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
            <a href="#" class="manu-close"><img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cancel.png' ); ?>"
                        alt=""></a>
        </div>
		<?php wp_nav_menu( [
			'theme_location' => 'top',
			'container'      => false,
			'menu_class'     => 'mobile-list-nav',
		] ); ?>
        <div class="achivement-blog">
            <ul class="flat-list">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                        <h6>Facebook</h6>
                        <span class="counter">12546</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                        <h6>Twiter</h6>
                        <span class="counter">12546</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-pinterest"></i>
                        <h6>Pinterest</h6>
                        <span class="counter">12546</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Navigation Part End -->