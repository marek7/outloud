<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
	</head>
    <body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">
            <?php /*

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
            */
            ?>    

            <?php                 
                if (have_rows('header')):?>    
                <div class="container">            
                    <?php while( have_rows('header') ): the_row(); 
                    
                    //vars
                    $logo = get_sub_field('logo');         
                    $button = get_sub_field('contact_btn');

                    ?>
                    <div class="logo">
                        <img src="<?php echo $logo['url']; ?>"/>
                    </div>                   

                        <?php if (have_rows('contact')) : ?>
                        <ul class="number-container">
                            <?php while (have_rows('contact')) : the_row();

                                $icon = get_sub_field('icon');
                                $app = get_sub_field('app');
                                $number = get_sub_field('number');
                            ?>
                            <li>
                                <span class="app-name"><?php echo $app . ':'; ?></span>
                                <div class="border">
                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                    <span class="app-num"><?php  echo $number; ?></span>
                                </div>
                            <?php endwhile; ?>   
                        </ul>
                        <?php endif; ?>

                        <?php if (have_rows('social')): ?>

                        <ul class="social">
                            <?php while (have_rows('social')) : the_row(); 

                                $social_icon = get_sub_field('social_icon');
                                $social_link = get_sub_field('social_link');?>

                                <li>
                                    <a href="<?php echo $social_link['url']; ?>" target="<?php echo $social_link['target']; ?>"><img src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt']; ?>"></a>
                                </li>

                            <?php endwhile; ?>  
                        </ul>

                        <?php endif; ?>

                        <div class="contact">

                            <a class="button" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
                            
                        </div>

                    <?php endwhile; ?>                    
                </div>
            <?php endif; ?>                   
            
			</header>
            <!-- /header -->
            
        <!-- wrapper -->
        <div class="wrapper">
<?php 
/*
<!-- Marka icon example. Only awailable Bars and Times for hamburger menu -->

<i id="menu_icon"></i>

<!--  Example for fancybox and slick slider -->
<div class="your-class">
	<div>your content</div>
	<div>your content</div>
	<div>your content</div>
</div>

<a data-fancybox="gallery" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"></a>
<a data-fancybox="gallery" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg"></a>
*/
?>
