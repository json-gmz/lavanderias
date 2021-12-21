<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:38
  from 'module:wbimgofferviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1512a6e58e8_70997794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acced3069bece86a6dbdabea3987107665fe3d7c' => 
    array (
      0 => 'module:wbimgofferviewstemplatesh',
      1 => 1640058826,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c1512a6e58e8_70997794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lavanderias\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '115825208861c1512a6da142_96743441';
?>
<div class="container">
<div class="offerb">
<?php if ($_smarty_tpl->tpl_vars['imgoffer']->value['slides']) {?>
  <div data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgoffer']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgoffer']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
        <div class="offb-2">
        <div class="beffect">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"  class="img-responsive" <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['slide']->value['size'],"\"",''), ENT_QUOTES, 'UTF-8');?>
/>
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
