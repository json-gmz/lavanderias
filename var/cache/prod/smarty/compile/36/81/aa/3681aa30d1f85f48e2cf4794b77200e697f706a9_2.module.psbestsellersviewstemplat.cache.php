<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:36
  from 'module:psbestsellersviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15128b0a378_68710657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3681aa30d1f85f48e2cf4794b77200e697f706a9' => 
    array (
      0 => 'module:psbestsellersviewstemplat',
      1 => 1640058831,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/all-product.tpl' => 2,
  ),
),false)) {
function content_61c15128b0a378_68710657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '26000164761c15128af4532_58229151';
?>
 <div class="container">

   
   <div class="home-heading"><h2 class="bold-second-word"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></h2></div>
   <div class="row">
      <section class="clearfix next-prevb all-sidepro col-lg-9 col-md-9 col-sm-8 col-xs-12">
      <div class="products row marginrow">
       <div id="owl-best" class="owl-carousel owl-theme">
              <?php $_smarty_tpl->_assignInScope('num_row', 2);?> <!-- Number of Row Ex 2,3,4,5....etc-->
            <?php $_smarty_tpl->_assignInScope('i', 0);?>
            <?php if (count($_smarty_tpl->tpl_vars['products']->value) <= 4) {?>
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
    </section>
  <div class="left-bnr leftbanner2 col-lg-3 col-md-3 col-sm-4 col-xs-12 hidden-sm-down"></div>
  </div>
</div><?php }
}
