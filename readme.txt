=== Simple Header Footer HTML ===
Contributors: Zuige, ottok
Tags: https, header, footer, js, css, html
Donate link: http://seravo.fi/
Requires at least: 3.8.9
Tested up to: 4.2.1
Stable tag: 1.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A simple plugin for injecting HTML into various places in your Wordpress theme output.

== Description ==

This plugin is useful if you have want to enable your users to insert custom CSS or add custom headers or some JavaScript into the site without having to edit any theme files. Unlike similar header/footer plugins, this plugin by design does not allow to insert PHP code and does not contain any evil eval() calls.

This plugin is designed to be used in WordPress Network installations, where site admins are not supposed to have PHP execution access but any HTML/CSS/JS code is safe to accept.

This plugin is made by [Seravo Oy](http://seravo.fi/), which specializes in open source support services and among others is the only company in Finland to provide [WordPress Premium Hosting](http://seravo.fi/wordpress-palvelu).

Source available at https://github.com/Seravo/wp-simple-header-footer-html

== Installation ==

1. Upload plugin to the `/wp-content/plugins/` directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Start using!


== Frequently Asked Questions ==

= Why doesn't my PHP code work? =
We don't support PHP evaluation due to some serious security issues. This plugin is intended only for HTML/CSS/JS.

== Screenshots ==

None yet.

== Changelog ==

Note that complete commit log is available at https://github.com/Seravo/wp-simple-header-footer-html/commits/master

= 1.2 =
Revert LICENSE change and bad escapes

= 1.1 =
Properly escape output, WordPress 4.2 compatibility

= 1.0 =
Release version

= 0.9 =
* Initial release to WordPress.org

== Upgrade Notice ==

= 1.0 =
Release version

