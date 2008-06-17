<?php

	$english = array(
	
		/**
		 * Menu items and titles
		 */
	
			'messages' => "Messages",
			'messages:user' => "Your inbox",
			'messages:sentMessages' => "Sent messages",
			'messages:posttitle' => "%s's messages: %s",
			'messages:inbox' => "Inbox",
			'messages:send' => "Send a message",
			'messages:sent' => "Sent messages",
			'messages:message' => "Message",
			'messages:title' => "Title",
			'messages:to' => "To",
			'messages:fly' => "Let it fly",
			'messages:replying' => "Message replying to",
			
		/**
		 * Status messages
		 */
	
			'messages:posted' => "Your message was successfully sent.",
			'messages:deleted' => "Your message was successfully deleted.",
	
		/**
		 * Error messages
		 */
	
			'messages:blank' => "Sorry; you need to actually put something in the message body before we can save it.",
			'messages:notfound' => "Sorry; we could not find the specified message.",
			'messages:notdeleted' => "Sorry; we could not delete this message.",
			'messages:nopermission' => "You do not have permission to delete that message.",
			'messages:nomessages' => "There are no messages to display.",
	
	);
					
	add_translation("en",$english);

?>