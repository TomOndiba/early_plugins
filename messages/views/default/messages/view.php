<?php

	/**
	 * Elgg messages view page
	 * 
	 * @package ElggMessages
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Dave Tosh <dave@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 * 
	 * @uses $vars['entity'] An array of messages to view
	 * @uses $vars['page_view'] This is the page the messages are being accessed from; inbox or sentbox
	 * 
	 */
	 
	// If there are any messages to view, view them
		if (is_array($vars['entity']) && sizeof($vars['entity']) > 0) {
    		
?>
            <div id="messages" /><!-- start the main messages wrapper div -->
            
<?php
    		
    		// get the correct display for the inbox view
    		if($vars['page_view'] == "inbox") {
    		
    			foreach($vars['entity'] as $message) {
        			
        			//make sure to only display the messages that have not been 'deleted' (1 = deleted)
    				if($message->hiddenFrom != 1){
        				
        				// check to see if the message has been read, if so, get the correct background color
        			    if($message->readYet == 1){
                            echo "<div class=\"message_read\" />";
                        }else{
                            echo "<div class=\"message_notread\" />";
                        }
                        
                        //set the table
        				echo "<table width=\"100%\" cellspacing='0'><tr>";       
                        //get the icon of the user who owns the message
        				echo "<td width='250px'>" . elgg_view("profile/icon",array('entity' => $message->getOwnerEntity(), 'size' => 'tiny')) . "<div class='msgsender'><b>" . $message->getOwnerEntity()->name . "</b><br /><small>" . date("F j, g:i a",$message->time_created) . "</small></div></td>";
        				//display the message title
    				    echo "<td><div class='msgsubject'><a href=\"{$message->getURL()}\">" . $message->title . "</a></div></td>";
    				    //display the link to 'delete'
    				    echo "<td width='70px' class='delete_msg'>" . elgg_view("output/confirmlink", array(
																'href' => $vars['url'] . "action_handler.php?action=messages/delete&message_id=" . $message->getGUID() . "&type=inbox",
																'text' => elgg_echo('delete'),
																'confirm' => elgg_echo('deleteconfirm'),
															)) . "</td>";
															
		                echo "</tr></table>";
		                echo "</div>"; // close the message background div
		                
    			    }
    				
    			}
    			
			}
			
			// get the correct display for the sentbox view
			if($vars['page_view'] == "sent") {
    			
    			foreach($vars['entity'] as $message) {
        			
        			//make sure to only display the messages that have not been 'deleted' (1 = deleted)
    				if($message->hiddenTo != 1){
        				
        				//get the correct user entity
        				$user = get_entity($message->toID);
        				
        				echo "<table width=\"100%\" cellspacing='0'><tr>";
        				
        				//get the icon for the user the message was sent to
        				echo "<tr><td width='250px'>" . elgg_view("profile/icon",array('entity' => $user, 'size' => 'tiny')) . "<div class='msgsender'><b>" . $user->name . "</b><br /><small>" . date("F j, g:i a",$message->time_created) . "</small></div></td>";
        				//display the message title
    				    echo "<td><div class='msgsubject'><a href=\"{$message->getURL()}?type=sent\">" . $message->title . "</a></div></td>";
        				//display the link to 'delete'
        				echo "<td width='70px' class='delete_msg'>" . elgg_view("output/confirmlink", array(
																'href' => $vars['url'] . "action_handler.php?action=messages/delete&message_id=" . $message->getGUID() . "&type=sent",
																'text' => elgg_echo('delete'),
																'confirm' => elgg_echo('deleteconfirm'),
															));
															
						echo "</td></tr></table>";
						
    			    }
    				
    			}
    			
			}
			
			echo "</div>"; // close the main messages wrapper div
			
		} else {
    		
    		echo "<p>There are no messages to display.</p>";
    		
		}
?>