<?php
$Project = new Project($Conn);
$projects = $Project->getAllProjectsInOrder();

$smarty->assign("projects", $projects);