<?php

namespace SSM\RequiredPlugins;

use SSM\RequiredPlugins\Loader;

/**
 * Plugin
 */
if (!defined('ABSPATH')) {
    die;
};

require(file_exists($composer = __DIR__ . '/vendor/autoload.php') ? $composer : __DIR__ . '/dist/autoload.php');

/**
 * Hook
 */
add_action('after_setup_theme', function () {
    new Loader();
});
