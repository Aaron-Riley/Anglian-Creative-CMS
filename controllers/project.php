<?php

// get project info
$Project = new Project($Conn);

$projectData = $Project->getProjectById($_GET['id']);
$smarty->assign("projectData", $projectData);

