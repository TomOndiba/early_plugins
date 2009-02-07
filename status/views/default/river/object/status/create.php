<?php

	/**
	 * Elgg status river view
	 * 
	 * @package ElggStatus
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd <info@elgg.com>
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.com/
	 *
	 * @uses $vars['entity'] Optionally, the status message to view
	 */

	$statement = $vars['statement'];
	$performed_by = $statement->getSubject();
	$object = $statement->getObject();
	
	//set the required url to the user who carried out the action
	$url = "<a href=\"{$performed_by->getURL()}\">{$performed_by->name}</a>";
	
	//get the correct action message to display
	$string = sprintf(elgg_echo("status:river:created"),$url) . " ";
	
	// display the status
	$string .= $object->description . " | " . elgg_echo("status:via");


?>

<?php echo $string; ?>