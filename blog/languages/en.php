<?php

	$english = array(
	
		/**
		 * Menu items and titles
		 */
	
			'blog' => "Blog",
			'blog:user' => "%s's blog",
			'blog:posttitle' => "%s's blog: %s",
			'blog:friends' => "Your friends' posts",
			'blog:everyone' => "All blog posts",
	
			'blog:read' => "Read blog",
	
			'blog:addpost' => "Write an entry",
			'blog:editpost' => "Edit entry (%s)",
	
			'blog:text' => "Blog text",
	
			'blog:strapline' => "%s",
	
			'blog:comment:add' => "Add a comment",
			'blog:comment:text' => "Comment text",
	
			'comments' => "Comments",
			
			
         /**
	     * Blog river
	     **/
	        
	        //generic terms to use
	        'blog:river:created' => "%s wrote",
	        'blog:river:updated' => "%s updated",
	        'blog:river:posted' => "%s posted",
	        
	        //these get inserted into the river links to take the user to the entity
	        'blog:river:create' => "a new blog post.",
	        'blog:river:update' => "updated a blog post.",
	        'blog:river:annotate:create' => "a comment on a blog post.",
			
	
		/**
		 * Status messages
		 */
	
			'blog:posted' => "Your blog post was successfully posted.",
			'comment:success' => "Your comment was successfully added.",
			'blog:deleted' => "Your blog post was successfully deleted.",
			'comment:deleted' => "The comment was successfully deleted.",
	
		/**
		 * Error messages
		 */
	
			'blog:save:failure' => "Your blog post could not be saved. Please try again.",
			'blog:blank' => "Sorry; you need to fill in both the title and body before you can make a post.",
			'blog:notfound' => "Sorry; we could not find the specified blog post.",
			'blog:notdeleted' => "Sorry; we could not delete this blog post.",
	
			'comment:failure' => "An unexpected error occurred when adding your comment. Please try again.",
			'comment:notdeleted' => "The comment could not be deleted.",
	
	);
					
	add_translation("en",$english);

?>