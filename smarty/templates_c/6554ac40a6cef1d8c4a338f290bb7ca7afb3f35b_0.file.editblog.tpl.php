<?php
/* Smarty version 4.0.4, created on 2023-04-04 10:34:30
  from 'C:\MAMP\htdocs\agcms\views\pages\editblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_642bfd36254516_51576320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6554ac40a6cef1d8c4a338f290bb7ca7afb3f35b' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\editblog.tpl',
      1 => 1680528630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642bfd36254516_51576320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1837171741642bfd361fbc86_90071956', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_1837171741642bfd361fbc86_90071956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1837171741642bfd361fbc86_90071956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">

        <div class="d-flex justify-content-start">
            <h1 class="d-flex align-items-center mt-3">
                <a href="/agcms/blog" class="text-decoration-none text-white">
                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                    </svg>
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

        <div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="preview-tab" data-bs-toggle="tab" data-bs-target="#preview"
                        type="button" role="tab" aria-controls="preview" aria-selected="true">Preview</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button"
                        role="tab" aria-controls="edit" aria-selected="false">Edit</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="preview" role="tabpanel" aria-labelledby="preview-tab">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['blogData']->value['image_url'];?>
" />
                    <div class="container">
                        <h2 class="mt-5 d-flex align-items-center"><?php echo $_smarty_tpl->tpl_vars['blogData']->value['title'];?>
</h2>

                        <div class="text-white"><?php echo $_smarty_tpl->tpl_vars['blogData']->value['content'];?>
</div>
                    </div>
                </div>
                <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <h3 class="mt-5 d-flex align-items-center text-white">Title</h3>
                            <input name="title" type="text" class="form-control d-flex align-items-center"
                                placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['blogData']->value['title'];?>
">
                            <h3 class="mt-5 d-flex align-items-center text-white">Content</h3>
                            <textarea id="editor" name="content" placeholder="Tell your story...">
                                    <?php echo $_smarty_tpl->tpl_vars['blogData']->value['content'];?>


                                    </textarea>
                        </div>
                        <div class="container">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['blogData']->value['image_url'];?>
" />
                            <h3 class="mt-5 d-flex align-items-center text-white">Featured Image</h3>
                            <input type="file" name="image" class="form-control d-flex align-items-center"
                                placeholder="Title">
                                <input type="hidden" name="old_image" value="<?php echo $_smarty_tpl->tpl_vars['blogData']->value['image_url'];?>
">
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mt-5 px-3 mr-2"
                                    name="changeBlog">Submit</button>
                                <button type="submit" class="btn btn-secondary mt-5 px-3"
                                    name="deleteBlog">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "body"} */
}
