<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:46
  from 'module:wbblocksearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c15132b51002_59086236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8de0f71efbe158c813f6cf11de131ef8ab551fc' => 
    array (
      0 => 'module:wbblocksearchviewstemplat',
      1 => 1640058824,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_61c15132b51002_59086236 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block search module TOP -->
<div class="wbSearch search_widget col-xl-8 col-lg-7 col-md-7 col-sm-12 col-xs-12 text-xs-left" id="search_widget">
	<div id="search_block_top" class="text-xs-left">
		<div class="cat-select float-xs-left">
			<select id="search_category" name="search_category" class="form-control">
				<option value="all">All Categories</option>
				<option value="2">Servicios</option><option value="10">--Madre Arte</option><option value="11">--Madre Postre</option><option value="12">--Madre Cuadros Vivos</option><option value="13">--Madre Chef</option><option value="14">--Madre Flores</option><option value="15">--Madre Psicóloga</option><option value="16">--Madre Accesorio</option><option value="17">--Madre Idioma</option><option value="18">--Madre Empanada</option><option value="20">--Madre Charretera</option><option value="22">--Madre Educadora</option><option value="23">--Madre Montessori</option><option value="24">--Madre Traducciones</option><option value="25">--Madre Costura</option><option value="26">--Madre Plancha</option><option value="27">--Madre Recetas</option><option value="28">--Madre Zumba</option><option value="29">--Madre Manualidades</option><option value="30">--Madre Meditación</option><option value="31">--Madre Maquillaje</option><option value="32">--Madre Lectura</option><option value="33">--Madre Escritora</option><option value="34">--Madre Artesana</option><option value="35">--Madre Asesora de Imagen</option><option value="36">--Madre Macramé</option><option value="37">--Madre Yoga</option><option value="38">--Madre DJ</option><option value="39">--Madre Dec. de Interiores</option><option value="40">--Madre Bróker</option><option value="41">--Madre Fiestas Infantiles</option><option value="42">--Madre Velas</option><option value="43">--Madre Cantante</option><option value="44">--Madre Panadera</option><option value="45">--Madre Narración</option><option value="46">--Madre Lencería</option><option value="47">--Madre Ropa Muñecas</option><option value="48">--Madre Fisioterapeuta</option><option value="49">--Madre Instr. Musicales</option><option value="50">--Madre Deportes</option><option value="51">--Madre Ballet</option><option value="52">--Madre pedagoga</option><option value="53">--Madre Táper</option><option value="54">--Madre Tratamiento Capilar</option><option value="55">--Madre Aceites Naturales</option><option value="56">--Madre Productora de Cafe</option><option value="57">--Madre Porta Tapabocas</option><option value="58">--Madre Tejidos</option><option value="59">--Madre Estampados</option><option value="60">--Madre Productos Naturales</option><option value="61">--Madre Enfermera</option><option value="62">--Madre masajes relajantes terapéuticos</option><option value="63">--Madre Wedding Planner</option><option value="64">--Madre Abogada</option><option value="65">--Madre Procedimientos invasivos</option><option value="67">--Madre Arepas Paisas</option>
			</select>
					</div>
		<form id="searchbox" class="input-group" method="get" action="https://lavanderias.local/busqueda">
		   
			<input type="hidden" name="controller" value="search">
			
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			
			<input class="search_query form-control" type="text" id="search_query_top" name="s" placeholder="Search here.." value="" />
			
			<div id="wb_url_ajax_search" style="display:none">
			<input type="hidden" value="https://lavanderias.local/modules/wbblocksearch/controller_ajax_search.php" class="url_ajax" />
			</div>
			<div id="sp-btn-search" class="input-group-btn">
			<button type="submit" name="submit_search" class="button-search">
      			<span class="">Search</span>
			</button>
		</div>
		</form>
	</div>
</div>

<script type="text/javascript">
var limit_character = "<p class='limit'>Number of characters at least are 3</p>";
var close_text = "close";
</script>
<!-- /Block search module TOP -->
<?php }
}
