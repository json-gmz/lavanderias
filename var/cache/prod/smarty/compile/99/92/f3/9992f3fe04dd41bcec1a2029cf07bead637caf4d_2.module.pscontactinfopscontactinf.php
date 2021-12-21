<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:48
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151349fd735_10347384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1640058831,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151349fd735_10347384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="block-contact col-md-3 col-sm-3 col-lg-3 col-xs-12 links wrapper">

<div class="title clearfix hidden-md-up" data-toggle="collapse" data-target="#footer_contact">
    <span class="c-info h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'contact info','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
   <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
           <i class="fa fa-plus add"></i>
            <i class="fa fa-minus remove"></i>
          </span>
  </span>
  </div>
  <span class="c-info hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'contact info','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
 
  <ul id="footer_contact" class="fthr collapse">
  <li class="block">
    <div class="icon"><svg width="20px" height="20px"><use xlink:href="#add"></use></svg></div>
    <div class="data ad"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
  </li>

  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
    <li class="block">
      <div class="icon"><svg width="20px" height="20px"><use xlink:href="#phone"></use></svg></div>
      <div class="data">
        <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
       </div>
    </li>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
    <li class="block">
      <div class="icon"><svg width="21px" height="20px"><use xlink:href="#fax"></use></svg></div>
      <div class="data">
             <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

      </div>
    </li>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
    <li class="block">
      <div class="icon"><svg width="22px" height="22px"><use xlink:href="#mail"></use></svg></div>
      <div class="data email ad">
      <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
       </div>
    </li>
  <?php }?> 
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174339084261c151349f9630_05583482', 'hook_footerAfter');
?>
   
</ul>

</div><?php }
/* {block 'hook_footerAfter'} */
class Block_174339084261c151349f9630_05583482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footerAfter' => 
  array (
    0 => 'Block_174339084261c151349f9630_05583482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footerAfter'} */
}
