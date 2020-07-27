=== Simple Header Footer HTML ===
Contributors: zuige, ottok
Tags: https, header, footer, js, css, html, seravo
Donate link: https://seravo.com/
Requires at least: 3.8.9
Tested up to: 5.5
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A simple plugin for injecting HTML into various places in your WordPress theme output.

== Description ==

This plugin is useful if you have want to enable your users to insert custom CSS or add custom headers or some JavaScript into the site without having to edit any theme files. Unlike similar header/footer plugins, this plugin by design does not allow to insert PHP code and does not contain any evil eval() calls.

The plugin is safe to use in WordPress Network installations, where site admins are not supposed to have PHP execution access but any HTML/CSS/JS code is safe to accept.

Simple Header Footer HTML is made by Seravo.com. Seravo provides Premium Hosting and Upkeep service for WordPress. 

**Contributing**

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

Complete commit log is available at https://github.com/Seravo/wp-simple-header-footer-html/commits/master

== Upgrade Notice ==

= 1.0 =
Release version
