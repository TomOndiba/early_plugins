<?php

	/**
	 * Elgg Message board: add message action
	 * 
	 * @package ElggMessageBoard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Dave Tosh <dave@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	// Make sure we're logged in; forward to the front page if not
		if (!isloggedin()) forward();
		
	// Get input
		$message_content = get_input('message_content'); // the actual message
		$page_owner = get_input("pageOwner"); // the message board owner
		$message_owner = get_input("guid"); // the user posting the message
		$user = get_user($page_owner); // the message board owner's details
		
	// Let's see if we can get a user entity from the specified page_owner
		if ($user && !empty($message_content)) {
    		
	        // If posting the comment was successful, say so
				if ($user->annotate('messageboard',$message_content,$user->access_id, $_SESSION['user']->getGUID())) {
					
    				system_message(elgg_echo("messageboard:posted"));
					
				} else {
    				
					system_message(elgg_echo("messageboard:failure"));
					
				}
				
				//set the url to return the user to the correct message board
				$url = "pg/messageboard/" . $user->username;
				
		} else {
		
			system_message(elgg_echo("messageboard:blank"));
			
			//set the url to return the user to the correct message board
			$url = "pg/messageboard/" . $user->username;
			
		}
		
	// Forward back to the messageboard
	    forward($url);

?>