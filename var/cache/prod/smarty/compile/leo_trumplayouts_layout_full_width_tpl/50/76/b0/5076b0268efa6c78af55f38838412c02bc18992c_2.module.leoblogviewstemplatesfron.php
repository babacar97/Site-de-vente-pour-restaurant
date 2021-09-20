<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:17:43
  from 'module:leoblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61438a47a46af6_95121919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5076b0268efa6c78af55f38838412c02bc18992c' => 
    array (
      0 => 'module:leoblogviewstemplatesfron',
      1 => 1631614370,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:leoblog/views/templates/front/default/_social.tpl' => 1,
    'module:leoblog/views/templates/front/default/_facebook_comment.tpl' => 1,
    'module:leoblog/views/templates/front/default/_diquis_comment.tpl' => 1,
    'module:leoblog/views/templates/front/default/_local_comment.tpl' => 2,
  ),
),false)) {
function content_61438a47a46af6_95121919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117739967961438a479ee466_26132725', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_117739967961438a479ee466_26132725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_117739967961438a479ee466_26132725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>


	<?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
			<div id="blogpage">
				<div class="blog-detail">
					<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, We are updating data, please come back later!!!!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
				</div>
			</div>
		<?php } else { ?>	
		<div id="blogpage">
			<article class="blog-detail">
				<?php if ($_smarty_tpl->tpl_vars['is_active']->value) {?>
					<h1 class="blog-title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->meta_title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
					<div class="blog-meta">
						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_author','1')) {?>
						<span class="blog-author">
							<i class="material-icons">person</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted By','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
: </span>
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->author_link,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->author,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->author,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
						</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_category','1')) {?>
						<span class="blog-cat"> 
							<i class="material-icons">list</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
: </span> 
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->category_link,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->category_title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->category_title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
						</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_created','1')) {?>
						<span class="blog-created">
							<i class="material-icons">&#xE192;</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
: </span> 
							<time class="date" datetime="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%A"),'html','UTF-8' )),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
,	<!-- day of week -->
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%B"),'html','UTF-8' )),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
		<!-- month-->
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%e"),'html','UTF-8' )),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
,	<!-- day of month -->
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value->date_add),"%Y"),'html','UTF-8' )),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
		<!-- year -->
							</time>
						</span>
						<?php }?>
						
						<?php if ((isset($_smarty_tpl->tpl_vars['blog_count_comment']->value)) && $_smarty_tpl->tpl_vars['config']->value->get('item_show_counter','1')) {?>
						<span class="blog-ctncomment">
							<i class="material-icons">comment</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:</span> 
							<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog_count_comment']->value), ENT_QUOTES, 'UTF-8');?>

						</span>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['blog']->value->hits)) && $_smarty_tpl->tpl_vars['config']->value->get('item_show_hit','1')) {?>
						<span class="blog-hit">
							<i class="material-icons">favorite</i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hit','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
:</span>
							<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value->hits), ENT_QUOTES, 'UTF-8');?>

						</span>
						<?php }?>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['blog']->value->preview_url && $_smarty_tpl->tpl_vars['config']->value->get('item_show_image','1')) {?>
						<div class="blog-image">
							<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->preview_url,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value->meta_title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" />
						</div>
					<?php }?>

					<div class="blog-description">
						<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_description',1)) {?>
							<?php echo $_smarty_tpl->tpl_vars['blog']->value->description;?>
						<?php }?>
						<?php echo $_smarty_tpl->tpl_vars['blog']->value->content;?>
					</div>
					
					

					<?php if (trim($_smarty_tpl->tpl_vars['blog']->value->video_code)) {?>
					<div class="blog-video-code">
						<div class="inner ">
							<?php echo $_smarty_tpl->tpl_vars['blog']->value->video_code;?>
						</div>
					</div>
					<?php }?>

					<div class="social-share">
						 <?php $_smarty_tpl->_subTemplateRender("module:leoblog/views/templates/front/default/_social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['tags']->value) {?>
					<div class="blog-tags">
						<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
					 
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag', false, NULL, 'tag', array (
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
							 <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['tag'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['tag'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						 
					</div>
					<?php }?>

					<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value) || !empty($_smarty_tpl->tpl_vars['tagrelated']->value)) {?>
					<div class="extra-blogs row">
					<?php if (!empty($_smarty_tpl->tpl_vars['samecats']->value)) {?>
						<div class="col-lg-6 col-md-6 col-xs-12">
							<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Same Category','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
							<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['samecats']->value, 'cblog', false, NULL, 'cblog', array (
));
$_smarty_tpl->tpl_vars['cblog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->do_else = false;
?>
								<li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cblog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cblog']->value['meta_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-12">
							<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related by Tags','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
							<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tagrelated']->value, 'cblog', false, NULL, 'cblog', array (
));
$_smarty_tpl->tpl_vars['cblog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cblog']->value) {
$_smarty_tpl->tpl_vars['cblog']->do_else = false;
?>
								<li><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cblog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cblog']->value['meta_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					<?php }?>
					</div>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['productrelated']->value) {?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_listcomment','1') == 1) {?>
						<div class="blog-comment-block clearfix">
							<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local') == 'facebook') {?>
								<?php $_smarty_tpl->_subTemplateRender("module:leoblog/views/templates/front/default/_facebook_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php } elseif ($_smarty_tpl->tpl_vars['config']->value->get('item_comment_engine','local') == 'diquis') {?>
								<?php $_smarty_tpl->_subTemplateRender("module:leoblog/views/templates/front/default/_diquis_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							
							<?php } else { ?>
								<?php $_smarty_tpl->_subTemplateRender("module:leoblog/views/templates/front/default/_local_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php }?>
						
					<?php } elseif ($_smarty_tpl->tpl_vars['config']->value->get('item_show_listcomment','1') == 0 && $_smarty_tpl->tpl_vars['config']->value->get('item_show_formcomment','1') == 1) {?>
						<div class="blog-comment-block clearfix">
							<?php $_smarty_tpl->_subTemplateRender("module:leoblog/views/templates/front/default/_local_comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</div>
					<?php }?>
				<?php } else { ?>
					<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, This blog is not avariable. May be this was unpublished or deleted.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
				<?php }?>

			</article>
		</div>
		<?php }?>

<?php
}
}
/* {/block 'content'} */
}
