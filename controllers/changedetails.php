<?php

//This need to include user name, profile picture, company name and company logo changes.

if ($_POST) {
    if (!$_POST['user_name']) {
        $error = "Name not set";
    } else if (!$_POST['user_bio']) {
        $error = "Bio not set";
    } else if (!$_FILES['user_profile']['name']) {
        $error = "Please upload a profile picture image";
    }
    if ($error) {
        $smarty->assign('error', $error);
    } else {
        $random = substr(str_shuffle(MD5(microtime())), 0, 10);
        $new_filename = $random . $_FILES['user_profile']['name'];

        if (move_uploaded_file($_FILES['user_profile']['tmp_name'], __DIR__ . '/../user-images/' . $new_filename)) {

            $Profile = new Profile($Conn);
            $_POST['user_profile'] = $new_filename;
            $attempt = $Profile->addProfile([
                "user_profile" => $new_filename,
                "user_name" => $_POST['user_name'],
                "user_bio" => $_POST['user_bio']
            ]);

            if ($attempt) {
                $smarty->assign('success', "Your profile has been changed.");
            } else {
                $smarty->assign('error', "An error occurred.");
            }
        }
    }
}
