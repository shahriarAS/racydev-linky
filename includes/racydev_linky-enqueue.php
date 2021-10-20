<?php

//  Protect from direct access
defined('ABSPATH') || die("Sorry!");


// RacyDev Linky Enqueue Script & Style For full Plugin

if(!class_exists("RacyDevLinky_Enqueue")):
    class RacyDevLinky_Enqueue{
        public function __construct(){

            // Initialize Script for frontend
            add_action("wp_enqueue_scripts", array(__CLASS__, "racydev_linky_enqueue_func"));

            // Check is admin and Initialize Script for admin
            if (is_admin()){
                add_action("admin_enqueue_scripts", array(__CLASS__, "admin_racydev_linky_enqueue_func"));
            }
        }
        
        public static function racydev_linky_enqueue_func(){
            // Purged Tailwind CSS For Frontend
            wp_enqueue_style("tailwindCSS", plugin_dir_url(__DIR__).'assets/css/tailwindPurged.css');
        }

        public static function admin_racydev_linky_enqueue_func(){
            // Custom CSS For Admin
            wp_enqueue_style("customCSS", plugin_dir_url(__DIR__).'assets/css/custom.css');

            // Purged Tailwind CSS For Admin
            wp_enqueue_style("tailwindCSS", plugin_dir_url(__DIR__).'assets/css/tailwindPurged.css');

            // Chart JS For Admin
            wp_enqueue_script("Chart", plugin_dir_url(__DIR__).'assets/js/Chart.js');

            // Chart Data Script For Admin
            wp_enqueue_script("chartScript", plugin_dir_url(__DIR__).'assets/js/chartScript.js');
        }
    }

    new RacyDevLinky_Enqueue();
endif;