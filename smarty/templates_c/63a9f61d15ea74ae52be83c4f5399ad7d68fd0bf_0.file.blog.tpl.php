<?php
/* Smarty version 4.3.0, created on 2023-02-21 11:14:50
  from 'C:\MAMP\htdocs\agcms\views\pages\blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f4a7aacc8e46_85710806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a9f61d15ea74ae52be83c4f5399ad7d68fd0bf' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\blog.tpl',
      1 => 1676977853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f4a7aacc8e46_85710806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134004161263f4a7aacc86f6_35928779', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block "body"} */
class Block_134004161263f4a7aacc86f6_35928779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_134004161263f4a7aacc86f6_35928779',
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
    <a href="index.php?p=editblog">
      <button type="button" class="btn btn-secondary px-3">Edit</button>
    </a>
  </div>
  <div class="container">
    <div class="row mb-2 mt-3">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-dark">Productivity</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto text-dark">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" src="./images/mailchimp-lsdA8QpWN_A-unsplash.jpg" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-dark">Productivity</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto text-dark">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" src="./images/lautaro-andreani-UYsBCu9RP3Y-unsplash.jpg" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
        </div>
      </div>
    </div>
    <div class="row mb-2 mt-3">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-dark">Productivity</strong>
            <h3>
              <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto text-dark">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" src="./images/mailchimp-lsdA8QpWN_A-unsplash.jpg" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-dark">Productivity</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto text-dark">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" src="./images/lautaro-andreani-UYsBCu9RP3Y-unsplash.jpg" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
        </div>
      </div>
    </div>
    <div class="row mb-2 mt-3">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-dark">Productivity</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto text-dark">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" src="./images/mailchimp-lsdA8QpWN_A-unsplash.jpg" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-dark">Productivity</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto text-dark">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" src="./images/lautaro-andreani-UYsBCu9RP3Y-unsplash.jpg" alt="Thumbnail [200x250]" data-holder-rendered="true" style="width: 300px; height: 250px; object-fit: cover; ">
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
