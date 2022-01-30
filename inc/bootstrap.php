<?php
require 'vendor/autoload.php';
define("PROJECT_ROOT_PATH", __DIR__ . "/../");

// include main configuration file
require_once PROJECT_ROOT_PATH . "/inc/config.php";

// include the base controller file
require_once PROJECT_ROOT_PATH . "/Controller/Api/BaseController.php";

// include the use model file
require_once PROJECT_ROOT_PATH . "/Model/UserModel.php";
require_once PROJECT_ROOT_PATH . "/Model/GroupModel.php";
require_once PROJECT_ROOT_PATH . "/Model/KlientModel.php";

//dodanie controlerow
require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";
require PROJECT_ROOT_PATH . "/Controller/Api/GroupController.php";
require PROJECT_ROOT_PATH . "/Controller/Api/KlientController.php";
?>