<?php

//  Protect from direct access
defined('ABSPATH') || die("Sorry!");


// RacyDev Linky Shortcode For Post Class

if(!class_exists("RacyDevLinky_PostShortcode")):

class RacyDevLinky_PostShortcode{
    public function __construct(){

        // Initalize Post Shortcode Functio when plugin in init
        add_action("init", array($this, "racydev_linky_post_shortcode"));
    }

    // Add Shortcode
    public function racydev_linky_post_shortcode(){
        add_shortcode("racydev_linky_post", array($this, "racydev_linky_post_func"));
    }

    // Shortcode Control and result
    public function racydev_linky_post_func($atts){
        extract(shortcode_atts(array(
            "title" => "Download Now",
            "link" => "https://google.com"
        ), $atts, "racydev_linky_post"));

        $options = get_option("racydev_linky_options");

        return '
        <a href="'.esc_url($options["page_url"]).'?link=" id="d_btn_post">
        <button class="btn">
        <i class="fa fa-download"></i> '.esc_attr($title).'
        </button>
        </a>
        <script>
        document.getElementById("d_btn_post").href = document.getElementById("d_btn_post").href + btoa("'.esc_url($link).'");
    </script>
        ';
    }
}
new RacyDevLinky_PostShortcode();
endif;