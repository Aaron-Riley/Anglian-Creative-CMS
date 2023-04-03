<?php
session_start();

require_once(__DIR__.'/../vendor/autoload.php');

$smarty = new Smarty;
$smarty-> setTemplateDir(__DIR__.'/../views')
    ->setPluginsDir(array(__DIR__.'/../smarty/plugins'))
    ->setCompileDir(__DIR__.'/../smarty/templates_c')
    ->setCacheDir(__DIR__.'/../smarty/cache')
    ->setConfigDir(__DIR__.'/../smarty/configs');
    
require_once(__DIR__.'/config.include.php');
require_once(__DIR__.'/db.include.php');
require_once(__DIR__.'/autoloader.include.php');
require_once(__DIR__.'/s3.include.php');

if(isset($_SESSION['is_loggedin'])) {
    $User = new User($Conn);
    $active_user_data = $User->getUser($_SESSION['user_data']['user_id']);
    $smarty->assign('user_data', $active_user_data);
    $Company = new Company($Conn);
    $_SESSION['company_data'] = $Company->getCompany();
    $smarty->assign('company_data', $_SESSION['company_data']);
}