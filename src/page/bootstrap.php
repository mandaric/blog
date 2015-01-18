<?php

define('PAGE_DIR', __DIR__);

config(parse_ini_file(__DIR__ . '/config.ini'));

require __DIR__ . '/routes/admin.php';

require __DIR__ . '/routes/default.php';