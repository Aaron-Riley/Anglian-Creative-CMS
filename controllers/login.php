<?php
if ($_POST) {

    if ($_POST['login']) {
        if (!$_POST['email']) {
            $error = "Email not set";
        } else if (!$_POST['password']) {
            $error = "Password not set";
        } else if (strlen($_POST['password']) < 8) {
            $error = "Password must be at least 8 characters in length";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Email is not vaild";
        }


        if ($error) {
            $smarty->assign('error', $error);
        } else {
            $User = new User($Conn);
            $user_data = $User->loginUser($_POST['email'], $_POST['password']);

            if ($user_data) {
                echo "in";
                $_SESSION['is_loggedin'] = true;
                $_SESSION['user_data'] = $user_data;
                header("Location: index.php?p=profile");
                exit();
            } else {
                $smarty->assign('error', "Incorrect Email/Password");
            }
        }
    }
}
