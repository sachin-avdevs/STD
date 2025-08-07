<?php // -- CBA Global Configuration - Version # 25080601 -- ?>
<?php
/**
 * config.php
 *
 * This file contains global configuration settings for the project.
 * You can add any other global variables or constants that you need.
 */

// Define the project base URL dynamically
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST']);

// Optionally, you can also define the document root for convenience
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);

define('SITE_NAME', 'CBA Development');

// Other configuration options (can be expanded as needed)
include __DIR__ . '/dbc.php';
