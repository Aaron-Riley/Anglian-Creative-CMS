<?php
/* Smarty version 4.0.4, created on 2023-04-03 14:31:13
  from 'C:\MAMP\htdocs\agcms\views\pages\projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_642ae331604545_25742707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0fbb0a0858ce28db3233be0f8ba3cfc02c7dc39' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\projects.tpl',
      1 => 1680532269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ae331604545_25742707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1646327596642ae3315fdfc6_89945539', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_1646327596642ae3315fdfc6_89945539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1646327596642ae3315fdfc6_89945539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
    <div class="d-flex justify-content-start">
      <h1 class="d-flex align-items-center mt-3">
        <svg
        class="mr-3"
        xmlns="http://www.w3.org/2000/svg"
        width="20"
        height="20"
        viewBox="0 0 512 512"
      >
        <path
          d="M469.3 19.3l23.4 23.4c25 25 25 65.5 0 90.5l-56.4 56.4L322.3 75.7l56.4-56.4c25-25 65.5-25 90.5 0zM44.9 353.2L299.7 98.3 413.7 212.3 158.8 467.1c-6.7 6.7-15.1 11.6-24.2 14.2l-104 29.7c-8.4 2.4-17.4 .1-23.6-6.1s-8.5-15.2-6.1-23.6l29.7-104c2.6-9.2 7.5-17.5 14.2-24.2zM249.4 103.4L103.4 249.4 16 161.9c-18.7-18.7-18.7-49.1 0-67.9L94.1 16c18.7-18.7 49.1-18.7 67.9 0l19.8 19.8c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1l45.1 45.1zM408.6 262.6l45.1 45.1c-.3 .3-.7 .6-1 .9l-64 64c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l64-64c.3-.3 .6-.7 .9-1L496 350.1c18.7 18.7 18.7 49.1 0 67.9L417.9 496c-18.7 18.7-49.1 18.7-67.9 0l-87.4-87.4L408.6 262.6z"
        />
      </svg>
        Projects
      </h1>
  </div>
  <div class="container mt-4">
    <a href="/agcms/addproject">
      <button type="button" class="btn btn-primary px-3">Add</button>
    </a>
  </div>
  <div class="container">
    <div class="row mb-2 mt-3">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
$_smarty_tpl->tpl_vars['project']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->do_else = false;
?>
      <div class="col-md-6">
      <a style="text-decoration: none;" href="/agcms/editprojects/<?php echo $_smarty_tpl->tpl_vars['project']->value['project_id'];?>
">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
      <h3 class="mb-0">
      <?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>

      </h3>
      <div class="mb-1 text-muted"><?php echo $_smarty_tpl->tpl_vars['project']->value['created_on'];?>
</div>
      <div class="card-text mb-auto text-dark restriction"><?php echo $_smarty_tpl->tpl_vars['project']->value['content'];?>
</div>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['project']->value['image_url'];?>
" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
      </div>
      </a>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
  </div>
 

<?php
}
}
/* {/block "body"} */
}
