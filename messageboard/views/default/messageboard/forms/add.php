<?php

    /**
	 * Elgg Message board add form
	 * 
	 * @package ElggMessageBoard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Dave Tosh <dave@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */
	 
?>

<form action="<?php echo $vars['url']; ?>action/messageboard/add" method="post" name="messageboardForm">
   
    <!-- textarea for the contents -->
    <textarea name="message_content" value="" class="input_textarea" /></textarea><br />
   
    <!-- the person posting an item on the message board -->
    <input type="hidden" name="guid" value="<?php echo $_SESSION['guid']; ?>"  />
   
    <!-- the page owner, this will be the profile owner -->
    <input type="hidden" name="pageOwner" value="<?php echo page_owner(); ?>"  />
   
    <!-- submit messages input -->
    <input type="submit" id="postit" value="Post it">
    
</form>