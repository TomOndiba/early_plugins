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


	$annotation = $vars['annotation'];
	$entity = get_entity($annotation->entity_guid);
	
	// Get size
	if (!in_array($vars['size'],array('small','medium','large','tiny','master','topbar')))
		$vars['size'] = "medium";
			
	// Get any align and js
	if (!empty($vars['align'])) {
		$align = " align=\"{$vars['align']}\" ";
	} else {
		$align = "";
	}
	
	
?>

<div class="groupicon">
<a href="<?php echo $entity->getURL() . "?rev=" . $annotation->id; ?>"><img src="<?php echo $vars['url']; ?>mod/pages/graphics/default<?php echo $vars['size']; ?>.jpg" border="0" <?php echo $align; ?> <?php echo $vars['js']; ?> /></a>
</div>