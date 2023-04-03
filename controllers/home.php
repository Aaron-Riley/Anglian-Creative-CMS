<?php
$Project = new Project($Conn);
$projects = $Project->getAllProjectsInOrder();

$smarty->assign("projects", $projects);

$User = new User($Conn);
$userData = $User->getAllUsers();

$smarty->assign("users", $userData);