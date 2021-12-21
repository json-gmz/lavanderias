<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:33
  from 'module:wbcenterbannerviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1512568fca7_01956677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23af5682f0682f3b04528e6371885d3d0ba817a3' => 
    array (
      0 => 'module:wbcenterbannerviewstempla',
      1 => 1640058825,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c1512568fca7_01956677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '93035232361c15125686eb5_40371760';
?>


<div class="container">
	<div class="row">
		<?php if ($_smarty_tpl->tpl_vars['wbbanner']->value['slides']) {?>
		  <div class="center-b" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbbanner']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbbanner']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbbanner']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
		      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wbbanner']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
		      	<div class="col-sm-6 col-xs-6">
			        <div class="beffect">
			          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
			            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" class="img-responsive center-block" />
			          </a>
			        </div>
		    	</div>
		      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		  </div>
		<?php }?>
	</div>
</div>

<?php }
}
