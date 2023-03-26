<?php

// get project info
$Company = new Company($Conn);


$company_data  = $_SESSION['company_data'];

// if($user_data['user_url'] == null){
//     echo "in";
//     $user_data['user_url'] = strtok($_SERVER["REQUEST_URI"], '?')."/images/placeholder.png";
// }


$smarty->assign("company_data", $company_data);

if (isset($_POST['changeCompany'])) {
    try {
        $errors = [];
        $company = $_POST['company'];
        $image = $_FILES['companyUrl']['name'];

        // Image Upload and Validation 
        $image_tmp = $_FILES['companyUrl']['tmp_name'];

        if($image_tmp == "" && $_POST['old_image'] == ""){
            $errors[] = "Please upload an image";
        }else{    

        $image_size = $_FILES['companyUrl']['size'];
        $image_type = $_FILES['companyUrl']['type'];
        $image_ext = strtolower(end(explode('.', $image)));
        $extensions = array("jpeg", "jpg", "png");
        var_dump($image_tmp);
        if ($image_tmp != "") {
            if (in_array($image_ext, $extensions) === false)  $errors[] = "This extension file is not allowed, please choose a JPEG or PNG file.";
            if ($image_size > 2097152) $errors[] = "File size must be exactly 2 MB";
        }}
        $imageUrl = $_POST['old_image'];
        if (empty($errors) == true && $image_tmp != "") {
            $imageUrl = putObject($image_tmp, $image);
        }


        if (empty($errors) == true) {

            $sql = "UPDATE sys SET company_name = :company_name, company_url = :company_url WHERE company_id = :company_id";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([
                ':company_name' => $company,
                ':company_url' => $imageUrl,
                ':company_id' => $company_data['company_id']
            ]);

            // update company sessions with new profile contnet
            $company_data['company_name'] = $company;
            $company_data['company_url'] = $companyUrl;
            $_SESSION['company_data'] = $company_data;


            $_SESSION['is_loggedin'] = true;
            $_GET['user_data'] = $user_data;

            header('Location: index.php?p=profile');
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}

//         $errors = [];
//         $name = $_POST['name'];
//         $role = $_POST['role'];
//         $image = $_FILES['profileUrl']['name'];
//         var_dump($image);

//         // Image Upload and Validation
//         $image_tmp = $_FILES['profileUrl']['tmp_name'];

//         if($image_tmp == "" && $_POST['old_image'] == ""){
//             $errors[] = "Please upload an image";
//         }else{    

//         $image_size = $_FILES['profileUrl']['size'];
//         $image_type = $_FILES['profileUrl']['type'];
//         $image_ext = strtolower(end(explode('.', $image)));
//         $extensions = array("jpeg", "jpg", "png");
//         var_dump($image_tmp);
//         if ($image_tmp != "") {
//             if (in_array($image_ext, $extensions) === false)  $errors[] = "This extension file is not allowed, please choose a JPEG or PNG file.";
//             if ($image_size > 2097152) $errors[] = "File size must be excately 2 MB";
//         }}
//         $imageUrl = $_POST['old_image'];
//         if (empty($errors) == true && $image_tmp != "") {
//             $imageUrl = putObject($image_tmp, $image);
//         }

//         if (empty($errors) == true) {
//             echo "in";

//             $sql = "UPDATE users SET user_name = :user_name, user_role = :user_role, user_url = :user_url WHERE user_id = :user_id";
//             $stmt = $Conn->prepare($sql);
//             $stmt->execute([
//                     ':user_name' => $name,
//                 ':user_role' => $role,
//                 ':user_url' => $imageUrl,    
//                 ':user_id' => $user_data['user_id']
//             ]);

//             // update user sessions with new profile contnet
//             $user_data['user_name'] = $name;
//             $user_data['user_role'] = $role;
//             $user_data['user_url'] = $imageUrl;
//             $_SESSION['user_data'] = $user_data;

        


//             header('Location: index.php?p=profile');
//             print_r($errors);
//         }
//     } catch (Exception $e) {
//         echo 'Caught exception: ', $e->getMessage();
//     }
// }

