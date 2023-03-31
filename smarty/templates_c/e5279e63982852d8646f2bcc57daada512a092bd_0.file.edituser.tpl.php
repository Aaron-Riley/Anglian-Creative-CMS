<?php
/* Smarty version 4.3.0, created on 2023-03-31 17:13:16
  from 'C:\MAMP\htdocs\agcms\views\pages\edituser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642714ac7fc3c6_00805237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5279e63982852d8646f2bcc57daada512a092bd' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\edituser.tpl',
      1 => 1680282794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642714ac7fc3c6_00805237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1949864389642714ac7dea65_06085282', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_1949864389642714ac7dea65_06085282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1949864389642714ac7dea65_06085282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
    <div class="container">
    <div class="d-flex justify-content-start">
    <h1 class="d-flex align-items-center mt-3">
    <a href="index.php?p=user" class="text-decoration-none text-white">
    <svg class="mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
      <path
        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
    </svg>
    Users - Edit User
    </a>
        </h1>
    </div>

    <div id="profile" class="row mt-3 mb-5 text-white">
    <div class="col-lg-6">
    <?php if ($_smarty_tpl->tpl_vars['edit_user_data']->value['user_url']) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['edit_user_data']->value['user_url'];?>
" class="mb-3" alt="Responsive image">
    <?php } else { ?>
        <img src="./images/placeholder.png" class="mb-3" alt="Responsive image">
    <?php }?>
      <h3><?php echo $_smarty_tpl->tpl_vars['edit_user_data']->value['user_name'];?>
</h3>
      <p><?php echo $_smarty_tpl->tpl_vars['edit_user_data']->value['user_role'];?>
</p>
    </div>

 
    </div>
    <form action="" method="post" class="form-light text-white" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="user_name">Change name</label>
            <input type="text" class="form-control" id="user_name" value="<?php echo $_smarty_tpl->tpl_vars['edit_user_data']->value['user_name'];?>
" name="name">
        </div>
        <div class="form-group mb-3">
        <label for="user_name">Change role</label>
        <input type="text" class="form-control" id="user_name" value="<?php echo $_smarty_tpl->tpl_vars['edit_user_data']->value['user_role'];?>
" name="role">
    </div>
        <div class="form-group">
            <label for="user_profile">Change user picture</label>
            <input type="file" class="form-control-file mt-3" value="<?php echo $_smarty_tpl->tpl_vars['edit_user_data']->value['user_url'];?>
" id="user_profile" name="profileUrl">
            <input type="hidden" name="old_image" value="<?php echo $_smarty_tpl->tpl_vars['edit_user_data']->value['user_url'];?>
">
        </div>
        <button type="submit" name="editUser" class="btn btn-primary mt-3 mb-5">Change details</button>
                <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

        </div>
        <?php }?>
        
    </form>
  </div>
<?php
}
}
/* {/block "body"} */
}
