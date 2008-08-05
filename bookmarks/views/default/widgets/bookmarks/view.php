
<script type="text/javascript">
$(document).ready(function () {
    $('a.share_more_info').click(function () {
		$(this.parentNode).children("[class=share_desc]").slideToggle("fast");
		return false;
    });
}); /* end document ready function */
</script>

	<?php

	    //get the num of shares the user want to display
		$num = $vars['entity']->num_display;
		
		//if no number has been set, default to 1
		if(!$num)
			$num = 1;
			
        //grab the shares
		$user = $_SESSION['user'];
		$shares = $user->getEntitiesFromRelationship('share', true, $num, 0);
		
		if($shares){

			foreach($shares as $s){
			
				//get the owner
				$owner = $s->getOwnerEntity();

				//get the time
				$friendlytime = friendly_time($s->time_created);

				//get the user icon
				$icon = elgg_view(
						"profile/icon", array(
										'entity' => $owner,
										'size' => 'tiny',
									  )
					);

				//get the share title
				$info = "<p class=\"shares_title\"><a href=\"{$s->getURL()}\">{$s->title}</a></p>";
				
				//get the user details
				$info .= "<p class=\"shares_timestamp\"><small><a href=\"{$owner->getURL()}\">{$owner->name}</a> {$friendlytime}</small></p>";

				//get the share description
				$info .= "<a href=\"javascript:void(0);\" class=\"share_more_info\">more</a><br /><div class=\"share_desc\"><p>{$s->description}</p></div>";
		
				//display 
				echo "<div class=\"shares_widget_wrapper\">";
				echo "<div class=\"shares_widget_icon\">" . $icon . "</div>";
				echo "<div class=\"shares_widget_content\">" . $info . "</div>";
				echo "</div>";

			}

			$user_inbox = $vars['url'] . "pg/bookmarks/" . $user->username . "/inbox";
			echo "<a href=\"{$user_inbox}\">Bookmarks inbox</a>";

		}
	
	
      ?>