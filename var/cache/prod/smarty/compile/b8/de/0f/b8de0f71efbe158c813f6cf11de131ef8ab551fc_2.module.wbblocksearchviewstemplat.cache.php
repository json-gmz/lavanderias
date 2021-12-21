<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:46
  from 'module:wbblocksearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151329f1b32_85578229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8de0f71efbe158c813f6cf11de131ef8ab551fc' => 
    array (
      0 => 'module:wbblocksearchviewstemplat',
      1 => 1640058824,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151329f1b32_85578229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '127340859361c151329de901_60542911';
?>

<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)) {?>
	<div class="input_search" data-role="fieldcontain">
		<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'wbblocksearch'),$_smarty_tpl ) );?>
" value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" />
		</form>
	</div>
<?php } else { ?>
<!-- Block search module TOP -->
<div class="wbSearch search_widget col-xl-8 col-lg-7 col-md-7 col-sm-12 col-xs-12 text-xs-left" id="search_widget">
	<div id="search_block_top" class="text-xs-left">
		<div class="cat-select float-xs-left">
			<select id="search_category" name="search_category" class="form-control">
				<option value="all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'wbblocksearch'),$_smarty_tpl ) );?>
</option>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_category']->value,'quotes','UTF-8' ));?>

			</select>
					</div>
		<form id="searchbox" class="input-group" method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		   
			<input type="hidden" name="controller" value="search">
			
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			
			<input class="search_query form-control" type="text" id="search_query_top" name="s" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search here..','mod'=>'wbblocksearch'),$_smarty_tpl ) );?>
" value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" />
			
			<div id="wb_url_ajax_search" style="display:none">
			<input type="hidden" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_ssl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/controller_ajax_search.php" class="url_ajax" />
			</div>
			<div id="sp-btn-search" class="input-group-btn">
			<button type="submit" name="submit_search" class="button-search">
      			<span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'wbblocksearch'),$_smarty_tpl ) );?>
</span>
			</button>
		</div>
		</form>
	</div>
</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
var limit_character = "<p class='limit'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number of characters at least are 3','mod'=>'wbblocksearch'),$_smarty_tpl ) );?>
</p>";
var close_text = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'close','mod'=>'wbblocksearch'),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>
<!-- /Block search module TOP -->
<?php }
}
