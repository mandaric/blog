<?php

error_reporting(E_ALL);

define('APP_DIR', __DIR__);

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/routes/default.php';

require __DIR__ . '/../src/page/bootstrap.php';

dispatch();