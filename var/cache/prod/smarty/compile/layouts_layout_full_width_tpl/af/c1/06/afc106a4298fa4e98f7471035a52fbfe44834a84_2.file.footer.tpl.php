<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:48
  from 'C:\xampp\htdocs\lavanderias\themes\electrive\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151343947d1_30478883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afc106a4298fa4e98f7471035a52fbfe44834a84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\themes\\electrive\\templates\\_partials\\footer.tpl',
      1 => 1640058832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151343947d1_30478883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>



  <div class="foot-sp">
  <div class="footnews container">
    <div class="emailp">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110143874661c15134386c27_25652975', 'hook_footer_before');
?>

      </div>
  </div>
  </div> 

<div class="footer-container">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeBlock'),$_smarty_tpl ) );?>

<div class="container">
  <div class="middle-footer">
    <div class="smmail"></div>
        <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161963549061c151343893d2_06723633', 'hook_footer');
?>

        </div>
  </div>
  <div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81403312761c1513438af75_55191331', 'hook_displayTopColumn');
?>

  </div>
</div> 
        
      <div class="foot-copy">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-12"> 
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172791872261c1513438c834_34577941', 'copyright_link');
?>

            </div>
            <div class="col-sm-6 col-xs-12 text-xs-right">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90141923061c15134392c87_50854170', 'hook_footerDown');
?>

            </div>
          </div> 
      </div>
    </div>
  <a href="" id="scroll" title="Scroll to Top" style="display: none;"><i class="fa fa-angle-up"></i></a>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_110143874661c15134386c27_25652975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_110143874661c15134386c27_25652975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_161963549061c151343893d2_06723633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_161963549061c151343893d2_06723633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_displayTopColumn'} */
class Block_81403312761c1513438af75_55191331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_displayTopColumn' => 
  array (
    0 => 'Block_81403312761c1513438af75_55191331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_displayTopColumn'} */
/* {block 'copyright_link'} */
class Block_172791872261c1513438c834_34577941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_172791872261c1513438c834_34577941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <a class="_blank" href="http://www.prestashop.com" target="_blank">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                </a>
              <?php
}
}
/* {/block 'copyright_link'} */
/* {block 'hook_footerDown'} */
class Block_90141923061c15134392c87_50854170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footerDown' => 
  array (
    0 => 'Block_90141923061c15134392c87_50854170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterDown'),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'hook_footerDown'} */
}
