<?php

if (!defined('XML_PI_NODE')) {
    define('XML_PI_NODE', 7);
}
if (!defined('XML_COMMENT_NODE')) {
    define('XML_COMMENT_NODE', 8);
}

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (method_exists(Dotenv::class, 'bootEnv')) {
    (new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
}

if ($_SERVER['APP_DEBUG']) {
    umask(0000);
}
