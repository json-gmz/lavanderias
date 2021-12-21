<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:26
  from 'module:wbimgbannerviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1511ec907b1_11570718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b71ebd52064e23a551e069d1851cf009d928e9db' => 
    array (
      0 => 'module:wbimgbannerviewstemplates',
      1 => 1640058825,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c1511ec907b1_11570718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lavanderias\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->compiled->nocache_hash = '193880053961c1511ec85e06_52375232';
?>
<div class="container">
  <div class="imgbanner row">
      <?php if ($_smarty_tpl->tpl_vars['imgbanner']->value['slides']) {?>
        <div data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgbanner']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgbanner']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
              <div class="col-xs-4">
                <div class="beffect">
                    <a class="bimg" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['slide']->value['size'],"\"",''), ENT_QUOTES, 'UTF-8');?>
 class="img-responsive center-block b-radius"/>
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
</div><?php }
}
