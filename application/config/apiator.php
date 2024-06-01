<?php
/**
 * Created by PhpStorm.
 * User: vsergiu
 * Date: 6/19/18
 * Time: 11:51 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
define("CFG_DIR_BASEPATH",__DIR__."/../../dbconfigs");

$config["default_resource_access_read"] = true;
$config["default_resource_access_update"] = true;
$config["default_resource_access_insert"] = true;
$config["default_resource_access_delete"] = true;

$config["default_field_access_insert"] = true;
$config["default_field_access_update"] = true;
$config["default_field_access_select"] = true;
$config["default_field_access_sort"] = true;
$config["default_field_access_search"] = true;

$config["configs_dir"] = isset($_ENV["CONFIGS_DIR"]) ?  $_ENV["CONFIGS_DIR"]  : "/var/www/html/dbapi/dbconfigs";



// default record set page size
$config["default_relationships_page_size"] = 10;
$config["default_page_size"] = 100;
$config["max_page_size"] = 10000;

$config["configApiSecret"] = isset($_ENV["SECRET"]) ?  $_ENV["SECRET"]  : "myverysecuresecret";

$config["api_config_dir"] = function ($api_name) {
    global $config;
    return $config["configs_dir"] . "/" . $api_name;
};
