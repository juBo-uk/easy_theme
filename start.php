<?php
elgg_register_event_handler('init', 'system', 'easytheme_init');

function easytheme_init() {
	        elgg_extend_view('css/elgg', 'easytheme/css');
		     elgg_unregister_menu_item('topbar', 'elgg_logo');
           elgg_extend_view('css/admin', 'easytheme/admin'); 
           elgg_extend_view ('page/elements/head','easytheme/meta');

		$base = elgg_get_plugins_path() . 'easytheme/actions/easytheme';
		elgg_register_action('easytheme/settings/save', "$base/save.php", 'admin');

}
