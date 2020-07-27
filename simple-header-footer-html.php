<?php
/**
 *
 * Plugin Name: Simple Header Footer HTML
 * Plugin URI: https://github.com/Seravo/wp-simple-header-footer-html
 * Description: Allows you to inject HTML code into multiple places in your theme output
 * Author: Seravo Oy
 * Version: 1.3.0
 * Author URI: https://seravo.com
 * Text Domain: seravo-inject-html
 * License: GPLv3
*/
/*  Copyright 2015-2020 Seravo Oy

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 3, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/*
* Init the pluginn
*/

add_action('init', 'init_seravo_inject');
function init_seravo_inject() {

    load_plugin_textdomain('seravo-inject-html', false, basename(dirname(__FILE__)) . '/languages');

    add_action('wp_head', 'inject_head_start_html', 0);
    add_action('wp_footer', 'inject_footer_start_html', 0);

    add_action('wp_head', 'inject_head_end_html', 1000);
    add_action('wp_footer', 'inject_footer_end_html', 1000);

    // create custom plugin settings menu
    add_action('admin_menu', 'seravo_register_options_page');
    add_action('admin_init', 'seravo_register_html');
}

/*
* Functions for echoing the HTML
*/
function inject_head_start_html() {
  echo get_option('injection_head_start'); }
function inject_head_end_html() {
  echo get_option('injection_head_end'); }
function inject_footer_start_html() {
  echo get_option('injection_footer_start'); }
function inject_footer_end_html() {
  echo get_option('injection_footer_end'); }
/*
* Register our settings
*/
function seravo_register_html() {
    register_setting('seravo-injects-group', 'injection_head_start');
    register_setting('seravo-injects-group', 'injection_head_end');
    register_setting('seravo-injects-group', 'injection_footer_start');
    register_setting('seravo-injects-group', 'injection_footer_end');
}


/*
* Registers the option page
*/
function seravo_register_options_page() {

    add_options_page(__('Simple Header Footer HTML', 'seravo-inject-html'), __('Header Footer HTML', 'seravo-inject-html'), 'administrator', __FILE__, 'seravo_build_settings_page');

}

/*
* Builds the admin settings page
*/

function seravo_build_settings_page() {
?>

    <style>

    /* Custom styles for Settings page */

    .form-table textarea {
        width: 440px;
        height: 140px;
    }

    </style>

    <div class="wrap">
    <h2><?php _e('Simple Header Footer HTML Settings', 'seravo-inject-html'); ?></h2>
    <p><?php _e('Here you can inject custom HTML directly into various useful spots within your theme. This is useful for custom meta tags in the header or for loading custom scripts into your page.', 'seravo-inject-html'); ?></p>
    <form method="post" action="options.php">
        <?php settings_fields('seravo-injects-group'); ?>
        <?php do_settings_sections('seravo-injects-group'); ?>
        <table class="form-table">
            <tr valign="top">
            <th scope="row"><?php _e('Start of &lt;head&gt; tag', 'seravo-inject-html'); ?></th>
            <td><textarea name="injection_head_start" placeholder="<!-- start of <head> tag -->"><?php echo get_option('injection_head_start'); ?></textarea></td>
            </tr>

            <tr valign="top">
            <th scope="row"><?php _e('Bottom of &lt;head&gt; tag', 'seravo-inject-html'); ?></th>
            <td><textarea name="injection_head_end" placeholder="<!-- bottom of <head> tag -->"><?php echo get_option('injection_head_end'); ?></textarea></td>
            </tr>

            <tr valign="top">
            <th scope="row"><?php _e('End of page (before footer scripts)', 'seravo-inject-html'); ?></th>
            <td><textarea name="injection_footer_start" placeholder="<!-- before footer scripts -->"><?php echo get_option('injection_footer_start'); ?></textarea></td>
            </tr>

            <tr valign="top">
            <th scope="row"><?php _e('After Footer Scripts', 'seravo-inject-html'); ?></th>
            <td><textarea name="injection_footer_end" placeholder="<!-- after footer scripts -->"><?php echo get_option('injection_footer_end'); ?></textarea></td>
            </tr>
        </table>

        <?php submit_button(); ?>

    </form>
    <p><small>Simple Header Footer HTML is made by folks at <a href="https://seravo.com/">Seravo.com</a>.</small></p></div>

    <?php

}
