<?php

//  Protect from direct access
defined('ABSPATH') || die("Sorry!");


// RacyDev Linky Shortcode For Page Class

if(!class_exists("RacyDevLinky_PageShortcode")):
class RacyDevLinky_PageShortcode{
    public function __construct(){

        // Initalize Page Shortcode Functio when plugin in init
        add_action("init", array($this, "racydev_linky_page_shortcode"));
    }

    // Add Shortcode
    public function racydev_linky_page_shortcode(){
        add_shortcode("racydev_linky_page", array($this, "racydev_linky_page_func"));
    }

    // Shortcode Control and result
    public function racydev_linky_page_func(){

        $racydev_linky_options = get_option("racydev_linky_options");


        return '
        <p id="wait_text">Please Wait <span id="wait_time">'.esc_attr($racydev_linky_options["waiting_time"]).'</span> Seconds</p>
        <progress value="0" max="'.esc_attr($racydev_linky_options["waiting_time"]).'" id="progressBar"></progress>
        <a style="display: none;" href="" id="d_btn">
        <button class="btn">
        <i class="fa fa-download"></i> '.esc_attr($racydev_linky_options["page_btn_title"]).'
        </button>
        </a>
        </div>
        <script>
        var secretLink   = "'.esc_url($_GET["link"]).'";
var timeleft = '.esc_attr($racydev_linky_options["waiting_time"]).';
var waitingTimer = setInterval(function(){
  if(timeleft <= 0){
    document.getElementById("d_btn").style.display = "block";
    document.getElementById("progressBar").style.display = "none";
	document.getElementById("d_btn").href = atob(secretLink);
    clearInterval(waitingTimer);
    document.getElementById("wait_text").style.display = "none";
  }
  document.getElementById("wait_time").innerText = timeleft;
  document.getElementById("progressBar").value = '.esc_attr($racydev_linky_options["waiting_time"]).' - timeleft;
  timeleft -= 1;
}, 1000);
</script>
    ';
;
    }
}

new RacyDevLinky_PageShortcode();
endif;