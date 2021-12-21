<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:38
  from 'module:wbleftfeaturedproductsvie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1512a241057_40110717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5571a1b4c52702e044b184f8abb6d533731c26a' => 
    array (
      0 => 'module:wbleftfeaturedproductsvie',
      1 => 1640058826,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/all-product.tpl' => 2,
  ),
),false)) {
function content_61c1512a241057_40110717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '185625145161c1512a230117_38867999';
?>
<div class="container">
  <div class="home-heading"><h2 class="bold-second-word"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top arrival','mod'=>'wbleftfeaturedproducts'),$_smarty_tpl ) );?>
</span></h2></div>
  <div class="row">
     <div class="left-bnr leftbanner3 col-lg-3 col-md-3 col-sm-4 col-xs-12 hidden-sm-down"></div>
      <section class="clearfix next-prevb all-sidepro col-lg-9 col-md-9 col-sm-8 col-xs-12">
       
        <div class="products row marginrow">
        <div id="owl-leftf" class="owl-carousel owl-theme">
          <?php $_smarty_tpl->_assignInScope('num_row', 2);?> <!-- Number of Row Ex 2,3,4,5....etc-->
          <?php $_smarty_tpl->_assignInScope('i', 0);?>
          <?php if (count($_smarty_tpl->tpl_vars['products']->value) <= 1) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
              <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/all-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
                <ul>
                  <li>
              <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/all-product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
              <?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['num_row']->value) {?>
                  </li>
                </ul>
                <?php $_smarty_tpl->_assignInScope('i', 0);?>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
        </div>
      </div>
      </section>
    </div>
</div><?php }
}
