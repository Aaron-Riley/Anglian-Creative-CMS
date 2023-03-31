<?php
/* Smarty version 4.0.4, created on 2023-03-31 21:02:02
  from 'C:\MAMP\htdocs\agcms\views\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_64274a4a88b947_18369097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a3b050ae583f7513d0ad574094329071d8d9c23' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\login.tpl',
      1 => 1680296519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64274a4a88b947_18369097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120996437264274a4a877e75_32428068', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/mainlogin.tpl");
}
/* {block "body"} */
class Block_120996437264274a4a877e75_32428068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_120996437264274a4a877e75_32428068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
          <button type="submit" name="login" value="1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Login
          </button>
        </form>
      </div>

<?php
}
}
/* {/block "body"} */
}
