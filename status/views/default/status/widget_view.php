<?php

	/**
	 * Elgg status view and edit for the widget
	 * 
	 * @package ElggStatus
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Dave Tosh <dave@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 *
	 * @uses $vars['entity'] Optionally, the status message to view
	 */
	 
	if (isset($vars['entity'])) {
    		
    		
?>
<script type="text/JavaScript">
$(document).ready(function(){
       
    //function to clear the current status
    $("#status_clear_button").click(function(){
        
        //display the ajax loading gif at the start of the function call
        $('#status_loading').html('<?php echo elgg_view('ajax/loader',array('slashes' => true)); ?>');
        
        //send the status guid to the clear.php end point to have its state changed to 'history'
        $("#status_widget_container").load("<?php echo $vars['url']; ?>mod/status/ajax_endpoint/clear.php", 
            {status_guid:<?php echo $vars['entity']->guid; ?>}); //end  
        
    });//end of function
    
    //when a user clicks into the message area, clear the current message and display the required menu option
    //while hiding the menu options not required
    $("#status_message").focus(function(){
        
        //sort out the various fields 
        $('#status_update_form').show(); //show the required menu options
        $('#status_clear').hide(); //hide the clear message button
        $("#status_message").val(''); //clear the textarea 
       
    });//end of function
    
    //if the user decides not to proceed with a new status message, hide the submit controls and 
    //put the current status back. 
    $("#status_cancel_button").click(function(){
        
        //sort out the various fields 
        $('#status_update_form').hide();
        $('#status_clear').show();
        $("#status_message").val('<?php echo $vars['entity']->description; ?>'); // the current status message
        
    });//end of function
    
    //when the user has written a new message submit the details to the required end point for processing
    $("#status_save_button").focus(function(){
        
        //display the ajax loading gif at the start of the function call
        $('#status_loading').html('<?php echo elgg_view('ajax/loader',array('slashes' => true)); ?>');
        
        //load the results back into the main status_widget_container div and remove the loading gif
        $("#status_widget_container").load("<?php echo $vars['url']; ?>mod/status/ajax_endpoint/load.php", {status:$("#status_message").val(), last_status:<?php echo $vars['entity']->guid; ?>}, function(){
                    $('#status_loading').empty(); // remove the loading gif
                }); //end  
                
    }); // end of function
  
}); //end of function
</script>
<style type="text/css">
    
    #status_update_form {
        display:none;
    }
    
    .status_input_form {
        border:0;
        background:transparent;
    }
    
    .status_input_form:focus {
	    border: none;
	    background:transparent;
	    color:#333333;
    }
    
</style>

<div id="status_widget_container"><!-- start of status_widget_container div -->

    <!-- display the status message -->
	<div class="widget_status_statusmessage"><!-- start of widget_status_statusmessage div -->
	
	    <?php
	    
	        //if the user is looking at their own status message, display it in a input field to enable editing, otherwise, 
	        //just display as normal
	        if ($vars['entity']->canEdit()) {
    	        
    	?>
    	
    	    <p>
    			<textarea name="status_message" id="status_message" class="status_input_form" /><?php echo $vars['entity']->description; ?></textarea>
    		</p>
    		
         <?php 
            } else {
         ?>

    		<p>
    			<?php
    				echo parse_urls(elgg_view("output/longtext",array("value" => $vars['entity']->description)));
    			?>
    		</p>
    		
    	<?php 
	        }
	    ?>
    	
    </div><!-- end of widget_status_statusmessage div -->
				
    <!-- display the timestamp -->
    <div class="widget_status_messagetimestamp"><!-- start of widget_status_messagetimestamp div -->
		<p>
		<?php
		
		    echo elgg_echo("status:set") . " " . sprintf(elgg_echo("status:strapline"),
								friendly_time($vars['entity']->time_created));
			
		?>
		</p>
	</div><!-- close widget_status_messagetimestamp div -->
		
	<?php

	    // if the status owner is looking at it, display the relevant options
		if ($vars['entity']->canEdit()) {
		
			?>
			    
				<div id="status_update_form"><!-- start of status_update_form div -->
				    <input type="button" id="status_save_button" value="save" />
				    <input type="button" id="status_cancel_button" value="cancel" />
				</div><!-- end of status_update_form div -->   			
				
				<div id="status_clear"><!-- start of status clear div -->
				    <input type="button" id="status_clear_button" value="clear status" />
				</div><!-- end of of status clear div -->
				
	<?php
			
		} // end of owner options if statement
		
	?>
		
	<!-- display the show history link -->
	<a href="<?php echo $vars['url']; ?>pg/status/<?php echo get_user($vars['entity']->owner_guid)->username; ?>">view history</a>
		
	<!-- loading graphic -->
    <div id="status_loading" class="loading">  </div>   

</div><!-- end of status_widget_container -->

<?php

	} // end of entity check if statement on line 15

?>