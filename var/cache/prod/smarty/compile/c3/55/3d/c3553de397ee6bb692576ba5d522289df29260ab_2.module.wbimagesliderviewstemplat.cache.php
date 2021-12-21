<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:26
  from 'module:wbimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1511e3d16a5_41391940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3553de397ee6bb692576ba5d522289df29260ab' => 
    array (
      0 => 'module:wbimagesliderviewstemplat',
      1 => 1640058825,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c1511e3d16a5_41391940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lavanderias\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '28381655661c1511e296a15_26371100';
?>
<div class="container">
<div class="row">
  <div class="menu-sp hidden-md-down col-xl-2 col-lg-2 col-md-3 col-sm-4"></div>
<div class="slider-banner col-xl-10 col-lg-10 col-md-9 col-sm-12 col-xs-12">
  <div class="s-panel">
    <div class="loader wrloader"></div>
    
      <?php if ($_smarty_tpl->tpl_vars['wbslider']->value['slides']) {?>
      <div class="homeslider-container slideshow-panel" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="slide-progress"></div>
        <ul id="owl-image-slider" class="image-slide owl-carousel owl-theme">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wbslider']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
            <li class="slide">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['slide']->value['size'],"\"",''), ENT_QUOTES, 'UTF-8');?>
 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" class="img-responsive" />
              </a>
            </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    <?php }?>
  </div>
</div>
</div>
</div><?php }
}
