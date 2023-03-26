<?php
/* Smarty version 4.3.0, created on 2023-03-26 21:01:58
  from 'C:\MAMP\htdocs\agcms\views\pages\editprofile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6420b2c6d0e684_57841986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b7a102f4c3f877aef46d6fcd3f2e19874461fc2' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\editprofile.tpl',
      1 => 1679864514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6420b2c6d0e684_57841986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4218548946420b2c6d052f4_68267179', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_4218548946420b2c6d052f4_68267179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4218548946420b2c6d052f4_68267179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
    <div class="container">
    <div class="d-flex justify-content-start">
    <h1 class="d-flex align-items-center mt-3">
            <a href="index.php?p=profile" class="text-decoration-none text-white">
            <svg class="mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
            Profile
        </a>
        </h1>
    </div>

    <div id="profile" class="row mt-3 mb-5 text-white">
    <div class="col-lg-6">
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_url']) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_url'];?>
" class="mb-3" alt="Responsive image">
    <?php } else { ?>
        <img src="./images/placeholder.png" class="mb-3" alt="Responsive image">
    <?php }?>
      <h3><?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_name'];?>
</h3>
      <p><?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_role'];?>
</p>
    </div>

 
    </div>
    <form action="" method="post" class="form-light text-white" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="user_name">Change name</label>
            <input type="text" class="form-control" id="user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_name'];?>
" name="name">
        </div>
        <div class="form-group mb-3">
        <label for="user_name">Change role</label>
        <input type="text" class="form-control" id="user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_role'];?>
" name="role">
    </div>
        <div class="form-group">
            <label for="user_profile">Change profile picture</label>
            <input type="file" class="form-control-file mt-3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_url'];?>
" id="user_profile" name="profileUrl">
            <input type="hidden" name="old_image" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_url'];?>
">
        </div>
        <button type="submit" name="changeProfile" class="btn btn-primary mt-3 mb-5">Change details</button>
    </form>
  </div>
<?php
}
}
/* {/block "body"} */
}
