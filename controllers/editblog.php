<?php

// get blog info
$Blog = new Blog($Conn);

$blogData = $Blog->getBlogById($_GET['id']);
$smarty->assign("blogData", $blogData);

if (isset($_POST['changeBlog'])) {
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

            $sql = "UPDATE blog SET title = :title, content = :content, image_url = :image_url WHERE blog_id = :blog_id";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([
                ':title' => $title,
                ':content' => $content,
                ':image_url' => $imageUrl,
                ':blog_id' => $_GET['id']]);

            header('Location: index.php?p=editblog&id='.    $_GET['id']);
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}

if (isset($_POST['deleteBlog'])) {
    try {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image']['name'];


        if (empty($errors) == true) {
//Create SQL Statement where blog can be deleted
            $sql = "DELETE FROM blog WHERE blog_id = :blog_id";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([
                "blog_id" => $_GET['id']]);

            header('Location: index.php?p=blog');
        } else {
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}
