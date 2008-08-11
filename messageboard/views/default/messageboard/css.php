<?php

	/**
	 * Elgg Messageboard CSS extender
	 * 
	 * @package ElggMessageBoard
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd <info@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

?>
/*-------------------------------
MESSAGEBOARD PLUGIN
-------------------------------*/
/* input msg area */
#mb_input_wrapper {
	border:1px dotted #cccccc;
	background:#f5f5f5;
	padding:4px;
}

#mb_input_wrapper .input_textarea {
	width:94%;
}
.message_item_timestamp {
	font-size:90%;
	color:#666666;
	padding:10px 0 0 0;
}
p.message_item_timestamp {
	margin-bottom: 10px;
}
/* wraps each message */
.messageboard {
	margin:10px 0 10px 0;
    background:#EEEEEE;
}
.message_sender .usericon {
	float:left;
	margin: 5px 10px 0 5px;
}

.messageboard .message p {
	line-height: 1.2em;
	background:#fffcd9;
	margin:0 4px 4px 4px;
	padding:4px;
	border-bottom:1px dotted #cccccc;
}
.message_buttons {
	font-size: 90%;
	padding:0 0 3px 4px;
	line-height: 1.1em;
}
p.message_buttons {
	padding:0;
	margin:0 0 3px 4px;
}

.messageboard .delete_message a {
	display:block;
	float:right;
	cursor: pointer;
	width:14px;
	height:14px;
	margin:0 3px 3px 0;
	background: url("<?php echo $vars['url']; ?>_graphics/icon_customise_remove.png") no-repeat 0 0;
	text-indent: -9000px;
}
.messageboard .delete_message a:hover {
	background-position: 0 -16px;
}




