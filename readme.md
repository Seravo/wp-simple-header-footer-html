# Simple Header Footer HTML
[![Latest Stable Version](https://poser.pugx.org/seravo/wp-simple-header-footer-html/v/stable)](https://packagist.org/packages/seravo/wp-simple-header-footer-html) [![Total Downloads](https://poser.pugx.org/seravo/wp-simple-header-footer-html/downloads)](https://packagist.org/packages/seravo/wp-simple-header-footer-html) [![Latest Unstable Version](https://poser.pugx.org/seravo/wp-simple-header-footer-html/v/unstable)](https://packagist.org/packages/seravo/wp-simple-header-footer-html) [![License](https://poser.pugx.org/seravo/wp-simple-header-footer-html/license)](https://packagist.org/packages/seravo/wp-simple-header-footer-html)

A simple plugin for injecting HTML into various places in your WordPress theme output.

# Description

This plugin is useful if you have want to enable your users to insert custom CSS or add custom headers or some JavaScript into the site without having to edit any theme files. Unlike similar header/footer plugins, this plugin by design does not allow to insert PHP code and does not contain any evil eval() calls.

The plugin is safe to use in WordPress Network installations, where site admins are not supposed to have PHP execution access but any HTML/CSS/JS code is safe to accept.

Simple Header Footer HTML is made by Seravo.com. Seravo provides Premium Hosting and Upkeep service for WordPress. 

## Installation

### The Composer Way (preferred)

Install the plugin via [Composer](https://getcomposer.org/)
```
composer require seravo/wp-simple-header-footer-html
```

Activate the plugin
```
wp plugin activate wp-simple-header-footer-html
```

### The Old Fashioned Way

You can also install the plugin by directly uploading the zip file as instructed below:

1. [Download the plugin](archive/master.zip)
2. Upload to the plugin to /wp-content/plugins/ via the WordPress plugin uploader or your preferred method
3. Activate the plugin
