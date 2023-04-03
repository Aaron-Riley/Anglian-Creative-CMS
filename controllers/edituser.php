<?php

// get project info
$User = new User($Conn);



$edit_user_data = $User->getUser($_GET['id']);

$errors=[];
$smarty->assign("errors", $errors);


$smarty->assign("edit_user_data", $edit_user_data);
if (isset($_POST['editUser'])) {
    try {
        $errors = [];
        $name = $_POST['name'];
        $role = $_POST['role'];
        $image = $_FILES['profileUrl']['name'];

        // Image Upload and Validation
        $image_tmp = $_FILES['profileUrl']['tmp_name'];

        if($image_tmp == "" && $_POST['old_image'] == ""){
            $errors[] = "Please upload an image";
        }else{    

        $image_size = $_FILES['profileUrl']['size'];
        $image_type = $_FILES['profileUrl']['type'];
        $image_ext = strtolower(end(explode('.', $image)));
        $extensions = array("jpeg", "jpg", "png");
        var_dump($image_tmp);
        if ($image_tmp != "") {
            if (in_array($image_ext, $extensions) === false)  $errors[] = "This extension file is not allowed, please choose a JPEG or PNG file.";
            if ($image_size > 2097152) $errors[] = "File size must be excately 2 MB";
        }}
        $imageUrl = $_POST['old_image'];
        if (empty($errors) == true && $image_tmp != "") {
            $imageUrl = putObject($image_tmp, $image);
        }

        if (empty($errors) == true) {
            echo "in";

            $sql = "UPDATE users SET user_name = :user_name, user_role = :user_role, user_url = :user_url WHERE user_id = :user_id";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([
                ':user_name' => $name,
                ':user_role' => $role,
                ':user_url' => $imageUrl,    
                ':user_id' => $_GET['id']
            ]);

       

        


            header('Location: /agcms/user');
            print_r($errors);
        }else{
            $smarty->assign("errors", $errors);
     
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}
