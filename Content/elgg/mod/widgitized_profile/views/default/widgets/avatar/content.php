<?php
$user = elgg_get_page_owner_entity();
$icon = elgg_view_entity_icon($user, 'large', array(
	'use_hover' => true,
	'use_link' => true,
));
echo $icon;
?>