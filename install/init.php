<?php
require_once 'functions.php';
require_once 'htmlpages.php';

// enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_error_handler("_handleError",E_ALL); // handle errors

define('ROOT','../');

include ROOT+'config.php';