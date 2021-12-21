<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:36
  from 'C:\xampp\htdocs\lavanderias\themes\electrive\templates\catalog\_partials\miniatures\all-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15128d15696_19022445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f65a717e628c18f2b5164b60005a33226c076e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\themes\\electrive\\templates\\catalog\\_partials\\miniatures\\all-product.tpl',
      1 => 1640058832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c15128d15696_19022445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '62577865761c15128c9d776_54147899';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99152689161c15128ca1687_28649588', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_79687918961c15128ca84c5_68953984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail first-img">
            <img
              class = "center-block img-responsive"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
              data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
              width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
            >
            <?php $_smarty_tpl->_assignInScope('count', 0);?>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>
              <img class="second-img img-responsive center-block"  
                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                itemprop="image"
                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
              >
              <?php }?> <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </a>
        <?php } else { ?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
            <img class="img-responsive center-block"
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            >
          </a>
        <?php }?>
             
               
             
          <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_29243410761c15128cd8719_12375468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
            <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
          <?php } else { ?>
            <h2 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h2>
          <?php }?>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_114164076461c15128cdfde4_97390274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_description_short'} */
class Block_105486635961c15128ce2ff2_64364962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemprop="description" class="listds"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
        <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_price_and_shipping'} */
class Block_177799559461c15128ce9ee2_96342273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping-top">
              <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
               
              <?php }?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

              

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


            </div>
          <?php }?>
        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'quick_view'} */
class Block_150208979961c15128cfdc51_96514230 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <a class="quick-view quick" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick-view','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" href="#" data-link-action="quickview">
                      <svg width="18px" height="17px"><use xlink:href="#bquick" /></svg>
                    </a>
                  <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_miniature_item'} */
class Block_99152689161c15128ca1687_28649588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_99152689161c15128ca1687_28649588',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_79687918961c15128ca84c5_68953984',
  ),
  'product_name' => 
  array (
    0 => 'Block_29243410761c15128cd8719_12375468',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_114164076461c15128cdfde4_97390274',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_105486635961c15128ce2ff2_64364962',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_177799559461c15128ce9ee2_96342273',
  ),
  'quick_view' => 
  array (
    0 => 'Block_150208979961c15128cfdc51_96514230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article class="product-miniature js-product-miniature col-xs-12 propadding" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="brand" content="<?php if ($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'], ENT_QUOTES, 'UTF-8');
} else { ?>RMAG<?php }?>">
<meta itemprop="sku" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
">
<meta itemprop="mpn" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
" />  
    <div class="thumbnail-container text-xs-left">
      <div class="wb-image-block col-md-4 col-sm-5 col-xs-4">
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79687918961c15128ca84c5_68953984', 'product_thumbnail', $this->tplIndex);
?>

       
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

        </div>
<div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
    <link itemprop="availability" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_availability'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta itemprop="price" content=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
>
    <meta itemprop="description" content="<?php if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['description_short'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta itemprop="itemCondition" content="New">
    <meta itemprop="priceCurrency" content="RON">
    <meta itemprop="priceValidUntil" content="<?php echo htmlspecialchars(date('Y-m-d',strtotime('+120 days')), ENT_QUOTES, 'UTF-8');?>
" />
</div>
      <div class="wb-product-desc product-description text-xs-left col-md-8 col-sm-7 col-xs-8">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29243410761c15128cd8719_12375468', 'product_name', $this->tplIndex);
?>

        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114164076461c15128cdfde4_97390274', 'product_reviews', $this->tplIndex);
?>

        
       
        
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105486635961c15128ce2ff2_64364962', 'product_description_short', $this->tplIndex);
?>
 
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177799559461c15128ce9ee2_96342273', 'product_price_and_shipping', $this->tplIndex);
?>

        <div class="button-group all-to">
                  <button title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" class="wish" id="wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
, 1); return false;"><svg width="18px" height="18px"><use xlink:href="#heart"></use></svg></button>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150208979961c15128cfdc51_96514230', 'quick_view', $this->tplIndex);
?>

              <div class="add-cartt d-inline-block">
                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
                <input type="hidden" name="qty" value="1">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>
                <button  data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'stock out','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" data-button-action="add-to-cart" class="cartbt" disabled>
                    <svg width="18px" height="17px"><use xlink:href="#pcart"></use></svg>
                </button>
                <?php } else { ?>
                <button  data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'add to cart','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" data-button-action="add-to-cart" class="cartbt">
                    <svg width="18px" height="19px"><use xlink:href="#pcart"></use></svg>
                </button>
                <?php }?>
                </form>
              </div> 
        </div>
      </div>

     

      

    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
