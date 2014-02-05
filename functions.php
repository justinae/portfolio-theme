<?php

add_action( 'wp_enqueue_scripts', 'add_singlePageNav' );

function add_SinglePage() {
wp_enqueue_script(
    'jquery.singlePageNav', // name your script so that you can attach other scripts and de-register, etc.
    get_template_directory_uri() . '/library/js/jquery.singlePageNav.js', // this is the location of your script file
    array('jquery') // this array lists the scripts upon which your script depends
);
}

add_action( 'wp_enqueue_scripts', 'add_responsive_nav' );

function add_responsive_nav() {
wp_enqueue_script(
    'responsive-nav', // name your script so that you can attach other scripts and de-register, etc.
    get_template_directory_uri() . '/library/js/responsive-nav.js', // this is the location of your script file
    array('jquery') // this array lists the scripts upon which your script depends
);
}

?>