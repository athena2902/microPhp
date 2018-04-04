<?php

define('CONTROLLER_NAMESPACE', '\\App\\Controllers\\');

require_once 'helpers.php';
define('APP_URL', siteUrl());

define('APP_DIR', BASE_DIR . 'app/');
define('MODEL_DIR', APP_DIR . 'Models/');
define('VIEW_DIR', APP_DIR . 'Views/');
define('CONTROLLER_DIR', APP_DIR . 'Controllers/');
define('REPOSITORY_DIR', APP_DIR . 'Repositories/');

