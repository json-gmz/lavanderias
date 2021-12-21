<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:39
  from 'module:wbblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1512bde81c0_25536795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '782fb14174261522df9e7583ef1273bf096534ef' => 
    array (
      0 => 'module:wbblogviewstemplatesfront',
      1 => 1640058825,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c1512bde81c0_25536795 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="post_format_items <?php if (isset($_smarty_tpl->tpl_vars['class']->value) && $_smarty_tpl->tpl_vars['class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<?php if ((isset($_smarty_tpl->tpl_vars['videos']->value) && !empty($_smarty_tpl->tpl_vars['videos']->value))) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'videourl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['videourl']->value) {
?>
			<div class="item post_video">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="<?php if (isset($_smarty_tpl->tpl_vars['videourl']->value) && $_smarty_tpl->tpl_vars['videourl']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['videourl']->value, ENT_QUOTES, 'UTF-8');
}?>" width="<?php if (isset($_smarty_tpl->tpl_vars['width']->value) && $_smarty_tpl->tpl_vars['width']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');
}?>" height="<?php if (isset($_smarty_tpl->tpl_vars['height']->value) && $_smarty_tpl->tpl_vars['height']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8');
}?>"></iframe>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div><?php }
}
