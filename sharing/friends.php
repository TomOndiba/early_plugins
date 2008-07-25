<?php

	/**
	 * Elgg sharing plugin friends' page
	 * 
	 * @package ElggShare
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Ben Werdmuller <ben@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	// Start engine
		require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
		
	// List shares
		$area1 = elgg_view_title(elgg_echo('sharing:friends'));
		set_context('search');
		$area2 = list_user_friends_objects(page_owner(),'sharing');
		set_context('sharing');
		
	// Format page
		$body = elgg_view_layout('two_column_left_sidebar', $area1, $area2);
		
	// Draw it
		echo page_draw(elgg_echo('sharing:friends'),$body);

?>