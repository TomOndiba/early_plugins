<?php

	$title = $vars['entity']->title;
	if (empty($title)) {
		$title = substr($vars['entity']->description,0,32);
		if (strlen($vars['entity']->description) > 32)
			$title .= " ...";
	}

?>

	<item>
	  <guid isPermaLink='true'><?php echo $vars['entity']->getURL(); ?></guid>
	  <pubDate><?php echo date("r",$vars['entity']->time_created) ?></pubDate>
	  <link><?php echo $vars['entity']->address; ?></link>
	  <title><![CDATA[<?php echo $title; ?>]]></title>
	  <description><![CDATA[<?php echo (nl2br($vars['entity']->description)); ?>]]></description>
	</item>
