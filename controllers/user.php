<?php

$User = new User($Conn);
$userData = $User->getAllUsers();

$smarty->assign("users", $userData);