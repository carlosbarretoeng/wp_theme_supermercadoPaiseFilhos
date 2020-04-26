<?php

require "inc/settings.inc.php";
require "inc/header.inc.php";
require "inc/carousel.inc.php";

require "inc/menus.inc.php";

function woocommerce_setup()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'woocommerce_setup');
