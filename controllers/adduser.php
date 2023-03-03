<?php
$error = null;
if ($_POST) {
    
    if (isset($_POST['addUser'])) {
      
        if (!$_POST['name']) {
            $error = "Name not set";
        } else if (!$_POST['email']) {
            $error = "Email not set";
        } else if (!$_POST['password']) {
            $error = "Password not set";
        } else if (!$_POST['password_confirm']) {
            $error = "Confirmed password not set";
        } else if ($_POST['password'] != $_POST['password_confirm']) {
            $error = "Password and confirm password must match";
        } else if (strlen($_POST['password']) < 8) {
            $error = "Password must be at least 8 characters in length";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Email is not vaild";
        }
            if ($error) {
                $smarty->assign('error', $error);
            } else {
                $User = new User($Conn);
                $attempt = $User->createUser($_POST);
           
                if ($attempt) {
                    $smarty->assign('success', 'Your account has been created. Please now login');
                } else {
                   
                    $smarty->assign('error', 'An error has occured, Please try again later. ');
                }
            }
        }
    }

