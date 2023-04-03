<?php
/* Smarty version 4.0.4, created on 2023-04-03 17:19:18
  from 'C:\MAMP\htdocs\agcms\views\pages\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_642b0a965f9dd6_82670986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd57207409abff35efc8a4da2c2521fd1d0b9e49c' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\agcms\\views\\pages\\contact.tpl',
      1 => 1680528630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642b0a965f9dd6_82670986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1219273134642b0a965f96c3_23092992', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/mainhome.tpl");
}
/* {block "content"} */
class Block_1219273134642b0a965f96c3_23092992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1219273134642b0a965f96c3_23092992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="section section-md bg-default" id="contacts">
        <div class="container">
          <div class="row row-fix row-30 align-items-center justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-xl-5 col-lg-8 col-md-9 text-center text-xl-left wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <h6>Contact Our Team</h6>
              <h2>Get in touch with us</h2>
              <p class="big">If you have a question or a testimonial for us, feel free to contact us using the form on the right.</p>
            </div>
            <div class="col-xl-7 col-lg-9 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
              <!--RD Mailform-->
              <form class="rd-form rd-mailform rd-form-corporate" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                <div class="row row-fix row-20 row-narrow">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input form-control-has-validation" id="contact-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                      <label class="form-label rd-input-label" for="contact-name">Your name <span class="text-primary">*</span></label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input form-control-has-validation" id="contact-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                      <label class="form-label rd-input-label" for="contact-email">Your e-mail address <span class="text-primary">*</span></label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <textarea class="form-input" id="contact-message" name="message"></textarea>
                      <label class="form-label rd-input-label" for="contact-message">Your message</label>
                    </div>
                  </div>
                </div>
                <button class="button button-secondary button-nuka" type="submit">Send<span class="button-overlay"></span></button>
              </form>
            </div>
          </div>
        </div>
      </section>
<?php
}
}
/* {/block "content"} */
}
