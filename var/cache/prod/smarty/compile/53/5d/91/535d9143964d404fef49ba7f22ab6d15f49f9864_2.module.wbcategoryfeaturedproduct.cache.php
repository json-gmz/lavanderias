<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:28
  from 'module:wbcategoryfeaturedproduct' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15120edec76_18113259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535d9143964d404fef49ba7f22ab6d15f49f9864' => 
    array (
      0 => 'module:wbcategoryfeaturedproduct',
      1 => 1640058825,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 2,
  ),
),false)) {
function content_61c15120edec76_18113259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '213947122561c15120ebae14_11113940';
?>
<section class="next-prevb left-product col-md-6 col-xs-12 wbfepro">
 
 <div class="home-heading"><h2 class="bold-second-word"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'top rated','mod'=>'wbcategoryfeaturedproducts'),$_smarty_tpl ) );?>
</span></h2></div>
  <div class="products row marginrow">
  <div id="owl-rate" class="owl-carousel owl-theme">
     <?php $_smarty_tpl->_assignInScope('num_row', 1);?> <!-- Number of Row Ex 2,3,4,5....etc-->
          <?php $_smarty_tpl->_assignInScope('i', 0);?>
          <?php if (count($_smarty_tpl->tpl_vars['products']->value) <= 1) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
              <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
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
                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
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
</div>
</div><?php }
}
