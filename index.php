<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL & ~E_NOTICE);


require_once(__DIR__ . '/includes/boot.include.php');

$smarty->assign('is_loggedin', false);

if ($_GET['p']) {
// Logout
    if ($_GET['p'] == 'logout') {
        session_destroy();
        $smarty->assign('is_loggedin', false);
        header("Location: /agcms");
        exit();
    }


    $secure_pages = [
        'dashboard', 'addblog', 'editblog', 'addproject', 'editprojects', 'adduser', 'edituser', 'blog', 'projects', 'user', 'editprofile', 'profile', 'editcompany', 'content', 'changepassword'
    ];

    if (in_array($_GET['p'], $secure_pages)) {
        if (!$_SESSION['is_loggedin']) {
            header("Location: /agcms/login");
            exit();
        }
    }

//check if logged in
    if ($_SESSION['is_loggedin']) {
        $smarty->assign('is_loggedin', true);
    }


    $smarty->assign('view_name', $_GET['p']);
    require_once('controllers/' . $_GET['p'] . '.php');
    $smarty->display('pages/' . $_GET['p'] . '.tpl');
} else {
    $smarty->assign('view_name', 'home');
    require_once('controllers/home.php');
    $smarty->display('pages/home.tpl');
}
