=== Omit Passworded Posts From Search ===
Contributors: Scott Reilly
Donate link: http://coffee2code.com/donate
Tags: passworded post, password, search, posts, privacy, coffee2code
Requires at least: 2.5
Tested up to: 2.7.1
Stable tag: 1.0.1
Version: 1.0.1

Prevent passworded posts from being included in site search results.

== Description ==

**NOTE: This plugin is no longer necessary as of WordPress 2.8 as this functionality is now built-in.**

Prevent passworded posts from being included in site search results.

By default, WordPress's built-in search feature searches the contents of passworded posts.  If the content of a passworded post matches the search criteria, WordPress will include that post in the listing of search results.  While it is true that the post contents will not be displayed to the visitor (unless they know and have entered the password for the post), the fact that the otherwise protected post appeared in the search results allows for the visitor to search-bomb your site in an effort to deduce some of the content of the password-protected post.

This plugin prevents posts that have a password from being included in any search performed on the site.  Of course, external search (as done from Google) would never include the passworded post contents since that content is not available to external search engines.

This plugin does not constrain the search capabilities from within the WordPress admin.


== Installation ==

1. Unzip `omit-passworded-posts-from-search.zip` inside the `/wp-content/plugins/` directory for your site
1. Activate the plugin through the 'Plugins' admin menu in WordPress

