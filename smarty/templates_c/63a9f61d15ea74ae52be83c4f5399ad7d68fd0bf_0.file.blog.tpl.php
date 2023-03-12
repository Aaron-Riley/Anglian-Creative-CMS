<?php
/* Smarty version 4.3.0, created on 2023-03-12 18:34:02
  from 'C:\MAMP\htdocs\agcms\views\pages\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640e1b1ad0e7e2_60927261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a9f61d15ea74ae52be83c4f5399ad7d68fd0bf' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\blog.tpl',
      1 => 1678646040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e1b1ad0e7e2_60927261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_624532658640e1b1acfdbc7_82844020', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_624532658640e1b1acfdbc7_82844020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_624532658640e1b1acfdbc7_82844020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
    <div class="d-flex justify-content-start">
      <h1 class="d-flex align-items-center mt-3">
      <svg class="mr-3"
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
        Blog
      </h1>
  </div>
  <div class="container mt-4">
    <a href="index.php?p=addblog">
      <button type="button" class="btn btn-primary px-3">Add</button>
    </a>
  </div>
  <div class="container">
    <div class="row mb-2 mt-3">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
      <div class="col-md-6">
      <a style="text-decoration: none;" href="index.php?p=editblog&id=<?php echo $_smarty_tpl->tpl_vars['blog']->value['blog_id'];?>
">
      <div class="card flex-md-row mb-4 box-shadow h-md-250">
      <div class="card-body d-flex flex-column align-items-start">
      <h3 class="mb-0">
      <?php echo $_smarty_tpl->tpl_vars['blog']->value['title'];?>

      </h3>
      <div class="mb-1 text-muted"><?php echo $_smarty_tpl->tpl_vars['blog']->value['created_on'];?>
</div>
      <p class="card-text mb-auto text-dark"><?php echo $_smarty_tpl->tpl_vars['blog']->value['content'];?>
</p>
      </div>
      <img class="card-img-right flex-auto d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['image_url'];?>
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
