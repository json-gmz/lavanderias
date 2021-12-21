<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:46
  from 'C:\xampp\htdocs\lavanderias\themes\electrive\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151323b18b7_28597280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb85a334ebbb577cbaad0b526161fedb547d94af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\themes\\electrive\\templates\\_partials\\header.tpl',
      1 => 1640058832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151323b18b7_28597280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91460596061c15132397fa8_52650996', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140123855761c15132399e68_59855233', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170215317961c1513239cff0_01729417', 'header_top');
}
/* {block 'header_banner'} */
class Block_91460596061c15132397fa8_52650996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_91460596061c15132397fa8_52650996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_140123855761c15132399e68_59855233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_140123855761c15132399e68_59855233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav">
  <div class="container">
    <div class="row bo-bottom">
          <div class="col-lg-5 col-md-4 col-sm-4 hidden-md-down head-left">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          </div>
          <div class="col-lg-7 col-md-8 col-sm-8 right-nav text-xs-right hidden-md-down">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

              
          </div>
       
      </div>
      </div>
</nav>

<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_170215317961c1513239cff0_01729417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_170215317961c1513239cff0_01729417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="allhead">
  <div class="header-top">
  <div class="container">
<div class="row text-xs-right">
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 hidden-md-down head-logo-l">
      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
        <h1>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </h1>
      <?php } else { ?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
      <?php }?>
    </div>
    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 head-right">
      <div class="hidden-lg-up text-sm-center mobile">
                       <div class="float-xs-left">
            <div id="menu-icon">
            <div class="navbar-header">
                <button type="button" class="btn-navbar navbar-toggle" data-toggle="collapse" onclick="openNav()">
                <i class="fa fa-bars"></i></button>
            </div>
            </div>
            <div id="mySidenav" class="sidenav">
            <div class="close-nav">
                <span class="categories"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <a href="javascript:void(0)" class="closebtn float-xs-right" onclick="closeNav()"><i class="fa fa-close"></i></a>
            </div>
            <div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
                <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
            </div>
            </div>
            </div>
                        <div class="top-logo float-xs-left" id="_mobile_logo">
             
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                  <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                </a>
             
             </div>
      </div>
      
      <div class="hidden-lg-up text-sm-center mobile mobilei">
            <div class="float-xs-right" id="_mobile_cart"></div>
            <div class="float-xs-right" id="_mobile_user_info"></div>
            <div class="float-xs-right xsse"></div>
            <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
            <div class="clearfix"></div>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>


    </div>
</div>
</div>
</div>
</div>
<div class="topmenu">
<div class="container">
    <div class="row">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

    </div>
  </div>
</div>
<?php
}
}
/* {/block 'header_top'} */
}
