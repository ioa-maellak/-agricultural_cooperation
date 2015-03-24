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
	//echo $download_url;
	echo <<<HTML
	<object data=$download_url type="application/pdf" width="100%" height="100%">
	 
	  <p>It appears you don't have a PDF plugin for this browser.
	  No biggie... you can <a href=$download_url>click here to
	  download the PDF file.</a></p>
	  
	</object>
	
	<embed src=$download_url width="550" height="750"></embed>
HTML;
}
