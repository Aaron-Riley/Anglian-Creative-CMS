<?php
$Project = new Project($Conn);
$projects = $Project->getAllProjects();

$smarty->assign("projects", $projects);