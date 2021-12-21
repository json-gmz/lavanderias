<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:40
  from 'C:\xampp\htdocs\lavanderias\themes\electrive\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1512c6a4868_16134183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09a95fda0a9b78391b05c8112763a17a2ee61806' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\themes\\electrive\\templates\\page.tpl',
      1 => 1640058832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c1512c6a4868_16134183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189150354961c1512c62d5d0_30670805', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_198520653961c1512c62ec46_86278144 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <div class="co-heading"><h2><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h2></div>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_205125127861c1512c62e0a5_73659955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198520653961c1512c62ec46_86278144', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_144286799261c1512c69f610_50819191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_178512691061c1512c6a0464_97597350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_27200847461c1512c69e6b9_75771186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144286799261c1512c69f610_50819191', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178512691061c1512c6a0464_97597350', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_195479404561c1512c6a2a28_99201469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_111487999261c1512c6a1f76_72592973 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195479404561c1512c6a2a28_99201469', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_189150354961c1512c62d5d0_30670805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_189150354961c1512c62d5d0_30670805',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_205125127861c1512c62e0a5_73659955',
  ),
  'page_title' => 
  array (
    0 => 'Block_198520653961c1512c62ec46_86278144',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_27200847461c1512c69e6b9_75771186',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_144286799261c1512c69f610_50819191',
  ),
  'page_content' => 
  array (
    0 => 'Block_178512691061c1512c6a0464_97597350',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_111487999261c1512c6a1f76_72592973',
  ),
  'page_footer' => 
  array (
    0 => 'Block_195479404561c1512c6a2a28_99201469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205125127861c1512c62e0a5_73659955', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27200847461c1512c69e6b9_75771186', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111487999261c1512c6a1f76_72592973', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
