<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:14:52
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leoblog\views\templates\admin\leoblog_dashboard\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143899c387c26_72535835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6991b99de9249d7516a3d3a14bebb6da6d13e377' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leoblog\\views\\templates\\admin\\leoblog_dashboard\\panel.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143899c387c26_72535835 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="blog-dashboard">

	<div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <a href="http://www.leotheme.com/support/prestashop-16x-guides.html"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click Here to see Module Guide','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a>
                    </div>
                </div>
		<div class="col-md-6">
			
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Global Config','mod'=>'leoblog'),$_smarty_tpl ) );?>
</div>
				
				<div class="panel-content" id="bloggeneralsetting">
					<ul class="nav nav-tabs leoblog-globalconfig" role="tablist">
						<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_0') {?> active<?php }?>">
							<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General Setting','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a>
						</li>
						<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_1_1') {?> active<?php }?>">
							<a class="nav-link" href="#fieldset_1_1" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Listing Blog Setting','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a>
						</li>
						<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_2_2') {?> active<?php }?>">
							<a class="nav-link" href="#fieldset_2_2" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item Blog Setting','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a>
						</li>
						<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_3_3') {?> active<?php }?>">
							<a class="nav-link" href="#fieldset_3_3" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Left-Right Column','mod'=>'leoblog'),$_smarty_tpl ) );?>
</a>
						</li>
					</ul>
					<div class="tab-content">
						<?php echo $_smarty_tpl->tpl_vars['globalform']->value;?>
					</div>
				</div>	

			</div>
		</div>

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick Tools','mod'=>'leoblog'),$_smarty_tpl ) );?>
</div>
				<div class="panel-content">
					
					<div id="quicktools" class="row">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quicktools']->value, 'tool');
$_smarty_tpl->tpl_vars['tool']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->do_else = false;
?>
						<div class="col-xs-3 col-lg-3 active">
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tool']->value['href'],'html','UTF-8' ));?>
" class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tool']->value['class'],'html','UTF-8' ));?>
">
							<i class="icon icon-3x <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tool']->value['icon'],'html','UTF-8' ));?>
"></i> 
							<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tool']->value['title'],'html','UTF-8' ));?>
</p>
						</a>
						</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
						
					</div>
				</div>	
			</div>


			<div class="panel panel-default">
				<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Statistics','mod'=>'leoblog'),$_smarty_tpl ) );?>
</div>
				<div class="panel-content" id="dashtrends">
						
						<div class="row" id="dashtrends_toolbar">
							<dl   class="col-xs-4 col-lg-4 active">
								<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blogs','mod'=>'leoblog'),$_smarty_tpl ) );?>
</dt>
								<dd class="data_value size_l"><span id="sales_score"><?php echo intval($_smarty_tpl->tpl_vars['count_blogs']->value);?>
</span></dd>
								 
							</dl>
							<dl   class="col-xs-4 col-lg-4">
								<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','mod'=>'leoblog'),$_smarty_tpl ) );?>
</dt>
								<dd class="data_value size_l"><span id="orders_score"><?php echo intval($_smarty_tpl->tpl_vars['count_cats']->value);?>
</span></dd>
							 
							</dl>
							<dl  class="col-xs-4 col-lg-4">
								<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'leoblog'),$_smarty_tpl ) );?>
</dt>
								<dd class="data_value size_l"><span id="cart_value_score"><?php echo intval($_smarty_tpl->tpl_vars['count_comments']->value);?>
</span></dd>
							 
							</dl>
							 
						</div>


				</div>

			</div>	

			<div class="panel panel-default">
				<div class="panel-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules','mod'=>'leoblog'),$_smarty_tpl ) );?>
</div>
				<div class="panel-content">
					
					<section>
							<nav>
								<ul class="nav nav-tabs">
									<li class="">
										<a data-toggle="tab" href="#dash_latest_comment">
											<i class="icon-fire"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lastest Comments','mod'=>'leoblog'),$_smarty_tpl ) );?>

										</a>
									</li>
									<li class="active">
										<a data-toggle="tab" href="#dash_most_viewed">
											<i class="icon-trophy"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Most Viewed','mod'=>'leoblog'),$_smarty_tpl ) );?>

										</a>
									</li>
								
								 
								</ul>
							</nav>
							<div class="tab-content panel">
								<div id="dash_latest_comment" class="tab-pane">
									
									<div>
										<ul>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
										<li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_link']->value,'html','UTF-8' ));?>
&id_comment=<?php echo intval($_smarty_tpl->tpl_vars['comment']->value['id_comment']);?>
&updateleoblog_comment">
												<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['comment']->value['comment']),65,'...' ));?>
 </a/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'leoblog'),$_smarty_tpl ) );?>
(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['date_add'],'html','UTF-8' ));?>
) - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'User :','mod'=>'leoblog'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['user'],'html','UTF-8' ));?>
</li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									</div> 
								</div>
								<div id="dash_most_viewed" class="tab-pane active">
									 <div>
										<ul>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>
										<li><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8' ));?>
&id_leoblog_blog=<?php echo intval($_smarty_tpl->tpl_vars['blog']->value['id_leoblog_blog']);?>
&updateleoblog_blog"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['meta_title'],'html','UTF-8' ));?>
</a/> - <i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hits','mod'=>'leoblog'),$_smarty_tpl ) );?>
: <?php echo intval($_smarty_tpl->tpl_vars['blog']->value['hits']);?>
</i> </li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									</div> 
								</div>
							</div>
						</section>
				</div>	
			</div>	
		</div>
	</div>
</div><?php }
}
