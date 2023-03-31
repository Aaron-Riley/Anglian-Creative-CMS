<?php
if ($_POST) {

    if ($_POST['login']) {
        if (!$_POST['email']) {
            $error = "Email not set";
        } else if (!$_POST['password']) {
            $error = "Password not set";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Email is not vaild";
        }


        if (isset($error)) {
            $smarty->assign('error', $error);
        } else {
            $User = new User($Conn);

        

            $user_data = $User->loginUser($_POST['email'], $_POST['password']);
            if ($user_data) {


        
                $_SESSION['is_loggedin'] = true;
                $_SESSION['user_data'] = $user_data;

                // get company data and add it to a comapny_data session
                $Company = new Company($Conn);
                $_SESSION['company_data'] = $Company->getCompany();
                $smarty->assign('company_data', $_SESSION['company_data']);
                var_dump($_SESSION['company_data']);
                header("Location: /agcms/profile");
                exit();
            } else {
                $smarty->assign('error', "Incorrect Email/Password");
            }
        }
    }
}
