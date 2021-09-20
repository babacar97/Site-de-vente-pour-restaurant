<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:14:29
  from 'module:leoblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614389857c3f74_00689660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6e1277023ff7219d330f168b006c522a07a1fe4' => 
    array (
      0 => 'module:leoblogviewstemplatesfron',
      1 => 1631614370,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:leoblog/views/templates/front/default/_listing_blog.tpl' => 2,
    'module:leoblog/views/templates/front/default/_pagination.tpl' => 1,
  ),
),false)) {
function content_614389857c3f74_00689660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93964864261438985783fd2_34633237', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_93964864261438985783fd2_34633237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_93964864261438985783fd2_34633237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section id="main">
		<?php if ((isset($_smarty_tpl->tpl_vars['no_follow']->value)) && $_smarty_tpl->tpl_vars['no_follow']->value) {?>
			<?php $_smarty_tpl->_assignInScope('no_follow_text', 'rel="nofollow"');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('no_follow_text', '');?>
		<?php }?> 
		<div id="blog-listing" class="blogs-container box">
			<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['type']))) {?>
				<?php if ($_smarty_tpl->tpl_vars['filter']->value['type'] == 'tag') {?>
					<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter Blogs By Tag','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 : <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['tag'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h1>
				<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['type'] == 'author') {?>
					<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['id_employee']))) {?>
						<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter Blogs By Blogger','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 : <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['employee']->firstname,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['employee']->lastname,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h1>
					<?php } else { ?>
						<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter Blogs By Blogger','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 : <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['author_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h1>
					<?php }?>
					
				<?php }?>
			<?php } else { ?>
				<h1 class="section-title blog-lastest-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lastest Blogs','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h1>
				<?php if ($_smarty_tpl->tpl_vars['url_rss']->value != '') {?>
					<h4 class="blog-lastest-rss"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_rss']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'RSS','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></h4>
				<?php }?>
			<?php }?>

			<div class="inner">
				<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)+count($_smarty_tpl->tpl_vars['secondary_blogs']->value) > 0) {?>
					<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)) {?>
					<div class="leading-blog">  
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leading_blogs']->value, 'blog', false, NULL, 'leading_blog', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['total'];
?>
						 
							<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['listing_leading_column']->value == 1) && $_smarty_tpl->tpl_vars['listing_leading_column']->value > 1) {?>
							  <div class="row">
							<?php }?>
							<div class="<?php if ($_smarty_tpl->tpl_vars['listing_leading_column']->value <= 1) {?>no<?php }?>col-lg-<?php echo htmlspecialchars(floor(12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listing_leading_column']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
								
									<?php $_smarty_tpl->_subTemplateRender("module:leoblog/views/templates/front/default/_listing_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
								
							</div>	
							<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['listing_leading_column']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last'] : null)) && $_smarty_tpl->tpl_vars['listing_leading_column']->value > 1) {?>
								</div>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<?php }?>


					<?php if (count($_smarty_tpl->tpl_vars['secondary_blogs']->value)) {?>
					<div class="secondary-blog">

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondary_blogs']->value, 'blog', false, NULL, 'secondary_blog', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['total'];
?>
							<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['listing_secondary_column']->value == 1) && $_smarty_tpl->tpl_vars['listing_secondary_column']->value > 1) {?>
							  <div class="row">
							<?php }?>
							<div class="<?php if ($_smarty_tpl->tpl_vars['listing_secondary_column']->value <= 1) {?>no<?php }?>col-lg-<?php echo htmlspecialchars(floor(12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listing_secondary_column']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
 col-md-6">
								
									<?php $_smarty_tpl->_subTemplateRender("module:leoblog/views/templates/front/default/_listing_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							
								
								
							</div>	
							<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['listing_secondary_column']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['last'] : null)) && $_smarty_tpl->tpl_vars['listing_secondary_column']->value > 1) {?>
							</div>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<?php }?>
					<div class="top-pagination-content clearfix bottom-line">
						
									<?php $_smarty_tpl->_subTemplateRender("module:leoblog/views/templates/front/default/_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						
							
						
					</div>
				<?php } else { ?>
					<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, We are update data, please come back later!!!!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
				<?php }?>    

			</div>
		</div>
	</section>
<?php
}
}
/* {/block 'content'} */
}
