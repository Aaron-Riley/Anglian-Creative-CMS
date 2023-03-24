<?php

// get project info
$Company = new Company($Conn);


var_dump($_SESSION);

$user_data  = $_SESSION['company_data'];

// if($user_data['user_url'] == null){
//     echo "in";
//     $user_data['user_url'] = strtok($_SERVER["REQUEST_URI"], '?')."/images/placeholder.png";
// }

$smarty->assign("company_data", $company_data);

if (isset($_POST['changeCompany'])) {
    echo "in";
    try {
        $errors = [];
        $name = $_POST['name'];
        $role = $_POST['role'];
        $profileUrl = $_FILES['profileUrl']['name'];
        $comany = $_POST['company'];
        $companyUrl = $_FILES['companyUrl']['name'];
        $old_profileUrl = $_POST['old_profileUrl'];
        $old_companyUrl = $_POST['old_companyUrl'];

        // Image Upload and Validation 
        function imageUpload($image_tmp, $old_image, $image)
        {
            // $image_tmp = $_FILES['image']['tmp_name'];

            if ($image_tmp == "" && $old_image == "") {
                $errors[] = "Please upload an image";
            } else {


                $image_ext = strtolower(end(explode('.', $image)));
                $extensions = array("jpeg", "jpg", "png");

                if ($image_tmp != "") {
                    if (in_array($image_ext, $extensions) === false)  $errors[] = "This extension file is not allowed, please choose a JPEG or PNG file.";
                }
            }

            if (empty($errors) == true && $image_tmp != "") {
                return putObject($image_tmp, $image);
            } else {
                return $old_image;
            }
        }

        $$profileUrl = imageUpload($_FILES['profileUrl']['tmp_name'], $user_data['image_url'], $profileUrl);
        $$companyUrl = imageUpload($_FILES['companyUrl']['tmp_name'], $user_data['image_url'], $companyUrl);

        if (empty($errors) == true) {
            echo "in";

            $sql = "UPDATE users SET user_name = :user_name, user_role = :user_role, company_id = :company_id, image_url = :image_url WHERE user_id = :user_id";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':role' => $role,
                ':image_url' => $profileUrl,
                ':company' => $company,
                ':image_url' => $companyUrl,
            ]);


            $_SESSION['is_loggedin'] = true;
            $_GET['user_data'] = $user_data;

            header('Location: index.php?p=editprojects&id=' .    $_GET['id']);
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}
