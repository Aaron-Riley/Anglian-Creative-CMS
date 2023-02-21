<?php
/* Smarty version 4.3.0, created on 2023-02-21 11:02:53
  from 'C:\MAMP\htdocs\agcms\views\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f4a4ddc48255_98274956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a64cc7f690d4cff8d1a5a6fbade78b605ed77f' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\login.tpl',
      1 => 1676977370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f4a4ddc48255_98274956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119348765563f4a4ddc47c08_84175368', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/mainlogin.tpl");
}
/* {block "body"} */
class Block_119348765563f4a4ddc47c08_84175368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_119348765563f4a4ddc47c08_84175368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <body id="login">
    <div class="login-box">
        <h2>Login</h2>
        <form>
          <div class="user-box">
            <input type="text" name="" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="" required="">
            <label>Password</label>
          </div>
          <a href="index.html">
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
