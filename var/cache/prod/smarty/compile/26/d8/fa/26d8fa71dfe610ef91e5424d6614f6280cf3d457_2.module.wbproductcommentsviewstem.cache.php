<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:30
  from 'module:wbproductcommentsviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1512204b536_21416603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26d8fa71dfe610ef91e5424d6614f6280cf3d457' => 
    array (
      0 => 'module:wbproductcommentsviewstem',
      1 => 1640058827,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c1512204b536_21416603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '171845665561c15121efb5a2_71359175';
?>
<div class="comments_note wb-list-product-reviews">
        <div class="star_content clearfix">
        	<span class="avg-rate">
        			        	<span class="or-rate">
		            <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		                <?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
		              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
		            <?php } else { ?>
		             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
		            <?php }?>
		            <?php
}
}
?>
	        	</span>
            </span>
        </div>
</div>

<?php }
}
