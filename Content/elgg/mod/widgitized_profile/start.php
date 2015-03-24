<?php
function widgitized_profile_init() {
      elgg_register_widget_type('avatar', elgg_echo('widget:avatar'), elgg_echo('widget:avatar:description'), 'profile', TRUE);
      elgg_register_widget_type('details', elgg_echo('widget:details'), elgg_echo('widget:details:description'), 'profile', TRUE);
      elgg_register_widget_type('status', elgg_echo('widget:status'), elgg_echo('widget:status:description'), 'profile', TRUE);
      elgg_register_widget_type('profilemenu', elgg_echo('widget:profilemenu'), elgg_echo('widget:profilemenu:description'), 'profile', TRUE);
}
 
elgg_register_event_handler('init', 'system', 'widgitized_profile_init');
?>