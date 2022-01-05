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
<!doctype html>
<html lang="{$language.iso_code}">

  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

    <body id="{$page.page_name}" class="{$page.body_classes|classnames} {if isset($WB_mainLayout)}{$WB_mainLayout}{/if} {if isset($WB_darklightLayout)}{$WB_darklightLayout}{/if} {if isset($WB_showDarkLightMenu)}{$WB_showDarkLightMenu}{/if}">
{if isset($WB_showPanelTool) && $WB_showPanelTool}
  {include file="modules/wbthemecustomizer/views/templates/front/colortool.tpl"}
{/if}
{if isset($WB_showDarkLightMenu) && $WB_showDarkLightMenu}
  {include file="modules/wbthemecustomizer/views/templates/front/wbdarklight.tpl"}
{/if}

    {block name='hook_after_body_opening_tag'}
      {hook h='displayAfterBodyOpeningTag'}
    {/block}

    <main>
      {block name='product_activation'}
        {include file='catalog/_partials/product-activation.tpl'}
      {/block}

      <header id="header">
        {block name='header'}
          {include file='_partials/header.tpl'}
        {/block}
      </header>

      {block name='notifications'}
        {include file='_partials/notifications.tpl'}
      {/block}
    {if $page.page_name == 'index'}
      <section id="wrapper">
        {* {hook h="displayWrapperTop"} *}
        <div class="container-fluid">
          <div class="row">
          {block name='breadcrumb'}
            {include file='_partials/breadcrumb.tpl'}
          {/block}

          {block name="left_column"}
            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              {if $page.page_name == 'product'}
                {hook h='displayLeftColumnProduct'}
              {else}
                {hook h="displayLeftColumn"}
              {/if}
            </div>
          {/block}

          {block name="content_wrapper"}
            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              {hook h="displayContentWrapperTop"}
              {block name="content"}
                <p>Hello world! This is HTML5 Boilerplate.</p>
              {/block}
              {hook h="displayContentWrapperBottom"}
            </div>
          {/block}

          {block name="right_column"}
            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              {if $page.page_name == 'product'}
                {hook h='displayRightColumnProduct'}
              {else}
                {hook h="displayRightColumn"}
              {/if}
            </div>
          {/block}
        </div>
        </div>
        {hook h="displayWrapperBottom"}
      </section>
    {else}

      <section id="wrapper">
        {* {hook h="displayWrapperTop"} *}
        <div class="container">
          <div class="row">
          {block name='breadcrumb'}
            {include file='_partials/breadcrumb.tpl'}
          {/block}

          {block name="left_column"}
            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              {if $page.page_name == 'product'}
                {hook h='displayLeftColumnProduct'}
              {else}
                {hook h="displayLeftColumn"}
              {/if}
            </div>
          {/block}

          {block name="content_wrapper"}
            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              {hook h="displayContentWrapperTop"}
              {block name="content"}
                <p>Hello world! This is HTML5 Boilerplate.</p>
              {/block}
              {hook h="displayContentWrapperBottom"}
            </div>
          {/block}

          {block name="right_column"}
            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              {if $page.page_name == 'product'}
                {hook h='displayRightColumnProduct'}
              {else}
                {hook h="displayRightColumn"}
              {/if}
            </div>
          {/block}
        </div>
        </div>
        {hook h="displayWrapperBottom"}
      </section>

    {/if}
      <footer id="footer">
        {block name="footer"}
          {include file="_partials/footer.tpl"}
        {/block}
      </footer>

    </main>

    {block name='javascript_bottom'}
      {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}

    {block name='hook_before_body_closing_tag'}
      {hook h='displayBeforeBodyClosingTag'}
    {/block}

    <input type="hidden" value="{{$customer.id_default_group}}" id="id_group" />
    <input type="hidden" value="{{$customer.id}}" id="id_customer"/>
    <input type="hidden" id="click_modal" data-toggle="modal" data-target="#modalConfirmation">
    <div class="modal fade" id="modalConfirmation" role="dialog">
      <div class="modal-dialog">
        <center>
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{l s='Title modal registration' d='Shop.Theme.Customeraccount'}</h4>
            </div>
            <div class="modal-body">
              <img src="img/Yes_Check_Circle.png" class="img-section" width="30%">
              <p class="info-text">
                {l s='First message registration' d='Shop.Theme.Customeraccount'}
                <br>
                {l s='Second message registration' d='Shop.Theme.Customeraccount'}
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" id="ok_modal" class="btn-style btn btn-danger" data-dismiss="modal">{l s='Close' d='Shop.Theme.Customeraccount'}</button>
            </div>
          </div>
        </center>
      </div>
    </div>
  </body>

  <script type="text/javascript">
    var id_mom = "{$customer.id}";
    var email_mom = "{$customer.email}";
    var group_mom = "{$customer.id_default_group}";

    $(document).ready(function(){
      $("#nav-message-alert").hide();
      var id_group = $("#id_group").val();

      $('#save-mom').prop('disabled', false);
      $("#mom-form").find(".hidden-log").hide();

      if (id_group == 10) {
        $("#search_widget").remove();
        $("#_desktop_cart").remove();
        $("#_desktop_top_menu").remove();
        $(".hcom").remove();
        $(".wishl").remove();
        $(".head-left").remove();
        $(".rightmenu").remove();
      }

      if (id_group == 10) {
          $("#nav-message-alert").show();
          $(".card_user").hide();
          $(".addresses-footer").hide();
          $('#save-mom').prop('disabled', false);
          $("#mom-form").find(".hidden-log").hide();
      } else if (id_group == 1) {
          $('#save').prop('disabled', true);
          $('#save-mom').prop('disabled', true);
          $("#mom-form").find(".hidden-log").show();
      } else {
        $(".card_mom").hide();
        $('#save').prop('disabled', false);
        $("#customer-form").find(".hidden-log").hide();
      }
    });

    $("#switch-log").hide();
    $("#history-mom").hide();
    $("#balance_score").hide();
    $("#order-slips-link").hide();
    $("#terms-conditions-mothers").hide();

    var switchStatus = false;  
    var id_group = $("#id_group").val();
    var id_customer = $("#id_customer").val();
    var status = $("#togBtn").val();

    if(id_group == 10){
      $("#switch-log").show();
      $("#history-mom").show();
      $("#history-link").hide();
      $("#discounts-link").hide();
      $("#balance_score").show();
      $("#terms-conditions-mothers").show();
      $(".cat-title").hide();

      $.ajax({
        method: "POST",
        url: "/ajax/ApiSelectActiveService.php",
        data : {
          'id_customer' : id_customer
        },
      }).done(function(response) {
         if(response == 1){
          $("#togBtn").attr("checked","checked");
         } else {
          $("#togBtn").removeAttr("checked","checked");
         }
      });
    }

    $("#togBtn").on('change', function() {
        switchStatus = $(this).is(':checked');
        if (switchStatus == true) {
            $.ajax({
              method: "POST",
              url: "/ajax/ApiSetActiveService.php",
              data : {
                'active_service' : 1,
                'id_customer' : id_customer
              },
            }).done(function(response) {

            });
        } else {
          $.ajax({
              method: "POST",
              url: "/ajax/ApiSetActiveService.php",
              data : {
                'active_service' : 0,
                'id_customer' : id_customer
              },
            }).done(function(response) {

            });
        }
        location.reload();
    });
  </script>

  <literal>
    <script type="text/javascript">
      $(document).ready(function(){
      
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };

        var data = getUrlParameter('momVerified');
        if ( data == 2 && id_mom != "" ) {
          if ( id_mom != "" && email_mom != "" && group_mom != "" ) {
            $.ajax({
              method: "POST",
              url: "/ajax/ApiSetInactiveMom.php",
              data : {
                'mom' : id_mom,
                'email': email_mom,
                'group': group_mom
              },
            }).success(function(response) {  });
          }
          $("#click_modal").click();
        }

        $("#modalConfirmation").click(function(){
          var getUrl = window.location;
          var urlHome = getUrl .protocol + "//" + getUrl.host + "/";
          window.location.href = urlHome;
        });
      });
    </script>
  </literal>

</html>
