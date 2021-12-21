{*
* 2007-2019 PrestaShop
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
*  @copyright  2007-2019 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*
*  MODIFIED BY MYPRESTA.EU FOR PRESTASHOP 1.7 PURPOSES !
*
*}

<script type="text/javascript">
    var wbproductcomments_controller_url = '{$wbproductcomments_controller_url nofilter}';
    var confirm_report_message = '{l s='Are you sure that you want to report this comment?' mod='wbproductcomments' js=1}';
    var secure_key = '{$secure_key}';
    var wbproductcomments_url_rewrite = '{$wbproductcomments_url_rewriting_activated}';
    var wbproductcomment_added = '{l s='Your comment has been added!' mod='wbproductcomments' js=1}';
    var wbproductcomment_added_moderation = '{l s='Your comment has been submitted and will be available once approved by a moderator.' mod='wbproductcomments' js=1}';
    var wbproductcomment_title = '{l s='New comment' mod='wbproductcomments' js=1}';
    var wbproductcomment_ok = '{l s='OK' mod='wbproductcomments' js=1}';
    var moderation_active = {$moderation_active};
</script>

<div id="wbproductCommentsBlock">
    {if $averageTotal > 0}
    <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
        <meta itemprop="reviewCount" content="{$total_review}" />
        <meta itemprop="ratingValue" content="{$averageTotal}" />
    </div>

<div class="d-inline-block rateavg-bo">
    <div class="d-inline-block">
        {if $averageTotal > 0}
            <span class="avgt d-inline-block rate-tot">{$averageTotal}</span>
        {/if}
    </div>
    <div class="d-inline-block ratea"><i class="fa fa-star"></i></div>
</div>
<div class="d-inline-block rate-avg">
    <ul>
        {* {$total_review} *}
        {foreach from=$review_user item=review}
            <li>
                <div class="d-inline-block">
                    <span class="num d-inline-block">{$review@key}</span><span class="rate d-inline-block"><i class="fa fa-star"></i></span>
                </div>
                <div class="d-inline-block total-avg">
                    <div class="star-main d-inline-block" style="width:{(($review * 100)/$total_review)|round:0}%">
                        <div class="starm bar{$review@key} color-{$review@key}"></div>
                    </div>
                </div>
                <div class="d-inline-block">
                    <div class="totl">  
                        {$review}
                    </div>
                </div>
            </li>
        {/foreach}
    </ul>
</div>

{/if}
    {* <h1 class="h1 products-section-title text-uppercase rtitle">{l s='Reviews' mod='wbproductcomments'}</h1> *}
    <div id="wbproduct_comments_block_tab">
         <div class="clearfix">
            {if ($too_early == false AND ($logged OR $allow_guests))}
                <a class="open-comment-form btn btn-primary" href="#new_comment_form">{l s='Write your review' mod='wbproductcomments'}</a>
            {/if}
        </div>
        <div id="new_comment_form_ok" class="alert alert-success" style="display:none;padding:10px"></div>
        <div id="">
            {if $comments}
                {foreach from=$comments item=comment}
                    {if $comment.content}
                        <div class="comment clearfix" itemprop="review" itemscope itemtype="https://schema.org/Review">
                            <div class="comment_author" >
                                {* <span>{l s='Grade' mod='wbproductcomments'}&nbsp</span> *}
                                <div class="star_content clearfix d-inline-block avg-rate bg-re{$comment.grade}" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    {* {section name="i" start=0 loop=5 step=1}
                                        {if $comment.grade le $smarty.section.i.index}
                                            <div class="star"></div>
                                        {else}
                                            <div class="star star_on"></div>
                                        {/if}
                                    {/section}

                                    <meta itemprop="worstRating" content = "0" />
                                    <meta itemprop="ratingValue" content = "{$comment.grade}" />
                                    <meta itemprop="bestRating" content = "5" /> *}
                                    
                                    {$comment.grade}<i class="fa fa-star"></i>
                                    

                                </div>
                                <strong itemprop="author d-inline-block">{$comment.customer_name|escape:'html':'UTF-8'}</strong>
                                <div class="comment_author_infos" >
                                    
                                    <div class="comdate">
                                    <span>{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}</span><span class="arr">|</span><span class="title_block" itemprop="name">{$comment.title}</span>
                                    <meta itemprop="datePublished" content="{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}" />
                                </div>
                                </div>
                            </div>
                            <div class="comment_details">
                                <p itemprop="reviewBody">{$comment.content|escape:'html':'UTF-8'|nl2br nofilter}</p>
                                <ul>
                                    {if $comment.total_advice > 0}
                                        <li>{l s='%1$d out of %2$d people found this review useful.' sprintf=[$comment.total_useful,$comment.total_advice] mod='wbproductcomments'}</li>
                                    {/if}
                                    {if $logged}
                                        {if !$comment.customer_advice}
                                            <li>{l s='Was this comment useful to you?' mod='wbproductcomments'}
                                                <button class="usefulness_btn" data-is-usefull="1" data-id-product-comment="{$comment.id_wbproduct_comment}">{l s='yes' mod='wbproductcomments'}</button>
                                                <button class="usefulness_btn" data-is-usefull="0" data-id-product-comment="{$comment.id_wbproduct_comment}">{l s='no' mod='wbproductcomments'}</button>
                                            </li>
                                        {/if}
                                        {if !$comment.customer_report}
                                            <li><span class="report_btn" data-id-product-comment="{$comment.id_wbproduct_comment}">{l s='Report abuse' mod='wbproductcomments'}</span></li>
                                        {/if}
                                    {/if}
                                </ul>
                                {hook::exec('displayWbProductComment', $comment) nofilter}
                            </div>
                        </div>
                    {/if}
                {/foreach}
            {else}
                {if (!$too_early AND ($logged OR $allow_guests))}
                    <p class="align_center">
                        <a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form">{l s='Be the first to write your review' mod='wbproductcomments'} !</a>
                    </p>
                {else}
                    <p class="align_center rrnews">{l s='No customer reviews for the moment.' mod='wbproductcomments'}</p>
                {/if}
            {/if}
        </div>
</div>
    {if isset($wbproductcomments_product) && $wbproductcomments_product}
        <!-- Fancybox -->
        <div style="display:none">
            <div id="new_comment_form">
                <form id="id_new_comment_form" action="#">
                    <h2 class="title">{l s='Write your review' mod='wbproductcomments'}</h2>
                    {if isset($wbproductcomments_product) && $wbproductcomments_product}
                        <div class="product clearfix">
                            <div class="product_desc">
                                <p class="product_name"><strong>{if isset($wbproductcomments_product->name)}{$wbproductcomments_product->name}{elseif isset($wbproductcomments_product.name)}{$wbproductcomments_product.name}{/if}</strong></p>
                                {if isset($wbproductcomments_product->description_short)}{$wbproductcomments_product->description_short nofilter}{elseif isset($wbproductcomments_product.description_short)}{$wbproductcomments_product.description_short nofilter}{/if}
                            </div>
                        </div>
                    {/if}
                    <div class="new_comment_form_content">
                        <h2>{l s='Write your review' mod='wbproductcomments'}</h2>
                        <div id="new_comment_form_error" class="error" style="display:none;padding:15px 25px">
                            <ul></ul>
                        </div>
                        {if $criterions|@count > 0}
                            <ul id="criterions_list">
                                {foreach from=$criterions item='criterion'}
                                    <li>
                                        <label class="d-inline-block">{$criterion.name|escape:'html':'UTF-8'}</label>
                                        <div class="star_content d-inline-block">
                                            <input class="star" type="radio" name="criterion[{$criterion.id_wbproduct_comment_criterion|round}]" value="1"/>
                                            <input class="star" type="radio" name="criterion[{$criterion.id_wbproduct_comment_criterion|round}]" value="2"/>
                                            <input class="star" type="radio" name="criterion[{$criterion.id_wbproduct_comment_criterion|round}]" value="3"/>
                                            <input class="star" type="radio" name="criterion[{$criterion.id_wbproduct_comment_criterion|round}]" value="4"/>
                                            <input class="star" type="radio" name="criterion[{$criterion.id_wbproduct_comment_criterion|round}]" value="5" checked="checked"/>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                {/foreach}
                            </ul>
                        {/if}
                        <label for="comment_title" class="text-xs-left">{l s='Title for your review' mod='wbproductcomments'}<sup class="required">*</sup></label>
                        <input id="comment_title" name="title" type="text" value=""/>

                        <label for="content" class="text-xs-left">{l s='Your review' mod='wbproductcomments'}<sup class="required">*</sup></label>
                        <textarea id="content" name="content"></textarea>

                        {if $allow_guests == true && !$logged}
                            <label class="text-xs-left">{l s='Your name' mod='wbproductcomments'}<sup class="required">*</sup></label>
                            <input id="commentCustomerName" name="customer_name" type="text" value=""/>
                        {/if}

                        <div id="new_comment_form_footer">
                            <input id="id_wbproduct_comment_send" name="id_product" type="hidden" value='{$id_wbproduct_comment_form}'/>
                            <p class="required"><sup>*</sup> {l s='Required fields' mod='wbproductcomments'}</p>
                            <p class="fr float-xs-right">
                                {if $WBPRODUCT_COMMENTS_GDPR == 1}
                                {literal}
                                    <input onchange="if($(this).is(':checked')){$('#submitNewMessage').removeClass('gdpr_disabled'); $('#submitNewMessage').removeAttr('disabled'); rebindClickButton();}else{$('#submitNewMessage').addClass('gdpr_disabled'); $('#submitNewMessage').off('click'); $('#submitNewMessage').attr('disabled', 1); }" id="gdpr_checkbox" type="checkbox" >
                                {/literal}
                                    {l s='I accept ' mod='wbproductcomments'} <a target="_blank" href="{$link->getCmsLink($WBPRODUCT_COMMENTS_GDPRCMS)}">{l s='privacy policy' mod='wbproductcomments'}</a> {l s='rules' mod='wbproductcomments'}
                                {/if}

                                <button {if $WBPRODUCT_COMMENTS_GDPR == 1}disabled{/if} class="btn btn-primary {if $WBPRODUCT_COMMENTS_GDPR == 1}gdpr_disabled{/if}" id="submitNewMessage" name="submitMessage" type="submit">{l s='Send' mod='wbproductcomments'}</button>&nbsp;
                                {l s='or' mod='wbproductcomments'}&nbsp;<a href="#" onclick="$.fancybox.close();" class="btn btn-primary">{l s='Cancel' mod='wbproductcomments'}</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form><!-- /end new_comment_form_content -->
            </div>
        </div>
        <!-- End fancybox -->
    {/if}
</div>