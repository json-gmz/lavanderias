<?php
/* Smarty version 3.1.33, created on 2021-12-20 22:59:39
  from 'module:wbblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61c1512b9ec268_44921612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc3dd5dc58f043f4f6ddab31f43c39299b66fd2' => 
    array (
      0 => 'module:wbblogviewstemplatesfront',
      1 => 1640058825,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:wbblog/views/templates/front/post-video.tpl' => 2,
    'module:wbblog/views/templates/front/post-audio.tpl' => 2,
    'module:wbblog/views/templates/front/post-gallery.tpl' => 2,
  ),
),false)) {
function content_61c1512b9ec268_44921612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\lavanderias\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="next-prevb container">
<div class="home_blog_post_area <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbbdp_designlayout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
">
	<div class="home_blog_post">
 <div class="page_title_area">
			<?php if (isset($_smarty_tpl->tpl_vars['wbbdp_title']->value)) {?>
				 <div class="home-heading"><h2 class="bold-second-word"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbbdp_title']->value, ENT_QUOTES, 'UTF-8');?>
</span></h2></div>
			<?php }?>
			<!-- <?php if (isset($_smarty_tpl->tpl_vars['wbbdp_subtext']->value)) {?>
				<p class="page_subtitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbbdp_subtext']->value, ENT_QUOTES, 'UTF-8');?>
</p>
			<?php }?> -->
					</div>
		<div class="home_blog_post_inner row marginrow">
		<div id="blog" class="owl-theme owl-carousel home_blog_post_inner">
		<?php if ((isset($_smarty_tpl->tpl_vars['wbblogposts']->value) && !empty($_smarty_tpl->tpl_vars['wbblogposts']->value))) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wbblogposts']->value, 'wbblgpst');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wbblgpst']->value) {
?>
				<article class="blog_post col-xs-12 propadding">
					<div class="blog_post_content">
						
						<div class="blog_post_content_top col-sm-6">
							<div class="post_thumbnail">
								<?php if ($_smarty_tpl->tpl_vars['wbblgpst']->value['post_format'] == 'video') {?>
									<?php $_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['wbblgpst']->value['video']));?>
									<?php if (count($_smarty_tpl->tpl_vars['postvideos']->value) > 1) {?>
										<?php $_smarty_tpl->_subTemplateRender("module:wbblog/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'570','height'=>"316",'class'=>"carousel"), 0, true);
?>
									<?php } else { ?>
										<?php $_smarty_tpl->_subTemplateRender("module:wbblog/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'570','height'=>"316",'class'=>''), 0, true);
?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['wbblgpst']->value['post_format'] == 'audio') {?>
									<?php $_smarty_tpl->_assignInScope('postaudio', explode(',',$_smarty_tpl->tpl_vars['wbblgpst']->value['audio']));?>
									<?php if (count($_smarty_tpl->tpl_vars['postaudio']->value) > 1) {?>
										<?php $_smarty_tpl->_subTemplateRender("module:wbblog/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'570','height'=>"316",'class'=>"carousel"), 0, true);
?>
									<?php } else { ?>
										<?php $_smarty_tpl->_subTemplateRender("module:wbblog/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'570','height'=>"316",'class'=>''), 0, true);
?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['wbblgpst']->value['post_format'] == 'gallery') {?>
									<?php if (count($_smarty_tpl->tpl_vars['wbblgpst']->value['gallery_lists']) > 1) {?>
										<?php $_smarty_tpl->_subTemplateRender("module:wbblog/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['wbblgpst']->value['gallery_lists'],'imagesize'=>"home_blog",'class'=>"carousel"), 0, true);
?>
									<?php } else { ?>
										<?php $_smarty_tpl->_subTemplateRender("module:wbblog/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['wbblgpst']->value['gallery_lists'],'imagesize'=>"home_blog",'class'=>''), 0, true);
?>
									<?php }?>
								<?php } else { ?>
									<img class="wbblog_img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbblgpst']->value['post_img_home_blog'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
">
										<div class="blog_mask content">
											<div class="blog_mask_content">
											<a class="thumbnail_lightbox icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbblgpst']->value['post_img_large'], ENT_QUOTES, 'UTF-8');?>
" data-lightbox="example-set">
											<i class="sicon fa fa-search"></i>
											</a>
											<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="icon"><i class="fa fa-link"></i></a>
											</div>
										</div>
								<?php }?>
							</div>
							<div>
								<span class="blogd text-xs-center">
									<span class="bmonth d-inline-block"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['wbblgpst']->value['post_date']," %d"), ENT_QUOTES, 'UTF-8');?>
</span><span class="bdate"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['wbblgpst']->value['post_date'],"%b"), ENT_QUOTES, 'UTF-8');?>
</span>
								</span>
							</div>
						</div>
							<div class="blog_post_content_bottom blog-ct text-xs-left col-sm-6">
							
							<div class="blogdw">
							<h3 class="post_title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wbblgpst']->value['post_title'],60,' ...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
							<span class="bauthor"><span class="meta_author"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By','mod'=>'wbblog'),$_smarty_tpl ) );?>
 : <span class="bauc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbblgpst']->value['post_author_arr']['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbblgpst']->value['post_author_arr']['lastname'], ENT_QUOTES, 'UTF-8');?>
</span></span></span>	
							<div class="post_content">
								<?php if (isset($_smarty_tpl->tpl_vars['wbblgpst']->value['post_excerpt']) && !empty($_smarty_tpl->tpl_vars['wbblgpst']->value['post_excerpt'])) {?>
									<p><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wbblgpst']->value['post_excerpt'],100,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
								<?php } else { ?>
									<p><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wbblgpst']->value['post_content'],100,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
								<?php }?>
							</div>
							<div class="blogdau">
								<div class="blogc">
									<span class="content_more">
										<a class="read_more btn btn-primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wbblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'wbblog'),$_smarty_tpl ) );?>
</a>
									</span>
								</div>
							</div>
						</div>	
					</div>
					</div>
				</article>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Blog Post Found','mod'=>'wbblog'),$_smarty_tpl ) );?>
</p>
		<?php }?>
		</div>
		</div>
	</div>
</div>
</div>

<?php }
}
