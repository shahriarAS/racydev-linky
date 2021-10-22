<?php

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}


//  Remove setting option when plugin is activating.
delete_option("racydev_linky_options");