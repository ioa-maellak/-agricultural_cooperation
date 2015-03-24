<?php

/**
	* Elgg Disable Activity plugin
	*
	* @package Elgg Disable Activity
	* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	* @author RiverVanRain
	* @URL http://weborganizm.org/crewz/p/1983/personal-net
	* @copyright (c) weborganiZm 2k13
*/

function  disableactivity_init() {

	if(!elgg_is_admin_logged_in()) {
		elgg_unregister_page_handler('activity');
		elgg_unregister_menu_item('site', 'activity');
	}

}

elgg_register_event_handler('init', 'system', 'disableactivity_init');