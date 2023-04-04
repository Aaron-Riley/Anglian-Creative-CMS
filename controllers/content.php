<?php

$Content = new Content($Conn);

$contentData = $Content->getAllContent();


$errors = [];
$smarty->assign("errors", $errors);

$smarty->assign("contentData", $contentData[0]);

// create edit content function
if (isset($_POST['changeContent'])) {
    try {
        $errors = [];
        $hero_title = $_POST['hero_title'];
        $hero_content = $_POST['hero_content'];
        $article_title = $_POST['article_title'];
        $article_content = $_POST['article_content'];
        $about_title = $_POST['about_title'];
        $about_content = $_POST['about_content'];
        $mission_title = $_POST['mission_title'];
        $mission_content = $_POST['mission_content'];
        $mission_quote = $_POST['mission_quote'];

        // Image Upload and Validation
        function imageUpload($image, $old_image)
        {


            // Image Upload and Validation
            $image_tmp = $image['tmp_name'];
            if ($image_tmp == "" && $old_image == "") {
                $errors[] = "Please upload an image";
            } else {

                $image_size = $image['size'];
                $image_type = $image['type'];
                $image_ext = strtolower(end(explode('.', $image['name'])));
                $extensions = array("jpeg", "jpg", "png");
                if ($image_tmp != "") {
                    if (in_array($image_ext, $extensions) === false)  $errors[] = "This extension file is not allowed, please choose a JPEG or PNG file.";
                    if ($image_size > 2097152) $errors[] = "File size must be excately 2 MB";
                }
            }
            $imageUrl = $old_image;
            if (empty($errors) == true && $image_tmp != "") {
                $imageUrl = putObject($image_tmp, $image['name']);
            }
   
            return $imageUrl;
        }

$aboutImageUrl = imageUpload($_FILES['image_about'], $_POST['old_image_about']);
$heroImageUrl = imageUpload($_FILES['image_hero'], $_POST['old_image_hero']);
$missionImageUrl = imageUpload($_FILES['image_mission'], $_POST['old_image_mission']);


        if (empty($errors) == true) {
            $sql = "UPDATE content SET hero_title = :hero_title, hero_content = :hero_content, hero_url = :hero_url, article_title = :article_title, article_content = :article_content, about_title = :about_title, about_content = :about_content, about_url = :about_url, mission_title = :mission_title, mission_content = :mission_content, mission_url = :mission_url, mission_quote = :mission_quote WHERE content_id = :content_id";
            $stmt = $Conn->prepare($sql);
            $stmt->execute([
                ':hero_title' => $hero_title,
                ':hero_content' => $hero_content,
                ':hero_url' => $heroImageUrl,
                ':article_title' => $article_title,
                ':article_content' => $article_content,
                ':about_title' => $about_title,
                ':about_content' => $about_content,
                ':about_url' => $aboutImageUrl,
                ':mission_title' => $mission_title,
                ':mission_content' => $mission_content,
                ':mission_url' => $missionImageUrl,
                ':mission_quote' => $mission_quote,
                ':content_id' => 1
            ]);

            header('Location: /agcms/home/');
            print_r($errors);
        }
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage();
    }
}
