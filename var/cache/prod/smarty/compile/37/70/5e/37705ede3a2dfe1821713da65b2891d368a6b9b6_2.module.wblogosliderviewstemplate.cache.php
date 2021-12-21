<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:48
  from 'module:wblogosliderviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151348217f1_37380554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37705ede3a2dfe1821713da65b2891d368a6b9b6' => 
    array (
      0 => 'module:wblogosliderviewstemplate',
      1 => 1640058826,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151348217f1_37380554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lavanderias\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '115251347661c151348181b0_07327260';
?>
<div class="container">
<div class="logos">
  <div class="row rless">
<?php if ($_smarty_tpl->tpl_vars['logoslider']->value['slides']) {?>
  <div data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logoslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logoslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logoslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
    <ul id="owl-logo" class="rslide owl-carousel owl-theme">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logoslider']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
        <li class="lslide col-xs-12 cless">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['slide']->value['size'],"\"",''), ENT_QUOTES, 'UTF-8');?>
 class="img-responsive center-block"/>
          </a>
        </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php }?>
</div>
</div>
</div><?php }
}
