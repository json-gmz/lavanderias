<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:33
  from 'module:wbimglatestviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15125979f49_30046737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbb936ca09ad44b2953ba503c6e949f791389b83' => 
    array (
      0 => 'module:wbimglatestviewstemplates',
      1 => 1640058826,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c15125979f49_30046737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '92660056961c15125973222_75274381';
?>

<?php if ($_smarty_tpl->tpl_vars['imglatest']->value['slides']) {?>
  <div class="imglatest leftbannerap1" data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imglatest']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imglatest']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
         <div class="beffect">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"  class="img-responsive center-block"/>
          </a>
  		</div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<?php }
}
