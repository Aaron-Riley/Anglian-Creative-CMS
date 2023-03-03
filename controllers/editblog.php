<?php


if (isset($_POST['changeBlog'])) {
    try {
        $title = $_POST['title'];
        $content = null;
        $image = $_FILES['image']['name'];

        // Image Upload and Validation 
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $image_type = $_FILES['image']['type'];
        $image_ext = strtolower(end(explode('.', $image)));
        $extensions = array("jpeg", "jpg", "png");
        if (in_array($image_ext, $extensions) === false)  $errors[] = "This extension file is not allowed, please choose a JPEG or PNG file.";
        if ($image_size > 2097152) $errors[] = "File size must be excately 2 MB";


        if (empty($errors) == true) {
            $imageUrl = putObject($image_tmp, $image);


            $sql = "UPDATE blog SET (title, content, user_name, image_url) VALUES (?, ?, ?, ?)";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([$title, $content, $_SESSION, $imageUrl]);

            header('Location: index.php?p=blog');
        } else {
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}



if (isset($_POST['deleteBlog'])) {
    try {
        $title = $_POST['title'];
        $content = null;
        $image = $_FILES['image']['name'];

        // Image Upload and Validation 
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $image_type = $_FILES['image']['type'];
        $image_ext = strtolower(end(explode('.', $image)));
        $extensions = array("jpeg", "jpg", "png");
        if (in_array($image_ext, $extensions) === false)  $errors[] = "This extension file is not allowed, please choose a JPEG or PNG file.";
        if ($image_size > 2097152) $errors[] = "File size must be excately 2 MB";


        if (empty($errors) == true) {
            $imageUrl = putObject($image_tmp, $image);

//Create SQL Statement where latest blog uploaded is the one deleted
            $sql = "DELETE FROM blog WHERE blog_id = ?";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([$title, $content, $_SESSION['user_data']['user_name'], $imageUrl]);

            header('Location: index.php?p=blog');
        } else {
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}
