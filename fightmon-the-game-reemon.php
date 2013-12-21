<?php

/*
  Plugin Name: Fightmon the Game: Reemon Wordpress Linker
  Plugin URI: https://github.com/iggyvolz/FTG-R-Wordpress-Plugin
  Description: Link from Fightmon the Game: Reemon to Wordpress to allow for a Wordpress Dashboard Widget of Fightmon the Game: Reemon.  Note that you must also have Fightmon the Game: Reemon installed on the server.
  Author: iggyvolz
  Version: 0.3
  Author URI: http://fightmon.eternityincurakai.com/
 */
define('FTGR_BASE', 'http://localhost/ftgr-dev'); // Put the absolute URL of Fightmon the Game: Reemon.

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
	if (!defined('FTGR_BASE'))
	{
		echo 'FTGR_BASE is not defined';
		return;
	}
	echo '<iframe src="' . FTGR_BASE . '" style="height:1050px; width:500px">';
}

?>
