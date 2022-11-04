<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php the_field('script_head', 'option'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>



    <header class="header bg-white sticky-top">
        <div class="container">
            <div class="header-inner d-flex align-items-center justify-content-between">
                <div class="header-logo">
                    <?php
						$custom_logo_id = get_theme_mod('custom_logo');
						$image = wp_get_attachment_image_src($custom_logo_id, 'full');
						printf(
							'<a href="%1$s" title="%2$s"><img src="%3$s"></a>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							$image[0]
						);
					?>
                </div>
                <nav class="header-menu">
                    <ul class="list-unstyled mb-0 d-flex flex-wrap align-items-center">
                        <?php
						wp_nav_menu(array(
							'theme_location'  => 'menu-1',
							'container'       => '__return_false',
							'fallback_cb'     => '__return_false',
							'items_wrap'      => '%3$s',
							'depth'           => 2,

						));
						?>
                    </ul>
                </nav>
                <div class="header-action d-flex align-items-center">
                    <div class="header-search-icon">
                        <button type="button" class="button-reset">
                            <?php echo svg('search')?>
                        </button>
                    </div>
                    <ul class="header-social list-unstyled align-items-center d-none d-lg-flex">
                        <li><a href="<?php the_field('social_facebook','option')?>"><?php echo svg('facebook')?></a></li>
                        <li><a href="<?php the_field('social_youtube','option')?>"><?php echo svg('youtube')?></a></li>
                        <li><a href="<?php the_field('social_instagram','option')?>"><?php echo svg('instagram')?></a></li>
                        <li><a href="<?php the_field('social_tiktok','option')?>"><?php echo svg('tiktok')?></a></li>
                    </ul>
					<div class="header-bars d-lg-none">
						<span class="bar-svg">
                            <?php echo svg('bars')?>
                        </span>
                        <span class="close-svg">
                            <?php echo svg('close')?>
                        </span>
					</div>
                </div>
            </div>
        </div>
    </header>

    <div class="header-search position-fixed w-100 bg-white">
        <div class="container">
            <form action="<?php echo get_home_url()?>" class="d-flex">
                <input type="text" placeholder="Tìm kiếm" name="s">
                <button class="button-reset">
                    <?php echo svg('arrow-right')?>
                </button>
            </form>
        </div>
    </div>
