<?php
    function themeRai_sources() {

        wp_enqueue_style('style', get_stylesheet_uri());

    }
    
    add_action('wp_enqueue_scripts', 'themeRai_sources');

    ?>