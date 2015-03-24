<?php
/**
 * Display an image
 *
 * @uses $vars['entity']
 */

$file = $vars['entity'];

$image_url = $file->getIconURL('large');
$file_url = elgg_normalize_url("action/file/download?file_guid={$file->guid}");
$file_url = elgg_add_action_tokens_to_url($file_url);
$my_url = $file_url;
$image_url = elgg_format_url($image_url);
$download_url = elgg_get_site_url() . "file/download/{$file->getGUID()}";


if ($vars['full_view']) {
	//echo $my_url;
	//echo $file->getIconURL('large');
	echo <<<HTML
	


<!--<embed src=$download_url height="600" width="400">-->

<video width="320" height="240" controls>
  <source src=$download_url type="video/mp4">
  <object data=$download_url width="320" height="240">
    <embed src=$download_url width="320" height="240">
  </object> 
</video>	
	
<video width="8" height="8" controls>
  <source src=$my_url type="video/mp4">
Your browser does not support the video tag.
</video>	

HTML;
}





