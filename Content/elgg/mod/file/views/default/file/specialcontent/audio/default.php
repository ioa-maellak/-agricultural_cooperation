<?php
/**
 * Display an image
 *
 * @uses $vars['entity']
 */

$file = $vars['entity'];

$image_url = $file->getIconURL('large');
$image_url = elgg_format_url($image_url);
$download_url = elgg_get_site_url() . "file/download/{$file->getGUID()}";

if ($vars['full_view']) {
	echo <<<HTML
	
	<!--
	<audio controls>
	  <source src=$download_url type="audio/wav">
	  Your browser does not support this audio format.
	</audio>
	-->
	
<audio controls>
  <source src=$download_url type="audio/wav">
  <embed height="50" width="100" src=$download_url>
</audio>	
	
	

HTML;
}
