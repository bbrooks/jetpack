<?php
/**
 * Module Name: Mobile Push Notifications
 * Module Description: Receive notifications on your mobile device.
 * Sort Order: 100
 * First Introduced: 1.9
 * Requires Connection: Yes
 * Auto Activate: Yes
 * Module Tags: Mobile
 */

Jetpack_Sync::sync_comments( __FILE__, array(
	'comment_stati' => array( 'approved', 'unapproved' ),
) );
