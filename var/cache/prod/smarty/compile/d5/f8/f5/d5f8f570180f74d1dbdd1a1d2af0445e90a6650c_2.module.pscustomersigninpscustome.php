<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:46
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15132752d04_05425757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1640058831,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c15132752d04_05425757 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="_desktop_user_info" class="dropdown js-dropdown hidden-md-down text-xs-right d-inline-block">
    <div class="user-info" data-toggle="dropdown">
        <div class="nav-link usvg">
          <div class="d-inline-block"><svg width="22px" height="22px" class="nav-link hidden-lg-up"> <use xlink:href="#huser"></use></svg><span class="hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 <i class="fa fa-angle-down"></i></span></div>
                       
        </div>
    </div>
    <ul class="dropdown-menu user-down dropdown-menu-right">
       <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
       <li>
      <a class="account" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow">
        <i class="fa fa-user logged"></i>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>

      </a>
      </li>
       <li>
      <a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <i class="fa fa-sign-out"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
      </li>
    <?php } else { ?>
     <li> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow">
        <i class="fa fa-user"></i>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </a></li>
    <?php }?>
      </ul>
</div><?php }
}