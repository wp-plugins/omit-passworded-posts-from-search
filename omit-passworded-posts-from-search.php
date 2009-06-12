<?php
/*
Plugin Name: Omit Passworded Posts From Search
Version: 1.0.1
Plugin URI: http://coffee2code.com/wp-plugins/omit-passworded-posts-from-search
Author: Scott Reilly
Author URI: http://coffee2code.com
Description: Prevent passworded posts from being included in site search results.

** NOTE: This plugin is no longer necessary as of WordPress 2.8 as this functionality is now built-in. **

By default, WordPress's built-in search feature searches the contents of passworded posts.  If the content of a passworded post
matches the search criteria, WordPress will include that post in the listing of search results.  While it is true that the
post contents will not be displayed to the visitor (unless they know and have entered the password for the post), the fact that
the otherwise protected post appeared in the search results allows for the visitor to search-bomb your site in an effort to deduce
some of the content of the password-protected post.

This plugin prevents posts that have a password from being included in any search performed on the site.  Of course, external search
(as done from Google) would never include the passworded post contents since that content is not available to external search engines.

This plugin does not constrain the search capabilities from within the WordPress admin.

Compatible with WordPress 2.5+, 2.6+, 2.7+.

=>> Read the accompanying readme.txt file for more information.  Also, visit the plugin's homepage
=>> for more information and the latest updates

Installation:

1. Download the file http://coffee2code.com/wp-plugins/omit-passworded-posts-from-search.zip and unzip it into your 
/wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' admin menu in WordPress

*/

/*
Copyright (c) 2009 by Scott Reilly (aka coffee2code)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation 
files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, 
modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the 
Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR
IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

if ( $wp_db_version < 11548 ) 
	add_filter('posts_where', create_function( '$where', 'if ( is_search() && !is_admin() ) {
			global $wpdb;
			$where .= " AND $wpdb->posts.post_password = \'\'";
		}
		return $where;'));

?>