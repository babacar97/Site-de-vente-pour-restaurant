<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:14:29
  from 'module:leoblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61438985b51082_66350970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9e79a9a9f4adc6928c72dd37ce6faea37d16b16' => 
    array (
      0 => 'module:leoblogviewstemplatesfron',
      1 => 1631614370,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61438985b51082_66350970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<article class="blog-item">
	<div class="blog-image-container">
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_title','1')) {?>
			<h4 class="title">
				<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
			</h4>
		<?php }?>
		<div class="blog-meta">
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_author','1') && !empty($_smarty_tpl->tpl_vars['blog']->value['author'])) {?>
				<span class="blog-author">
					<i class="material-icons">person</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted By','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:</span> 
					<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a> 
				</span>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_category','1')) {?>
				<span class="blog-cat"> 
					<i class="material-icons">list</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:</span> 
					<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
				</span>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_created','1')) {?>
				<span class="blog-created">
					<i class="material-icons">&#xE192;</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
: </span> 
					<time class="date" datetime="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%A"),'html','UTF-8' )),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
,	<!-- day of week -->
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%B"),'html','UTF-8' )),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
		<!-- month-->
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"),'html','UTF-8' )),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
,	<!-- day of month -->
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'html','UTF-8' )),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
		<!-- year -->
					</time>
				</span>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['blog']->value['comment_count'])) && $_smarty_tpl->tpl_vars['config']->value->get('listing_show_counter','1')) {?>	
				<span class="blog-ctncomment">
					<i class="material-icons">comment</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:</span> 
					<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['comment_count']), ENT_QUOTES, 'UTF-8');?>

				</span>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_hit','1')) {?>	
				<span class="blog-hit">
					<i class="material-icons">favorite</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hit','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:</span> 
					<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['hits']), ENT_QUOTES, 'UTF-8');?>

				</span>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['blog']->value['image'] && $_smarty_tpl->tpl_vars['config']->value->get('listing_show_image',1)) {?>
		<div class="blog-image">
			<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['preview_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-fluid" />
		</div>
		<?php }?>
	</div>
	<div class="blog-info">
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_description','1')) {?>
			<div class="blog-shortinfo">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),160,'...' ));?>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_readmore',1)) {?>
			<p>
				<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="more btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
			</p>
		<?php }?>
	</div>
</article>
	
<?php }
}
