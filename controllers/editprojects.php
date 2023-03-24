<?php

// get project info
$Project = new Project($Conn);

$projectData = $Project->getProjectById($_GET['id']);
$smarty->assign("projectData", $projectData);


if (isset($_POST['changeProject'])) {
    try {
        $errors = [];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image']['name'];

        // Image Upload and Validation 
        $image_tmp = $_FILES['image']['tmp_name'];

        if($image_tmp == "" && $_POST['old_image'] == ""){
            $errors[] = "Please upload an image";
        }else{    

        $image_size = $_FILES['image']['size'];
        $image_type = $_FILES['image']['type'];
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

            $sql = "UPDATE projects SET title = :title, content = :content, image_url = :image_url WHERE project_id = :project_id";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':content' => $content,
                ':image_url' => $imageUrl,
                ':project_id' => $_GET['id']]);

            header('Location: index.php?p=editprojects&id='.    $_GET['id']);
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}



if (isset($_POST['deleteProject'])) {
    try {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image']['name'];


        if (empty($errors) == true) {
//Create SQL Statement where project can be deleted
            $sql = "DELETE FROM projects WHERE project_id = :project_id";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([
                "project_id" => $_GET['id']]);

            header('Location: index.php?p=projects');
        } else {
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}
 