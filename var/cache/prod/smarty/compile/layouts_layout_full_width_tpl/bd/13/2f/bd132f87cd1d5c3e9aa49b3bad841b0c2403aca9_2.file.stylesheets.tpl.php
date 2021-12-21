<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:43
  from 'C:\xampp\htdocs\lavanderias\themes\electrive\templates\_partials\stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1512f31cf02_32967274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd132f87cd1d5c3e9aa49b3bad841b0c2403aca9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\themes\\electrive\\templates\\_partials\\stylesheets.tpl',
      1 => 1640058832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c1512f31cf02_32967274 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if (isset($_smarty_tpl->tpl_vars['WB_customCSS']->value) && $_smarty_tpl->tpl_vars['WB_customCSS']->value) {?>
<!-- Start Custom CSS -->
    <style><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WB_customCSS']->value, ENT_QUOTES, 'UTF-8');?>
</style>
<!-- End Custom CSS -->
<?php }
if (isset($_smarty_tpl->tpl_vars['WB_JQUERY']->value) && $_smarty_tpl->tpl_vars['WB_JQUERY']->value) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WB_JQUERY']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript">
	var LANG_RTL=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['is_rtl'], ENT_QUOTES, 'UTF-8');?>
;
	var langIso='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['language_code'], ENT_QUOTES, 'UTF-8');?>
';
	var baseUri='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
';
<?php if ((isset($_smarty_tpl->tpl_vars['WB_showDarkLightMenu']->value) && $_smarty_tpl->tpl_vars['WB_showDarkLightMenu']->value)) {?>
	var WB_showDarkLightMenu=true;
<?php }
if ((isset($_smarty_tpl->tpl_vars['WB_stickySearch']->value) && $_smarty_tpl->tpl_vars['WB_stickySearch']->value)) {?>
	var WB_stickySearch=true;
<?php }
if ((isset($_smarty_tpl->tpl_vars['WB_stickyCart']->value) && $_smarty_tpl->tpl_vars['WB_stickyCart']->value)) {?>
	var WB_stickyCart=true;
<?php }
if ((isset($_smarty_tpl->tpl_vars['WB_mainLayout']->value) && $_smarty_tpl->tpl_vars['WB_mainLayout']->value)) {?>
	var WB_mainLayout='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WB_mainLayout']->value, ENT_QUOTES, 'UTF-8');?>
';
<?php }
if ((isset($_smarty_tpl->tpl_vars['WB_darklightLayout']->value) && $_smarty_tpl->tpl_vars['WB_darklightLayout']->value)) {?>
	var WB_darklightLayout='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WB_darklightLayout']->value, ENT_QUOTES, 'UTF-8');?>
';
<?php }?> 
<?php if ((isset($_smarty_tpl->tpl_vars['WB_enableCountdownTimer']->value) && $_smarty_tpl->tpl_vars['WB_enableCountdownTimer']->value)) {?>
var WB_enableCountdownTimer=true;
<?php }
if ((isset($_smarty_tpl->tpl_vars['WB_mainLayout']->value) && $_smarty_tpl->tpl_vars['WB_mainLayout']->value)) {?>
var WB_mainLayout='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WB_mainLayout']->value, ENT_QUOTES, 'UTF-8');?>
';
<?php }
if ((isset($_smarty_tpl->tpl_vars['WB_darklightLayout']->value) && $_smarty_tpl->tpl_vars['WB_darklightLayout']->value)) {?>
var WB_darklightLayout='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WB_darklightLayout']->value, ENT_QUOTES, 'UTF-8');?>
';
<?php }?>


 <?php echo '</script'; ?>
><?php }
}
