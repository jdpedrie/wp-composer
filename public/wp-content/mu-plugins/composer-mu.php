<?php

/*
Plugin Name: Composer Bootstrapper
Author: John Dennis Pedrie <john@pedrie.com>
Author URI: http://johnpedrie.com
Description: Setup required dependencies and environment information. NOTE: This plugin requires a <pre>vendor/</pre> folder with a valid Composer Autoload file in the WordPress Root Folder.
*/

require_once ABSPATH .'../../vendor/autoload.php';