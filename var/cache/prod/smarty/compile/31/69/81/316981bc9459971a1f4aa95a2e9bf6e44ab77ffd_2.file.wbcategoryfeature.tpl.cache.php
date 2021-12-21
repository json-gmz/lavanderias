<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:36
  from 'C:\xampp\htdocs\lavanderias\modules\wbcategoryfeature\views\templates\hook\wbcategoryfeature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15128019b18_53035231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '316981bc9459971a1f4aa95a2e9bf6e44ab77ffd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\modules\\wbcategoryfeature\\views\\templates\\hook\\wbcategoryfeature.tpl',
      1 => 1640058825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c15128019b18_53035231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '152154372861c15127f37442_28709297';
?>
<div class="category-back container next-prevb">
        <div id="wb_category_feature" class="wb_category_feature clearfix">
        <div class="home-heading"><h2 class="bold-second-word"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'top Categories','mod'=>'wbcategoryfeature'),$_smarty_tpl ) );?>
</span></h2></div>
        <div class="row rless">
            <?php if (isset($_smarty_tpl->tpl_vars['wb_categories']->value) && count($_smarty_tpl->tpl_vars['wb_categories']->value) > 0) {?>
                <div class="list_carousel responsive">
                    <div id="wb_cat_carousel" class="product-list list-inline list-unstyled <?php if (isset($_smarty_tpl->tpl_vars['wbconfig']->value->used_slider) && $_smarty_tpl->tpl_vars['wbconfig']->value->used_slider == 1) {?>owl-carousel owl-theme<?php }?>">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wb_categories']->value, 'item_category', false, NULL, 'wb_categories', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item_category']->value) {
?>
                        <?php $_smarty_tpl->_assignInScope('category', $_smarty_tpl->tpl_vars['item_category']->value['category']);?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value->level_depth <= 2) {?>
                            <div class="col-xs-12 cless">
                                <div class="categorybr text-xs-center">
                             <a  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value->id_category,$_smarty_tpl->tpl_vars['category']->value->link_rewrite),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->tpl_vars['item_category']->value['cat_thumb'] == 0) {?>
                                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path_ssl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
img/c/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iso_code']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.jpg" class="img-responsive center-block float-xs-right"/>    
                                <?php } else { ?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path_ssl']->value, ENT_QUOTES, 'UTF-8');?>
img/c/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->id_category, ENT_QUOTES, 'UTF-8');?>
.jpg" class="img-responsive center-block"/>    
                                <?php }?>
                                <h5><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h5>
                             </a>
                         </div>
                             </div>
                            <?php }?>                   
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                     </div>
                </div>
            <?php } else { ?>
                <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no category','mod'=>'wbcategoryfeature'),$_smarty_tpl ) );?>
</p>
            <?php }?>
        </div>
        </div>
</div><?php }
}
