<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:46
  from 'C:\xampp\htdocs\lavanderias\modules\wbcompare\views\templates\hook\Wb_compare_nav2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15132dc8d03_96296093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9617ca731a17428829b8d0d8a6f288778cbd4984' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\modules\\wbcompare\\views\\templates\\hook\\Wb_compare_nav2.tpl',
      1 => 1640058825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c15132dc8d03_96296093 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
<li class="hcom d-inline-block text-xs-center">
	<form method="post" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('wbcompare','WbCompareProduct'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="compare-form">
		<a  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('wbcompare','WbCompareProduct',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<span class="wcom"><svg width="32px" height="32px" class="hidden-md-down"> <use xlink:href="#hcom"></use></svg><i class="fa fa-compress hidden-lg-up"></i> <span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'compare','mod'=>'wbcompare'),$_smarty_tpl ) );?>
</span></span>
				<input type="hidden" name="compare_product_count" class="compare_product_count" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count_product']->value, ENT_QUOTES, 'UTF-8');?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
	</a>
	</form>
</li>
<?php }
}
}
