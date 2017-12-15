<?php
/**
 * Plugin Name:   JaneAlam Updater
 * Plugin URI:    http://janealam.com/wordpress-plugins/ja-updater
 * Description:   The ultimate WordPress Self-hoster Theme Updater
 * Author:        Jane Alam
 * Author URI:    http://janealam.com
 * Version:       0.0.1
 * Text Domain:   jane_alam
 *
 * GitHub Plugin URI: jane-alam/ja_updater
 * GitHub Plugin URI: https://github.com/jane-alam/ja_updater
 *
 * @package     ja_updater
 * @category    Core
 * @author      Jane Alam
 * @copyright   Copyright (c) 2017, Jane Alam
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once __DIR__ . '/init.php';
$MyThemeUpdateChecker = new ThemeUpdateChecker(
	'theme-slup', //Theme slug. Usually the same as the name of its directory.
	'http://i.janealam.com/info.json' //Metadata URL.
);
