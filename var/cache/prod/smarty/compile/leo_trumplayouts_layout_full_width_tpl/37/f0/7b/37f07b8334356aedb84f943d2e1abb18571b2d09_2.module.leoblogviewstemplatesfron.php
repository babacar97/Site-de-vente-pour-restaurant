<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:17:44
  from 'module:leoblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61438a480391a6_48301073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37f07b8334356aedb84f943d2e1abb18571b2d09' => 
    array (
      0 => 'module:leoblogviewstemplatesfron',
      1 => 1631614366,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61438a480391a6_48301073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div id="blog-localengine">
	<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_listcomment','1') == 1) {?>
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'leoblog'),$_smarty_tpl ) );?>
</h3>
		
		<?php if ((isset($_smarty_tpl->tpl_vars['comments']->value)) && count($_smarty_tpl->tpl_vars['comments']->value) > 0) {?>
			<div class="comments clearfix">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment', false, NULL, 'comment', array (
));
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?> <?php $_smarty_tpl->_assignInScope('default', '');?>
				<div class="comment-item" id="comment<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<img <?php if ((isset($_smarty_tpl->tpl_vars['aplazyload']->value)) && $_smarty_tpl->tpl_vars['aplazyload']->value) {?>class="lazy" data-src<?php } else { ?>src<?php }?>="http://www.gravatar.com/avatar/<?php echo htmlspecialchars(md5(strtolower(trim(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['email'],'html','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
?d=<?php echo htmlspecialchars(urlencode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
&s=60" align="left"/>
					<div class="comment-wrap">
						<div class="comment-meta">
							<span class="comment-infor">
								<span class="comment-created"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created On','mod'=>'leoblog'),$_smarty_tpl ) );?>
<span> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['comment']->value['date_add']),"%A, %B %e, %Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
								<span class="comment-postedby"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted By','mod'=>'leoblog'),$_smarty_tpl ) );?>
<span> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['user'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
							</span>
							
							<span class="comment-link"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
#comment<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['comment']->value['id_comment']), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment Link','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a></span>
						</div>

						<div class="comment-content">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'cleanHtml' ][ 0 ], array( nl2br($_smarty_tpl->tpl_vars['comment']->value['comment']) ));?>
						</div>
					</div>
				</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['blog_count_comment']->value) {?>
				<div class="top-pagination-content clearfix bottom-line">
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['_pagination']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</div>
				<?php }?>
			</div>
		<?php } else { ?>
			<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No comment at this time!','mod'=>'leoblog'),$_smarty_tpl ) );?>
</p>
		<?php }?>

	<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('item_show_formcomment','1') == 1) {?>
			<h3 class="title-comment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave your comment','mod'=>'leoblog'),$_smarty_tpl ) );?>
</h3>
			<form class="form-horizontal clearfix" method="post" id="comment-form" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" onsubmit="return false;">
				<div class="form-group row">
					<div  class="col-lg-3">
						<label class="control-label" for="inputFullName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full Name','mod'=>'leoblog'),$_smarty_tpl ) );?>
</label>
					</div>
					<div class="col-lg-9">
						<input type="text" name="user" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your full name','mod'=>'leoblog'),$_smarty_tpl ) );?>
" id="inputFullName" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-3">
						<label class="control-label" for="inputEmail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'leoblog'),$_smarty_tpl ) );?>
</label>
					</div>
					<div class="col-lg-9">
						<input type="text" name="email"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email','mod'=>'leoblog'),$_smarty_tpl ) );?>
" id="inputEmail" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-3">
						<label class="control-label" for="inputComment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'leoblog'),$_smarty_tpl ) );?>
</label>
					</div>
					<div class="col-lg-9">
						<textarea type="text" name="comment" rows="6"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your comment','mod'=>'leoblog'),$_smarty_tpl ) );?>
" id="inputComment" class="form-control"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-lg-3">
						<label class="control-label" for="inputEmail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Captcha','mod'=>'leoblog'),$_smarty_tpl ) );?>
</label>
					</div>
					<div class="col-lg-8 col-md-8 ipts-captcha">
						 <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['captcha_image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="comment-capcha-image" align="left"/>
						<input class="form-control" type="text" name="captcha" value="" size="10"  />
					</div>
				</div>

				<input type="hidden" name="id_leoblog_blog" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_leoblog_blog']->value), ENT_QUOTES, 'UTF-8');?>
">
				<div class="form-group row">
					<div class="col-lg-9 col-lg-offset-3">
						<button class="btn btn-secondary btn-outline btn-submit-comment-wrapper" name="submitcomment" type="submit">
							<span class="btn-submit-comment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'leoblog'),$_smarty_tpl ) );?>
</span>
							<span class="leoblog-cssload-container cssload-speeding-wheel"></span>
						</button>
					</div>
				</div>
			</form>
		<?php }?>
</div><?php }
}
