{*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2018 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="container">
<div class="logos">
  <div class="row rless">
{if $logoslider.slides}
  <div data-interval="{$logoslider.speed}" data-wrap="{$logoslider.wrap}" data-pause="{$logoslider.pause}">
    <ul id="owl-logo" class="rslide owl-carousel owl-theme">
      {foreach from=$logoslider.slides item=slide}
        <li class="lslide col-xs-12 cless">
          <a href="{$slide.url}">
            <img src="{$slide.image_url}" alt="{$slide.legend}" {$slide.size|replace:"\"":""} class="img-responsive center-block"/>
          </a>
        </li>
      {/foreach}
    </ul>
  </div>
{/if}
</div>
</div>
</div>