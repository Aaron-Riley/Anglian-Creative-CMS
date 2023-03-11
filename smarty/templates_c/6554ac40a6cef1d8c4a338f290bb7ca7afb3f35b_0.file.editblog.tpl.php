<?php
/* Smarty version 4.3.0, created on 2023-03-10 14:37:09
  from 'C:\MAMP\htdocs\agcms\views\pages\editblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640b4095c594d8_89536952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6554ac40a6cef1d8c4a338f290bb7ca7afb3f35b' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\editblog.tpl',
      1 => 1678459026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640b4095c594d8_89536952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_711326776640b4095c575a6_80490485', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_711326776640b4095c575a6_80490485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_711326776640b4095c575a6_80490485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
            
    <div class="d-flex justify-content-start">
        <h1 class="d-flex align-items-center mt-3">
                <a href="index.php?p=blog" class="text-decoration-none text-white">
                <svg class="mr-3"
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                Blog
            </a>
            </h1>
            <h1 class="d-flex align-items-center mt-3 mx-3">
                -
            </h1>
            <h1 class="d-flex align-items-center mt-3">
                <a href="#" class="text-decoration-none text-white">Edit Blog</a>
            </h1>
        </div>
        <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <h3 class="mt-5 d-flex align-items-center">Title</h3>
            <input name="title" type="text" class="form-control d-flex align-items-center" placeholder="Title">
            <h3 class="mt-5 d-flex align-items-center">Content</h3>
                <textarea id="editor" name="content" placeholder="Tell your story...">
             
                </textarea>
        </div>
        <div class="container">
            <h3 class="mt-5 d-flex align-items-center">Featured Image</h3>
            <input type="file" name="image" class="form-control d-flex align-items-center" placeholder="Title">
            <div class="d-flex justify-content-start">
                <button type="submit" class="btn btn-primary mt-5 px-3 mr-2" name="changeBlog">Submit</button>
                <button type="submit" class="btn btn-secondary mt-5 px-3" name="deleteBlog">Delete</button>
            </div>
        </div>
    </form>

<?php
}
}
/* {/block "body"} */
}
