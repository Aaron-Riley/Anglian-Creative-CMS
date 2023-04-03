<?php
// get blog info
$Blog = new Blog($Conn);

$blogData = $Blog->getBlogById($_GET['id']);
$smarty->assign("blogData", $blogData);
