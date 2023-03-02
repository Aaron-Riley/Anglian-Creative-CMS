<?php
/* Smarty version 4.3.0, created on 2023-03-02 17:46:07
  from 'C:\MAMP\htdocs\agcms\views\pages\adduser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6400e0df874651_32555471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e471730a54c36f1867dbd6bc0057b80ee4d654ed' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\adduser.tpl',
      1 => 1677779164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6400e0df874651_32555471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15081764416400e0df86c835_02066995', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_15081764416400e0df86c835_02066995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15081764416400e0df86c835_02066995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="content">

    <div class="d-flex justify-content-start">
      <h1 class="d-flex align-items-center mt-3">
        <a href="index.php?p=user" class="text-decoration-none text-white">
          <svg class="mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
              d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
          </svg>
          Users
        </a>
      </h1>
      <h1 class="d-flex align-items-center mt-3 mx-3">
        -
      </h1>
      <h1 class="d-flex align-items-center mt-3">
        <a href="#" class="text-decoration-none text-white">Add New User</a>
      </h1>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
      <div class="alert alert-danger" role="alert">
          <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

      </div>
  <?php }?>

 <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
      <div class="alert alert-success" role="alert">
          <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

      </div>
  <?php }?>


    <form method="POST" enctype="multipart/form-data">
        <div class="container">
          <h3 class="mt-5 d-flex align-items-center">Name</h3>
          <input type="text" class="form-control d-flex align-items-center" name="name" id="name" placeholder="Name">
          <h3 class="mt-5 d-flex align-items-center">Email</h3>
          <input type="email" class="form-control d-flex align-items-center" name="email" id="email" placeholder="Email">
          <h3 class="mt-5 d-flex align-items-center">Password</h3>
          <input type="password" class="form-control d-flex align-items-center" name="password" id="password" placeholder="Password">
          <h3 class="mt-5 d-flex align-items-center">Confirm Password</h3>
          <input type="password" class="form-control d-flex align-items-center" name="password_confirm" id="password_confirm" placeholder="Repeat Password">
          <div class="container">
          <h3 class="mt-5 d-flex align-items-center">Featured Image</h3>
          <div class="form-group">
          <input type="file" class="form-control-file mt-3" value="f82485933c273937127_251040530556837_7131760453107023571_n.jpg" id="user_url" name="user_url">
          </div>  
          <h3 class="mt-5 d-flex align-items-center">Role</h3>
     
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" disabled>
            <label class="form-check-label" for="flexCheckDefault">
              Global Administrator
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="2" id="flexCheckChecked" disabled>
            <label class="form-check-label" for="flexCheckChecked">
             Developer
            </label>
          </div>
          <div class="form-check">
          <input class="form-check-input" type="checkbox" value="3" id="flexCheckChecked" disabled>
          <label class="form-check-label" for="flexCheckChecked">
            Creator
          </label>
        </div>
          <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-primary mt-5" name="addUser">Submit</button>
          </div>
        </div>
    </form>

<?php
}
}
/* {/block "body"} */
}
