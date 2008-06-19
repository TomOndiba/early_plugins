<?php

	/**
	 * Elgg hoverover extender for blog
	 * 
	 * @package ElggBlog
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Ben Werdmuller <ben@curverider.co.uk>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

?>

	<p class="user_menu_blog">
		<a href="<?php echo $vars['url']; ?>pg/blog/<?php echo $vars['entity']->username; ?>"><?php echo elgg_echo("blog"); ?></a>	
	</p>