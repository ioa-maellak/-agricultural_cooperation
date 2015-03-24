<?php

	/**
	 * @Pubmed widget for Elgg
	 * @This plugin allows users to find their scientific publications on Pubmed and display it on their profile page
	 * @http://www.pubmed.com
	 * 
	 * @Author M.R.A. Welkers <m_welkers@hotmail.com>
	 * @Homepage http://www.fautloos.nl
	 * @Copyright M.R.A. Welkers 2010
	 */
	
	function pubmed_init() {
    	
    	//extend css if style is required
		elgg_extend_view('css', 'pubmed/css');
    	//extend statistics to show delete metadata button
		elgg_extend_view('usersettings/statistics','pubmed/stats',999);

    	//add a widget
		add_widget_type('pubmed', elgg_echo("pubmed:widget:pubmed:title"), elgg_echo("pubmed:widget:pubmed:description"));
		add_widget_type('pubmed2', elgg_echo("pubmed:widget:pubmed:title"), elgg_echo("pubmed:widget:pubmed:description"));
		add_widget_type('keypublications', elgg_echo("pubmed:widget:keypublications:title"), elgg_echo("pubmed:widget:keypublications:description"));
		
		//Register the metadata names that we will fill in this plugin
		elgg_register_tag_metadata_name('meshterms');
		elgg_register_tag_metadata_name('fellowauthors');
		elgg_register_tag_metadata_name('chemicals');
		
	}

	// Register default system handlers
	register_elgg_event_handler('init', 'system', 'pubmed_init');
	//Register action
	register_action("pubmed/reset", true, $CONFIG->pluginspath . "pubmed/actions/reset.php");
?>