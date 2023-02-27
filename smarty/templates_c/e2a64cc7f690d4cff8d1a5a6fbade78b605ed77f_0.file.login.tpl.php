<?php
/* Smarty version 4.3.0, created on 2023-02-27 11:42:28
  from 'C:\MAMP\htdocs\agcms\views\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fc97242cc796_00069185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a64cc7f690d4cff8d1a5a6fbade78b605ed77f' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\login.tpl',
      1 => 1677498143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fc97242cc796_00069185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38389627463fc97242bf324_53366136', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/mainlogin.tpl");
}
/* {block "body"} */
class Block_38389627463fc97242bf324_53366136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_38389627463fc97242bf324_53366136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <body id="login">
    <div class="login-box">
        <h2>Login</h2>

        <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?> 
        
        <form action="" method="post">
          <div class="user-box">
            <input type="email" name="email" id="email">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password">
            <label>Password</label>
          </div>
          <a type="submit" name="login" value="1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login
          </a>
        </form>
      </div>

<?php
}
}
/* {/block "body"} */
}
