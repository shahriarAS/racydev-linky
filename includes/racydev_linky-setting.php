<?php

//  Protect from direct access
defined('ABSPATH') || die("Sorry!");

// RacyDev Linky Setting / Admin Options

if(!class_exists("RacyDevLinky_Setting")):
    class RacyDevLinky_Setting{
        public function __construct(){
            
            // Initial Action for main menu and main menu field
            add_action("admin_menu", array($this, "racydev_linky_setting_func"));
            add_action("admin_menu", array($this, "option_form_process_func"));
        }

        public function racydev_linky_setting_func(){

            // Option Main Menu
            add_menu_page(
                "RacyDev Linky Options",
                "RacyDev Linky Options",
                "manage_options",
                "racydev_linky",
                array($this, "racydev_linky_option_menu_func"),
                "dashicons-admin-links",
                10
            );

            // Customize Sub Menu
            add_submenu_page(
                "racydev_linky",
                "RacyDev Linky Customize",
                "Customize",
                "manage_options",
                "racydev_linky-customize",
                array($this, "racydev_linky_customize_func")
            );

            // Analytics Sub Menu
            add_submenu_page(
                "racydev_linky",
                "RacyDev Linky Analytics",
                "Analytics",
                "manage_options",
                "racydev_linky-analytics",
                array($this, "racydev_linky_analytics_func")
            );

            // Get Premium Sub Menu
            add_submenu_page(
                "racydev_linky",
                "RacyDev Linky Premium",
                "Enable Pro",
                "manage_options",
                "racydev_linky-premium",
                array($this, "racydev_linky_premium_func")
            );
        }

        // Field Processing Function For Option Main Menu
        public function option_form_process_func(){
            register_setting("option_group", "option_name");

            // Check is field correct and user has permission
            if (isset($_POST["action"]) && isset($_POST["option_page"]) &&( $_POST["option_page"] == "option_group") && current_user_can('manage_options')){
                
                // Update Options On Submit
                update_option('racydev_linky_options', array("page_url" => sanitize_url($_POST["page_url"]), "waiting_time" => sanitize_text_field($_POST["waiting_time"]), "page_btn_title" => sanitize_text_field($_POST["page_btn_title"])));
            }
        }

        // Main Option Menu Content
        public function racydev_linky_option_menu_func(){
            esc_html(include ('settings/racydev_linky-options-html.php'));
        }

        // Customize Menu Content
        public function racydev_linky_customize_func(){
            esc_html(include ('settings/racydev_linky-customize-html.php'));
        }

        // Analytics Menu Content
        public function racydev_linky_analytics_func(){
            esc_html(include ('settings/racydev_linky-analytics-html.php'));
        }

        // Premium Menu Content
        public function racydev_linky_premium_func(){
            esc_html(include ('settings/racydev_linky-premium-html.php'));
        }
    }

    // Initialize Class and call
    new RacyDevLinky_Setting();
    
endif;