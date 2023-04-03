<?php

$Blog = new Blog($Conn);
$blogs = $Blog->getAllBlogsInOrder();

$smarty->assign("blogs", $blogs);