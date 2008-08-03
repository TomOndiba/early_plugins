<?php
	/**
	 * Elgg Pages
	 * 
	 * @package ElggPages
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Marcus Povey
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

	require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

	$page_guid = get_input('page_guid');
	set_context('pages');
	
	$pages = get_entity($page_guid);
	if ($pages->container_guid) {
		set_page_owner($pages->container_guid);
	} else {
		set_page_owner($pages->owner_guid);
	}
	
	global $CONFIG;
	add_submenu_item(sprintf(elgg_echo("pages:user"), page_owner_entity()->name), $CONFIG->url . "pg/pages/owned/" . page_owner_entity()->username);
	
	if ($pages->canEdit()) {
		add_submenu_item(elgg_echo('pages:newchild'),"{$CONFIG->wwwroot}pg/pages/new/?parent_guid={$pages->getGUID()}");
		add_submenu_item(elgg_echo('pages:delete'),"{$CONFIG->wwwroot}action/pages/delete?page={$pages->getGUID()}");
	}
	
	$title = $pages->title;
	$body = elgg_view_entity($pages, true);
	
	//add comments
	$body .= elgg_view_comments($pages);
	
	pages_set_navigation_parent($pages);
	$sidebar = elgg_view('pages/sidebar/tree');
	
	$body = elgg_view_layout('two_column_left_sidebar', '', elgg_view_title($title) . $body, $sidebar);
	
	// Finally draw the page
	page_draw($title, $body);

?>