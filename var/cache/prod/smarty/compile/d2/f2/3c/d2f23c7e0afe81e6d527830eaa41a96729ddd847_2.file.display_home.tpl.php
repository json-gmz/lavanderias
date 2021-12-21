<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:49
  from 'C:\xampp\htdocs\lavanderias\modules\wbpopupproducts\views\templates\hook\display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151355e0844_39438048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2f23c7e0afe81e6d527830eaa41a96729ddd847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\modules\\wbpopupproducts\\views\\templates\\hook\\display_home.tpl',
      1 => 1640058827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151355e0844_39438048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<style type="text/css">.wbpopup-popducts .wbpopup-popducts-item {<?php if ($_smarty_tpl->tpl_vars['FAKE_MODE']->value == '1') {?>opacity: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OPACITY']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['BACKGROUND_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;border: 1px solid <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['BORDER_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;box-shadow: 0px 0px 1px 0px <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['SHADOW_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;border-radius: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['BORDER_RADIUS']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}.wbpopup-popducts .wbpopup-popducts-item:hover{<?php if ($_smarty_tpl->tpl_vars['FAKE_MODE']->value == '1') {?>opacity: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OPACITY_ON_HOVER']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>}.wbpopup-popducts-name a h4{font-size:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FONT_SIZE']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;}</style><div class="wbpopup-popducts"><div class='wbpopup-popducts-inner'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr_data']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->_assignInScope('product', $_smarty_tpl->tpl_vars['data']->value['ProdInfo']);?><div class="wbpopup-popducts-item desktop-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['DESKTOP_POSITION']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 mobile-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['MOBILE_POSITION']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product"><div class="thumbnail-container"><div class="wbpopup-popducts-wrapper"><div class="wbpopup-popducts-image"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154970426861c15135593a18_39774090', 'product_thumbnail');
?>
</div><div class="wbpopup-popducts-description"><?php if ($_smarty_tpl->tpl_vars['CLOSE_BTN']->value) {?><div class='wbpopup-popducts-close-icon-wrapper'><a href="javascript:;" class="wbpopup-popducts-close-icon">x</a></div><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187692174761c151355c5d01_99449587', 'product_name');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205399280461c151355ca9d4_99757384', 'product_reviews');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42042547761c151355cc843_65139105', 'product_price_and_shipping');
?>
</div></div></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
/* {block 'product_thumbnail'} */
class Block_154970426861c15135593a18_39774090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_154970426861c15135593a18_39774090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['custom_link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img class="" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['PRODUCT_THUMB_SIZE']->value]['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"><?php if ($_smarty_tpl->tpl_vars['SECOND_IMG_HOVER']->value == '1') {
if (isset($_smarty_tpl->tpl_vars['product']->value['images']['0']) && !isset($_smarty_tpl->tpl_vars['product']->value['images']['0']['cover'])) {?><img class="wbpopup-products-hover-image" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['PRODUCT_THUMB_SIZE']->value]['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"><?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value['images']['1']) && !isset($_smarty_tpl->tpl_vars['product']->value['images']['1']['cover'])) {?><img class="wbpopup-products-hover-image" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['PRODUCT_THUMB_SIZE']->value]['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['legend'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"><?php }
}?></a><?php } else { ?><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['custom_link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img class="" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['PRODUCT_THUMB_SIZE']->value]['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a><?php }
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_187692174761c151355c5d01_99449587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_187692174761c151355c5d01_99449587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="wbpopup-popducts-name"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value['custom_link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><h4><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4></a></div><?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_205399280461c151355ca9d4_99757384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reviews' => 
  array (
    0 => 'Block_205399280461c151355ca9d4_99757384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_42042547761c151355cc843_65139105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_42042547761c151355cc843_65139105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="wbpopup-popducts-price-and-shipping"><span itemprop="price" class="price"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>
<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','mod'=>'wbpopupproducts'),$_smarty_tpl ) );?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?><span class="wbdiscount-percentage wbdiscount-product"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_percentage'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?><span class="wbdiscount-amount wbdiscount-product"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }?><span class="regular-price"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['regular_price'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>
<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'wbpopupproducts'),$_smarty_tpl ) );?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>
</div><?php }
}
}
/* {/block 'product_price_and_shipping'} */
}
