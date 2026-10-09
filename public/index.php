<?php

if (!defined('XML_PI_NODE')) {
    define('XML_PI_NODE', 7);
}
if (!defined('XML_COMMENT_NODE')) {
    define('XML_COMMENT_NODE', 8);
}

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
