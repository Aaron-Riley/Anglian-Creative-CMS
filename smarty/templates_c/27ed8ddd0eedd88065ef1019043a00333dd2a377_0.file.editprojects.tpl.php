<?php
/* Smarty version 4.3.0, created on 2023-03-17 12:11:23
  from 'C:\MAMP\htdocs\agcms\views\pages\editprojects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641458eba02735_41797125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ed8ddd0eedd88065ef1019043a00333dd2a377' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\editprojects.tpl',
      1 => 1679055078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641458eba02735_41797125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1777381490641458eb9e2c11_67410049', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_1777381490641458eb9e2c11_67410049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1777381490641458eb9e2c11_67410049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="d-flex justify-content-start">
            <h1 class="d-flex align-items-center mt-3">
                <a href="index.php?p=projects" class="text-decoration-none text-white">
                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                        <path
                            d="M469.3 19.3l23.4 23.4c25 25 25 65.5 0 90.5l-56.4 56.4L322.3 75.7l56.4-56.4c25-25 65.5-25 90.5 0zM44.9 353.2L299.7 98.3 413.7 212.3 158.8 467.1c-6.7 6.7-15.1 11.6-24.2 14.2l-104 29.7c-8.4 2.4-17.4 .1-23.6-6.1s-8.5-15.2-6.1-23.6l29.7-104c2.6-9.2 7.5-17.5 14.2-24.2zM249.4 103.4L103.4 249.4 16 161.9c-18.7-18.7-18.7-49.1 0-67.9L94.1 16c18.7-18.7 49.1-18.7 67.9 0l19.8 19.8c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1l45.1 45.1zM408.6 262.6l45.1 45.1c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1L496 350.1c18.7 18.7 18.7 49.1 0 67.9L417.9 496c-18.7 18.7-49.1 18.7-67.9 0l-87.4-87.4L408.6 262.6z" />
                    </svg>
                    Projects
                </a>
            </h1>
            <h1 class="d-flex align-items-center mt-3 mx-3">
                -
            </h1>
            <h1 class="d-flex align-items-center mt-3">
                <a href="#" class="text-decoration-none text-white">Edit Project</a>
            </h1>
        </div>
        <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="preview-tab" data-bs-toggle="tab" data-bs-target="#preview" type="button"
                        role="tab" aria-controls="preview" aria-selected="true">Preview</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button"
                        role="tab" aria-controls="edit" aria-selected="false">Edit</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="preview" role="tabpanel" aria-labelledby="preview-tab">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['projectData']->value['image_url'];?>
" />
                    <div class="container">
                        <h2 class="mt-5 d-flex align-items-center"><?php echo $_smarty_tpl->tpl_vars['projectData']->value['title'];?>
</h2>

                        <div class="text-white"><?php echo $_smarty_tpl->tpl_vars['projectData']->value['content'];?>
</div>
                    </div>
                </div>
                <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <h3 class="mt-5 d-flex align-items-center text-white">Title</h3>
                            <input name="title" type="text" class="form-control d-flex align-items-center"
                                placeholder="Title" value="<?php echo $_smarty_tpl->tpl_vars['projectData']->value['title'];?>
">
                            <h3 class="mt-5 d-flex align-items-center text-white">Content</h3>
                            <textarea id="editor" name="content" placeholder="Tell your story...">
                                <?php echo $_smarty_tpl->tpl_vars['projectData']->value['content'];?>


                                </textarea>
                        </div>
                        <div class="container">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['projectData']->value['image_url'];?>
" />
                            <h3 class="mt-5 d-flex align-items-center text-white">Featured Image</h3>
                            <input type="file" name="image" class="form-control d-flex align-items-center"
                                placeholder="Title">
                                <input type="hidden" name="old_image" value="<?php echo $_smarty_tpl->tpl_vars['projectData']->value['image_url'];?>
">
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary mt-5 px-3 mr-2"
                                    name="changeProject">Submit</button>
                                <button type="submit" class="btn btn-secondary mt-5 px-3"
                                    name="deleteProject">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


    

        </div>




<?php
}
}
/* {/block "body"} */
}
