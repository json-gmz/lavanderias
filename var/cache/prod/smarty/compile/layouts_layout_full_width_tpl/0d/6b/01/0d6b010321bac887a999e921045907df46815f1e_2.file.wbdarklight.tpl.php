<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:44
  from 'C:\xampp\htdocs\lavanderias\modules\wbthemecustomizer\views\templates\front\wbdarklight.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c151304a1266_90112760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d6b010321bac887a999e921045907df46815f1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lavanderias\\modules\\wbthemecustomizer\\views\\templates\\front\\wbdarklight.tpl',
      1 => 1640058828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c151304a1266_90112760 (Smarty_Internal_Template $_smarty_tpl) {
?><svg style="display:none">
<symbol id="userdarkmode" viewBox="0 0 24 24">
    <path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zM12 18c-.89 0-1.74-.2-2.5-.55C11.56 16.5 13 14.42 13 12s-1.44-4.5-3.5-5.45C10.26 6.2 11.11 6 12 6c3.31 0 6 2.69 6 6s-2.69 6-6 6z"></path><path d="M0 0h24v24H0V0z" fill="none"></path>
</symbol>

<symbol id="userlightmode" viewBox="0 0 24 24">
    <path d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zm-2 5.79V18h-3.52L12 20.48 9.52 18H6v-3.52L3.52 12 6 9.52V6h3.52L12 3.52 14.48 6H18v3.52L20.48 12 18 14.48zM12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5z"></path><path d="M0 0h24v24H0V0z" fill="none"></path></svg>
</symbol>

<div class="userwbdlmode">
    <div class="useldlpos">
        <div class="wbdarkmode-layout uscolorac">
            <label for="wbdarkmclr"><input id="wbdarkmclr" type="radio" name="wbdlmodecolor_input" value="wbdarkmode"/><svg><use xlink:href="#userdarkmode"></use></svg>
            <div class="userdmtooltip">Enable Dark Mode</div>
            </label>
        </div>
        <div class="wblightmode-layout uscolorac active">
            <label for="wblightmclr"><input id="wblightmclr" type="radio" name="wbdlmodecolor_input" value="wblightmode"/><svg><use xlink:href="#userlightmode"></use></svg>
            <div class="userdmtooltip">Disable Dark Mode</div>
            </label>
        </div>
    </div>
</div>
<?php }
}
