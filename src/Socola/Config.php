<?php
	namespace Socola;
	$permission = array(
	/*public*/
		'public_profile'                 => 1,
		'user_friends'                   => 1,
		'email'                          => 1,
	/*user*/
		'user_about_me'                  => 0,
		'user_actions.books'             => 0,
		'user_actions.fitness'           => 0,
		'user_actions.music'             => 0,
		'user_actions.news'              => 0,
		'user_actions.video'             => 0,
		'user_actions:{app_namespace}'   => 0,
		'user_birthday'                  => 0,
		'user_education_history'         => 0,
		'user_events'                    => 0,
		'user_games_activity'            => 0,
		'user_hometown'                  => 0,
		'user_likes'                     => 0,
		'user_location'                  => 0,
		'user_managed_groups'            => 1,
		'user_photos'                    => 0,
		'user_posts'                     => 0,
		'user_relationships'             => 0,
		'user_relationship_details'      => 0,
		'user_religion_politics'         => 0,
		'user_tagged_places'             => 0,
		'user_videos'                    => 0,
		'user_website'                   => 0,
		'user_work_history'              => 0,
	/*read*/
		'read_custom_friendlists'        => 0,
		'read_insights'                  => 0,
		'read_audience_network_insights' => 0,
		'read_page_mailboxes'            => 0,

		'publish_actions'                => 0,
		'rsvp_event'                     => 0,
		'ads_read'                       => 0,
		'ads_management'                 => 0,
		'business_management'            => 0,
	/*page*/
		'manage_pages'                   => 1,
		'publish_pages'                  => 0,
		'pages_show_list'                => 0,
		'pages_manage_cta'               => 0,
		'pages_manage_instant_articles'  => 0,
		'pages_messaging'                => 0,
		'pages_messaging_subscriptions'  => 0,
		'pages_messaging_payments'       => 0,
		'pages_messaging_phone_number'   => 0
	);
?>