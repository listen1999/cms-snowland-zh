<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['legacy_member_templates'] = 'y';
$config['allow_php'] = 'n';
$config['index_page'] = 'index.php';
$config['is_system_on'] = 'y';
$config['multiple_sites_enabled'] = 'n';
$config['show_ee_news'] = 'n';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '6.2.3';
$config['encryption_key'] = 'd32a93196923054fd2bf3a385792f94b54251aee';
$config['session_crypt_key'] = '73a276c1aa38368c1671658c8c8cf03f24bfeee5';
$config['database'] = array(
        'expressionengine' => array(
                'hostname' => 'localhost',
                'database' => 'cms-snowland-zh',
                'username' => 'root',
                'password' => 'l2220167',
                'dbprefix' => 'exp_',
                'char_set' => 'utf8mb4',
                'dbcollat' => 'utf8mb4_unicode_ci',
                'port'     => ''
        ),
);
$config['share_analytics'] = 'y';

// EOF