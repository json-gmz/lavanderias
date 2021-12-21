<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:36
  from 'module:wbimgfeatureviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151285487f3_01616574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96978c0bb184af949b2063205cd7518181d0f4d1' => 
    array (
      0 => 'module:wbimgfeatureviewstemplate',
      1 => 1640058826,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151285487f3_01616574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '61026951061c15128540ea2_93741067';
?>
<div class="fe-product leftbannerap2">
<?php if ($_smarty_tpl->tpl_vars['imgfeature']->value['slides']) {?>
  <div class="fe-banner sub-img-banner" data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgfeature']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgfeature']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
      	<div class="beffect">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="banner em-eff04-04">
          	<div class="em-effect08"></div>
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"  class="img-responsive center-block"/>
          </a>
      	</div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }?>
</div>






<?php }
}
