<?php
chdir(dirname(__FILE__));
define('ROOT_DIR', dirname(dirname(__FILE__) . "../"));
define('TEMPLATE_DIR', ROOT_DIR . '\template');

require_once("../vendor/autoload.php");
require_once("autoloader.inc.php");
require_once ("config.inc.php");
require_once ("database.inc.php");

dbInitConnect();