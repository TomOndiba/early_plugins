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
?>

.treeview, .treeview ul { 
	padding: 0;
	margin: 0;
	list-style: none;
}

.treeview ul {
	background-color: white;
	margin-top: 4px;
}

.treeview .hitarea {
	background: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-default.gif) -64px -25px no-repeat;
	height: 16px;
	width: 16px;
	margin-left: -16px;
	float: left;
	cursor: pointer;
}
/* fix for IE6 */
* html .hitarea {
	display: inline;
	float:none;
}

.treeview li { 
	margin: 0;
	padding: 3px 0pt 3px 16px;
}

.treeview a.selected {
	background-color: #eee;
}

#treecontrol { margin: 1em 0; display: none; }

.treeview .hover { color: red; cursor: pointer; }

.treeview li { background: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-default-line.gif) 0 0 no-repeat; }
.treeview li.collapsable, .treeview li.expandable { background-position: 0 -176px; }

.treeview .expandable-hitarea { background-position: -80px -3px; }

.treeview li.last { background-position: 0 -1766px }
.treeview li.lastCollapsable, .treeview li.lastExpandable { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-default.gif); }  
.treeview li.lastCollapsable { background-position: 0 -111px }
.treeview li.lastExpandable { background-position: -32px -67px }

.treeview div.lastCollapsable-hitarea, .treeview div.lastExpandable-hitarea { background-position: 0; }

.treeview-red li { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-red-line.gif); }
.treeview-red .hitarea, .treeview-red li.lastCollapsable, .treeview-red li.lastExpandable { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-red.gif); } 

.treeview-black li { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-black-line.gif); }
.treeview-black .hitarea, .treeview-black li.lastCollapsable, .treeview-black li.lastExpandable { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-black.gif); }  

.treeview-gray li { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-gray-line.gif); }
.treeview-gray .hitarea, .treeview-gray li.lastCollapsable, .treeview-gray li.lastExpandable { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-gray.gif); } 

.treeview-famfamfam li { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-famfamfam-line.gif); }
.treeview-famfamfam .hitarea, .treeview-famfamfam li.lastCollapsable, .treeview-famfamfam li.lastExpandable { background-image: url(<?php echo $vars['url']; ?>mod/pages/images/treeview-famfamfam.gif); } 


.filetree li { padding: 3px 0 2px 16px; }
.filetree span.folder, .filetree span.file { padding: 1px 0 1px 16px; display: block; }
.filetree span.folder { background: url(<?php echo $vars['url']; ?>mod/pages/images/folder.gif) 0 0 no-repeat; }
.filetree li.expandable span.folder { background: url(<?php echo $vars['url']; ?>mod/pages/images/folder-closed.gif) 0 0 no-repeat; }
.filetree span.file { background: url(<?php echo $vars['url']; ?>mod/pages/images/file.gif) 0 0 no-repeat; }

.pagesTreeContainer {
		margin: 15px;
		height: 200px;
	}
	
/* delete, Dave's test addition */

#pages_page .strapline {
    text-align:right;
    border-top:1px solid #efefef;
    margin:10px 0 10px 0;
}

#pages_page .tags {
    padding:10px 0 0 0;
    border-top:1px solid #efefef;
    margin:10px 0 10px 0;
}