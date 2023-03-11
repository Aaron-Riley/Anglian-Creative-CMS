<?php

$Blog = new Blog($Conn);
$blogs = $Blog->getAllBlogs();

$smarty->assign("blogs", $blogs);