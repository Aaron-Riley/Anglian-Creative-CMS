<?php
/* Smarty version 4.0.4, created on 2023-03-31 21:33:17
  from 'C:\MAMP\htdocs\agcms\views\pages\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6427519d6714a2_55410640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de34319f1df37a0947fee241796c7594b32a5123' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\user.tpl',
      1 => 1680297072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427519d6714a2_55410640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3703531746427519d647776_46532562', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_3703531746427519d647776_46532562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3703531746427519d647776_46532562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
    <div class="d-flex justify-content-start">
      <h1 class="d-flex align-items-center mt-3">
          <svg class="mr-3"
          height="20"
          width="20"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
        Users
      </h1>
  </div>
  <div class="container mt-4">
    <a href="/agcms/adduser">
      <button type="button" class="btn btn-primary">Add</button>
    </a>
  </div>
  <div class="row mt-5 mb-5">
    <div class="col-lg-12">
      <div id="card-blog" class="card">
        <h2 class="d-flex align-items-center justify-content-between mx-3">Users</h2>
        <table class="table">
          <thead class="thead">
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
            </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
              <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</th>
              <?php if ($_smarty_tpl->tpl_vars['user']->value['user_url']) {?>
              <td><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_url'];?>
"></td>
              <?php } else { ?>
                <td><img src="/agcms/images/placeholder.png"></td>
              <?php }?>
              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_role'];?>
</td>
              <td><a href="/agcms/edituser/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg></a>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
         </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  </div>
<?php
}
}
/* {/block "body"} */
}
