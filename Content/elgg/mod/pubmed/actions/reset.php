<?php
	/**
	* Pubmed plugin - Delete the metadata
	* 
	* @package Pubmed plugin
	* @author M.R.A. Welkers
	* @copyright M.R.A. Welkers
	* @link http://www.fautloos.nl
	*/
	gatekeeper();
	// Make sure action is secure
	action_gatekeeper();
	
	remove_metadata(get_loggedin_user()->guid, meshterms);
	remove_metadata(get_loggedin_user()->guid, chemicals);
	remove_metadata(get_loggedin_user()->guid, fellowauthors);
	
	$meshterms = get_metadata_byname(get_loggedin_user()->guid, meshterms);
	$chemicals = get_metadata_byname(get_loggedin_user()->guid, chemicals);
	$fellowauthors = get_metadata_byname(get_loggedin_user()->guid, fellowauthors);

	if(empty($meshterms) && empty($chemicals) && empty($fellowauthors))
		   {
	system_message(elgg_echo("pubmed:deleted"));
				} else {
					register_error(elgg_echo("pubmed:notdeleted"));
				}

	forward($_SERVER['HTTP_REFERER']);
?>