<?php

/*
  Plugin Name: Fightmon the Game: Reemon Wordpress Linker
  Plugin URI: https://github.com/iggyvolz/FTG-R-Wordpress-Plugin
  Description: Link from Fightmon the Game: Reemon to Wordpress to allow for a Wordpress Dashboard Widget of Fightmon the Game: Reemon.
  Author: iggyvolz
  Version: 0.2
  Author URI: http://fightmon.eternityincurakai.com/
 */
function add_ftgr_base_function()
{

	wp_add_dashboard_widget(
			'fightmon_the_game_reemon', // Widget slug.
			'Fightmon the Game: Reemon', // Title.
			'add_ftgr_function' // Display function.
	);
}

add_action('wp_dashboard_setup', 'add_ftgr_base_function');

function add_ftgr_function()
{
	echo '<iframe src="' . plugins_url( 'ftgr' , __FILE__ ) . '" > ';
}

?>
