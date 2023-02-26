<?php
require_once(__DIR__.'/includes/boot.include.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);

if(isset($_GET['p'])) {
    $secure_pages = array('home', 'profile', 'addblog', 'editblog', 'addproject', 'editprojects', 'adduser', 'edituser', 'blog', 'projects', 'user');

    if(in_array($_GET['p'], $secure_pages)) {
        if(!($_SESSION['is_loggedin'])) {
            header('Location: index.php?p=login.php');
            exit;
        }
    }
    
    $smarty->assign('view_name', $_GET['p']);
    require_once('controllers/'.$_GET['p'].'.php');
    $smarty->display('pages/'.$_GET['p'].'.tpl');
}else{
    $smarty->assign('view_name', 'home');
    require_once('controllers/home.php');
    $smarty->display('pages/home.tpl');   
}