<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:29
  from 'C:\xampp\htdocs\lavanderias\themes\electrive\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151212817a2_53129088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ab3ea19f7051a972aa76daa157243b891f8679a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\themes\\electrive\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1640058832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151212817a2_53129088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '165157164161c15121126473_49934178';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190414876261c15121139f51_55120497', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_94392621761c15121142b00_89466890 extends Smarty_Internal_Block
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
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
              data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
              width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
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
                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
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
             
               
               <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                  <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                  <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
          <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_125577088661c15121169749_80188367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="product-flags">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_reviews'} */
class Block_201002023761c15121181044_93194712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_name'} */
class Block_199883741161c151211836b1_48885947 extends Smarty_Internal_Block
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
/* {block 'product_description_short'} */
class Block_201957388861c1512118a9a2_34387043 extends Smarty_Internal_Block
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
class Block_162662200161c1512118d712_94190861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
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
class Block_139386436761c151211c4a02_02503476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <a class="quick-view quick" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick-view','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" href="#" data-link-action="quickview">
                      <svg width="18px" height="18px"><use xlink:href="#bquick" /></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick-view','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                    </a>
                  <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_miniature_item'} */
class Block_190414876261c15121139f51_55120497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_190414876261c15121139f51_55120497',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_94392621761c15121142b00_89466890',
  ),
  'product_flags' => 
  array (
    0 => 'Block_125577088661c15121169749_80188367',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_201002023761c15121181044_93194712',
  ),
  'product_name' => 
  array (
    0 => 'Block_199883741161c151211836b1_48885947',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_201957388861c1512118a9a2_34387043',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_162662200161c1512118d712_94190861',
  ),
  'quick_view' => 
  array (
    0 => 'Block_139386436761c151211c4a02_02503476',
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
    <div class="thumbnail-container text-xs-center">
      <div class="wb-image-block">
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94392621761c15121142b00_89466890', 'product_thumbnail', $this->tplIndex);
?>

           <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125577088661c15121169749_80188367', 'product_flags', $this->tplIndex);
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
      <div class="wb-product-desc product-description text-xs-center">
       
        <div class="progre">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201002023761c15121181044_93194712', 'product_reviews', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199883741161c151211836b1_48885947', 'product_name', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201957388861c1512118a9a2_34387043', 'product_description_short', $this->tplIndex);
?>
 
        
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162662200161c1512118d712_94190861', 'product_price_and_shipping', $this->tplIndex);
?>
  

         
            <div class="button-group allpbt">
              
              <div class="absbtn">
                  <div class="add-cart d-inline-block">
                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
                    <input type="hidden" name="qty" value="1">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>
                    <button  data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'stock out','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" data-button-action="add-to-cart" class="cartb" disabled>
                        <svg width="18px" height="18px"><use xlink:href="#pcart"></use></svg><span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'stock out','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                    </button>
                    <?php } else { ?>
                    <button  data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'add to cart','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" data-button-action="add-to-cart" class="cartb">
                        <svg width="18px" height="18px"><use xlink:href="#pcart"></use></svg><span> + <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'add to cart','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                    </button>
                    <?php }?>
                    </form>
                  </div>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139386436761c151211c4a02_02503476', 'quick_view', $this->tplIndex);
?>

                  <button title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" class="wish" id="wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
, 1); return false;"><svg width="20px" height="20px"><use xlink:href="#heart"></use></svg><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></button>
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
