{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class="container">
  <div class="home-heading"><h2 class="bold-second-word"><span>{l s='New Products' d='Shop.Theme.Catalog'}</span></h2></div>
  <div class="row">
     <div class="left-bnr leftbanner1 col-lg-3 col-md-3 col-sm-4 col-xs-12 hidden-sm-down"></div>
     <section class="clearfix next-prevb all-sidepro col-lg-9 col-md-9 col-sm-8 col-xs-12">
      <div class="products row marginrow">
          <div id="owl-new" class="owl-carousel owl-theme">
              {$num_row=2} <!-- Number of Row Ex 2,3,4,5....etc-->
              {$i=0}
              {if count($products) <= 6}
                {foreach from=$products item="product"}
                  {include file="catalog/_partials/miniatures/all-product.tpl" product=$product}
                {/foreach}
              {else}
                {foreach from=$products item="product"}
                  {if $i == 0}
                    <ul>
                      <li>
                  {/if}
                        {include file="catalog/_partials/miniatures/all-product.tpl" product=$product}
                        {$i=$i+1}
                  {if $i == $num_row}
                      </li>
                    </ul>
                    {$i=0}
                  {/if}
                {/foreach}
              {/if}
           </div>
         </div>
    </section>
  </div>
</div>