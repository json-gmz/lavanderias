<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:37
  from 'module:wbimgleftviewstemplatesho' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15129d60e41_07079803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a1b1fc60fade984df895c6108b09afddf2f2c8d' => 
    array (
      0 => 'module:wbimgleftviewstemplatesho',
      1 => 1640058826,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c15129d60e41_07079803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1009618961c15129d58c57_47222612';
?>

<div class="leftbanner leftbannerap3">
<?php if ($_smarty_tpl->tpl_vars['imgleft']->value['slides']) {?>
  <div data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgleft']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgleft']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
      <div class="beffect">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
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
