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
	gatekeeper();
	global $CONFIG;
	
	// Get the current page's owner
		$page_owner = page_owner_entity();
		if ($page_owner === false || is_null($page_owner)) {
			$page_owner = $_SESSION['user'];
			set_page_owner($page_owner->getGUID());
		}

	//if it is a sub page, provide a link back to parent
	if(get_input('parent_guid')){
	    $parent = get_entity(get_input('parent_guid'));   
	    $owner_url = $CONFIG->wwwroot . "pg/pages/owned/" . $page_owner->username;
	    $area2 = "<b><a href=\"{$owner_url}\">{$page_owner->username}'s Pages</a></b>: <a href=\"{$parent->getURL()}\">$parent->title</a> > new page";
    }
    
	$title = elgg_echo("pages:new");
	$area2 .= elgg_view_title($title);
	$area2 .= elgg_view("forms/pages/edit");
	
	$body = elgg_view_layout('two_column_left_sidebar', $area1, $area2);
	
	page_draw($title, $body);
?>