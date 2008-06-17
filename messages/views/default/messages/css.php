<?php

	/**
	 * Elgg Messages CSS extender
	 * 
	 * @package ElggMessages
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Dave Tosh <dave@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

?>

/*-------------------------------
MESSAGING PLUGIN
-------------------------------*/
.actiontitle {
	font-weight: bold;
	font-size: 110%;
	margin: 0 0 10px 0;
}

#messages td {
	text-align: left;
	vertical-align:middle;
	border-bottom: 1px solid #d6dbd2;
	padding: 5px;
}
#messages .message_notread td {
	 background: #F7DAD8; 
	 border-bottom: 1px solid #999999;
}
#messages .delete_msg {
	text-align: right;
}

#messages img {
	float: left;
	margin: 0 15px 0 0;
	width:40px;height:40px; /* temporary fix to make msg icons square */
}

#messages .msgsender {
	color:#666666;
	line-height: 15px;
	margin:4px 0 0 0;
	float:left;
}

#messages .msgsubject {
	font-size: 120%;
	line-height: 100%;
}

.msgsubject {
	font-weight:bold;
}

.messages_single_icon {
	float: left;
	margin: 0 10px 10px 0;
}

/* view and reply to message view */
.message_body {
	margin-left: 120px;
}
.message_body .messagebody {
	padding:0;
	margin:10px 0 10px 0;
	font-size: 120%;
	border-bottom:1px solid #cccccc;
}

/* drop down message reply form */
#message_reply_form {
	display:none;

}
/* when displaying original msg in reply view */
.previous_message {
    background:#efefef;
    border:1px solid #ccc;
    padding:4px;
    margin:0 0 20px 0;
}
.previous_message p {
    padding:0;
    margin:0;
    font-size: 120%;
}

