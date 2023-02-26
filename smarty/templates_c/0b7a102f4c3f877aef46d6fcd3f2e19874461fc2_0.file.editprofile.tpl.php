<?php
/* Smarty version 4.3.0, created on 2023-02-26 15:42:34
  from 'C:\MAMP\htdocs\agcms\views\pages\editprofile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fb7deae2a5b7_05689038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b7a102f4c3f877aef46d6fcd3f2e19874461fc2' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\editprofile.tpl',
      1 => 1677426152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fb7deae2a5b7_05689038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36206445163fb7deae27dd4_22070278', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_36206445163fb7deae27dd4_22070278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_36206445163fb7deae27dd4_22070278',
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

    <div class="row mt-3 mb-5">
    <div class="col-lg-6">
      <img src="https://github.com/mdo.png" class="mb-3" alt="Responsive image">
      <h3>Username</h3>
      <p>Role</p>
      </div>
    <div class="col-lg-6">
    <img src="/images/logo.svg" class="mb-3" alt="Responsive image">
    <h3>Company Name</h3>
    </div>
    <div class="container">
        <a href="index.php?p=password" class="btn btn-primary">Change Password</a>
        <a href="index.php?p=editprofile" class="btn btn-secondary">Edit Profile</a>
    </div>
    <form action="" method="post" class="form-light" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="user_name">Change name</label>
            <input type="text" class="form-control" id="user_name" value="Aaron" name="user_name">
        </div>
        <div class="form-group mb-3">
        <label for="user_name">Change role</label>
        <input type="text" class="form-control" id="user_name" value="Global Administrator" name="user_role">
    </div>
        <div class="form-group">
            <label for="user_profile">Change profile picture</label>
            <input type="file" class="form-control-file mt-3" value="f82485933c273937127_251040530556837_7131760453107023571_n.jpg" id="user_profile" name="user_profile">
        </div>
        <div class="form-group mb-3">
        <label for="user_name">Change company name</label>
        <input type="text" class="form-control" id="user_name" value="Anglian Creative" name="user_company">
    </div>
        <div class="form-group">
            <label for="user_profile">Change company picture</label>
            <input type="file" class="form-control-file mt-3" value="f82485933c273937127_251040530556837_7131760453107023571_n.jpg" id="user_profile" name="user_profile">
        </div>
        <button type="submit" class="btn btn-primary mt-3 mb-5">Change details</button>
    </form>
  </div>
<?php
}
}
/* {/block "body"} */
}
