<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:30
  from 'C:\xampp\htdocs\lavanderias\modules\wbcompare\views\templates\hook\Wb_compare_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151225ef775_58080192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f5e8f302140c247f9273d71995c2a6c79b11cb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\modules\\wbcompare\\views\\templates\\hook\\Wb_compare_button.tpl',
      1 => 1640058825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151225ef775_58080192 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="compare">
	<a class="add_to_compare title_font btn-product wb-compare-button" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Wb_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['add_compare']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove Compare','mod'=>'wbcompare'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'wbcompare'),$_smarty_tpl ) );
}?>" >
		<svg width="16px" height="16px"><use xlink:href="#compare"></use></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'compare','mod'=>'wbcompare'),$_smarty_tpl ) );?>
</span>
	</a>
</div><?php }
}
