<?php
/* Smarty version 4.0.4, created on 2023-03-31 21:19:50
  from 'C:\MAMP\htdocs\agcms\views\layouts\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_64274e76a85309_21652099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f06cd86c1e2de997db2dfb0fa72beb5db9a414' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\layouts\\main.tpl',
      1 => 1680297385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64274e76a85309_21652099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CMS</title>
  <link rel="stylesheet" href="/agcms/css/styles.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
  <?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"><?php echo '</script'; ?>
>
</head>
</head>

<body class="page-<?php echo $_smarty_tpl->tpl_vars['view_name']->value;?>
">
  <div>
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form role="search" class="custom-form">
            <div class="form-group">
              <input type="text" class="form-control" name="user" id="user" ng-model="userName" />
              <label for="user" class="animated-label"><i class="fa fa-search mx-3" aria-hidden="true"></i>Search
                here..</label>
            </div>
          </form>
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_url']) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_url'];?>
" alt="" width="32" height="32" class="rounded-circle mt-1" />
          <?php } else { ?>
            <img src="/agcms/images/placeholder.png" alt="" width="32" height="32" class="rounded-circle mt-1" />
          <?php }?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_name'];?>
</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item text-dark border-bottom" href="/agcms/profile">Profile</a>
                </li>
                <li>
                  <a class="dropdown-item text-dark" href="/agcms/logout">Sign Out</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#"><i class="fa fa-bell"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-language" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="inner-wrapper d-flex">
      <div id="sidebar" class="d-flex flex-column flex-md-shrink-0 flex-sm-column p-3">
        <a href="/agcms/dashboard" class="d-flex align-items-center text-decoration-none">
        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_url']) {?>
          <img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_url'];?>
" alt="" width="120" height="120" />
          <?php } else { ?>
          <img id="logo" src="/agcms/images/placeholder-logo.png" alt="" width="120" height="120" />
          <?php }?>
          </a>
          <span class="justify-content-center mx-auto"><?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
</span>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item profile">
            <a href="/agcms/profile" class="d-flex align-items-center link-dark text-decoration-none mt-5 mb-3"
              id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_url']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_url'];?>
" class="mb-3" alt="Responsive image">
              <?php } else { ?>
                <img src="/agcms/images/placeholder.png" alt="" width="50" height="50" class="rounded-circle me-4 mx-4 mb-3" />
              <?php }?>
              <div class="d-block align-left">
                <p class="pb-0 mb-0"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_name'];?>
</p>
                <p id="grey"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['user_role'];?>
</p>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="/agcms/dashboard"
              class="nav-link link-light d-flex align-center justify-content-between mb-3">Dashboard<svg
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 576 512">
                <path
                  d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
              </svg>
            </a>
          </li>
          <li>
            <a href="/agcms/blog"
              class="nav-link link-light d-flex align-center justify-content-between mb-3">Blog<svg
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 576 512">
                <path
                  d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z" />
              </svg>
            </a>
          </li>
          <li>
            <a href="/agcms/projects"
              class="nav-link link-light d-flex align-center justify-content-between mb-3">Projects<svg
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                <path
                  d="M469.3 19.3l23.4 23.4c25 25 25 65.5 0 90.5l-56.4 56.4L322.3 75.7l56.4-56.4c25-25 65.5-25 90.5 0zM44.9 353.2L299.7 98.3 413.7 212.3 158.8 467.1c-6.7 6.7-15.1 11.6-24.2 14.2l-104 29.7c-8.4 2.4-17.4 .1-23.6-6.1s-8.5-15.2-6.1-23.6l29.7-104c2.6-9.2 7.5-17.5 14.2-24.2zM249.4 103.4L103.4 249.4 16 161.9c-18.7-18.7-18.7-49.1 0-67.9L94.1 16c18.7-18.7 49.1-18.7 67.9 0l19.8 19.8c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1l45.1 45.1zM408.6 262.6l45.1 45.1c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1L496 350.1c18.7 18.7 18.7 49.1 0 67.9L417.9 496c-18.7 18.7-49.1 18.7-67.9 0l-87.4-87.4L408.6 262.6z" />
              </svg>
            </a>
          </li>
          <?php if ($_smarty_tpl->tpl_vars['is_loggedin']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_role'] === 'Global Administrator') {?>
              <li>
                <a href="/agcms/user"
                  class="nav-link link-light d-flex align-center justify-content-between mb-3">Users<svg
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512">
                    <path
                      d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c1.8 0 3.5-.2 5.3-.5c-76.3-55.1-99.8-141-103.1-200.2c-16.1-4.8-33.1-7.3-50.7-7.3H178.3zm308.8-78.3l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48c-5.7-2.3-12.1-2.3-17.8 0zM591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7V273.8L591.4 312z" />
                  </svg>
                </a>
              </li>
            <?php }?>
          <?php }?>


                  </ul>
        <hr />
      </div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213201000164274e76a82605_49569747', "body");
?>


      <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      <?php echo '</script'; ?>
>
      
        <?php echo '<script'; ?>
>
          ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
              console.error(error);
            });
        <?php echo '</script'; ?>
>
      
</body>

</html><?php }
/* {block "body"} */
class Block_213201000164274e76a82605_49569747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_213201000164274e76a82605_49569747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


      <?php
}
}
/* {/block "body"} */
}
