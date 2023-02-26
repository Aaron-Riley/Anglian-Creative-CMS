<?php
/* Smarty version 4.3.0, created on 2023-02-26 15:38:03
  from 'C:\MAMP\htdocs\agcms\views\pages\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63fb7cdb06e076_74340822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21646cda4c21d3cb4687de764d98c0a51365e482' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\password.tpl',
      1 => 1677424692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fb7cdb06e076_74340822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202137777563fb7cdb06baa6_38024930', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_202137777563fb7cdb06baa6_38024930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_202137777563fb7cdb06baa6_38024930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
    <div class="container">
    <div class="d-flex justify-content-start">
    <h1 class="d-flex align-items-center mt-3">
            <a href="index.php?p=profile" class="text-decoration-none text-white">
            <svg class="mr-3" height="20" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg>
                Profile
        </a>
        </h1>
        <h1 class="d-flex align-items-center mt-3 mx-3">
            -
        </h1>
        <h1 class="d-flex align-items-center mt-3">
            <a href="#" class="text-decoration-none text-white">Change Password</a>
        </h1>
    </div>
     <div class="row mt-5">
        <div class="col-sm">
          <form action="" method="post">
            <h1 class="h3 mb-3 fw-normal">Input details here.</h1>
  
            <div class="form-floating mb-4">
              <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Password">
              <label for="currentPassword">Password</label>
            </div>
            <div class="form-floating mb-4">
              <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
              <label for="newPassword">New Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">Change password</button>
          </form>
        </div>
        <div class="col-sm">
          <img src="images/password.jpg" class="d-block mx-lg-auto img-fluid mb-5" alt="Fitness Image" width="700" height="500" loading="lazy">
        </div>
      </div>
  
      </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
