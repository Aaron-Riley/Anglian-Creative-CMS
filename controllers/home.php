<?php
$Project = new Project($Conn);
$projects = $Project->getAllProjectsInOrder();

$smarty->assign("projects", $projects);

$User = new User($Conn);
$userData = $User->getAllUsers();

$smarty->assign("users", $userData);

$Content = new Content($Conn);
$contentData = $Content->getAllContent();

$smarty->assign("contentData", $contentData[0]);