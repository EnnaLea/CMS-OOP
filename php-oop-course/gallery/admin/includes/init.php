<?php


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', 'C:' . DS . 'MAMP' . DS . 'htdocs' . DS . 'PHP OOP' . DS . 'CMS-OOP' . DS . 'php-oop-course' . DS . 'gallery');

define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_objects.php");
require_once("user_class.php");
require_once("photo.php");
require_once("session.php");
