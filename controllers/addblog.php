<?php


if (isset($_POST['submitBlog'])) {
    try {
        $title = $_POST['title'];
        $content = $_POST['content'];
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


            $sql = "INSERT INTO blog (title, content, user_name, image_url) VALUES (?, ?, ?, ?)";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([$title, $content, $_SESSION['user_data']['user_name'], $imageUrl]);

            header('Location: /agcms/blog');
        } else {
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}
