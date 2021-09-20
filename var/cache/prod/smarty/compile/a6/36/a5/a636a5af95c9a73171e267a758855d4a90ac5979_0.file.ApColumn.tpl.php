<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:00:53
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApColumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143be95227f03_24108492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a636a5af95c9a73171e267a758855d4a90ac5979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_shortcodes\\ApColumn.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143be95227f03_24108492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApColumn -->
<div <?php if (!(isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?>id="default_column"<?php }?> class="column-row<?php if (!(isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?> col-sp-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12<?php }
if ((isset($_smarty_tpl->tpl_vars['colClass']->value))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['colClass']->value,'.','-'),'html','UTF-8' ));
}
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ));
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }
}?>
		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?> deactive-desktop<?php } else { ?> active-desktop<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?> deactive-tablet<?php } else { ?> active-tablet<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?> deactive-mobile<?php } else { ?> active-mobile<?php }?> ">
	<div class="cover-column">
		<div class="column-controll-top">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to sort Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action caction-drag label-tooltip"><i class="icon-move"></i> </a>
			&nbsp;
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span> <span class="caret"></span>
				</button>
				<ul class="dropdown-menu for-column-row" role="menu">
					<li><a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action btn-new-widget "><i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action btn-edit " data-type="ApColumn" data-for=".column-row"><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action btn-delete "><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>
					<li><a href="javascript:void(0)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Group','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action btn-duplicate "><i class="icon-paste"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>
									</ul>
			</div> 
			<div class="btn-group animation-section">
				<button type="button" class="btn btn-default animation-button">
					<i class="icon-magic"></i>
					<span class="animation-status" data-text-default="" data-text-infinite="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Infinite','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"></span>
				</button>
				<div class="form-horizontal animation-wrapper column-animation-wrapper">
					<div class="form-group">
						<label class="control-label col-lg-5">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Animation','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

						</label>
						<div class="col-lg-7">
							<select name="animation" class="animation_select fixed-width-xl">
								<?php if ((isset($_smarty_tpl->tpl_vars['listAnimation']->value))) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listAnimation']->value, 'listAnimation_val');
$_smarty_tpl->tpl_vars['listAnimation_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listAnimation_val']->value) {
$_smarty_tpl->tpl_vars['listAnimation_val']->do_else = false;
?>
										<optgroup label="<?php echo $_smarty_tpl->tpl_vars['listAnimation_val']->value['name'];?>
">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listAnimation_val']->value['query'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</optgroup>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</select>
						</div>
					</div>
					<div class="form-group animate_sub">
						<div class="col-lg-10 col-lg-offset-2">
							<div class="animationSandbox">Prestashop.com</div>								
						</div>
					</div>
					<div class="form-group animate_sub">
						<label class="control-label col-lg-5">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delay','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
: 1)
						</label>
						<div class="col-lg-7">						
							<div class="input-group fixed-width-xs">
								<input name="animation_delay" value="1" class="fixed-width-xs animation_delay" type="text">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'s','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>							
							</div>						
						</div>
					</div>
					<div class="form-group animate_sub">
						<label class="control-label col-lg-5">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
: 1)
						</label>
						<div class="col-lg-7">						
							<div class="input-group fixed-width-xs">
								<input name="animation_duration" value="1" class="fixed-width-xs animation_duration" type="text">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'s','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>							
							</div>						
						</div>
					</div>
					<div class="form-group animate_sub animate_loop">
						<label class="control-label col-lg-5">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Iteration count','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
: 1)
						</label>
						<div class="col-lg-7">						
							<div class="input-group fixed-width-xs">
								<input name="animation_iteration_count" value="1" class="fixed-width-xs animation_iteration_count" type="text">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'times','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>							
							</div>							
						</div>
					</div>
					<div class="form-group animate_sub">
						<div class="col-lg-7 col-lg-offset-5">
							<div class="checkbox">
								<label for="animation_infinite">
									<input name="animation_infinite" class="checkbox-group animation_infinite" value="1" type="checkbox"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Infinite','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
							<button type="button" class="btn btn-primary pull-right btn-save-animation"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
							<button type="button" class="btn btn-default pull-right animate-it animate_sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Animate demo','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>						
						</div>
					</div>
				</div>
			</div>
			<div class="btn-group"><a class="label-tooltip all-devicesd <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>" href="javascript:void(0)" data-toggle="tooltip" title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?>Enable Column<?php } else { ?>Disable Column<?php }?>"><i class="leo-devicesd <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> icon-remove<?php } else { ?> icon-ok<?php }?>" ></i></a></div>
			<div class="btn-group devicesd-active column-action">
		        <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?> deactive-desktop<?php } else { ?> active-desktop<?php }?> label-tooltip" device="desktop" data-toggle="tooltip"
		            title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?>Enable Column On Desktop<?php } else { ?>Disable Column On Desktop<?php }?>">
		            <i class="icon-desktop leo-devicesd" ></i>
		        </div>
		        <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?> deactive-tablet<?php } else { ?> active-tablet<?php }?> label-tooltip" device="tablet" data-toggle="tooltip"
		        title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?>Enable Column On Tablet<?php } else { ?>Disable Column On Tablet<?php }?>">
		            <i class="icon-tablet leo-devicesd" ></i>
		        </div>
		        <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?> deactive-mobile<?php } else { ?> active-mobile<?php }?> label-tooltip" device="mobile" data-toggle="tooltip"
		        title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?>Enable Column On Mobile<?php } else { ?>Disable Column On Mobile<?php }?>">
		            <i class="icon-mobile leo-devicesd" ></i>
		        </div>
		    </div>
		</div>

		<div class="column-controll-right pull-right">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduce size','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action btn-change-colwidth" data-value="-1"><i class="icon-minus-sign-alt"></i></a>
			<div class="btn-group">
				<button type="button" class="btn" tabindex="-1" data-toggle="dropdown">
					<span class="width-val ap-w-6"></span>
				</button>
				<ul class="dropdown-menu dropdown-menu-right">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widthList']->value, 'itemWidth');
$_smarty_tpl->tpl_vars['itemWidth']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemWidth']->value) {
$_smarty_tpl->tpl_vars['itemWidth']->do_else = false;
?>
					<li class="col-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8' ));?>
">
						<a class="change-colwidth" data-width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8' ));?>
" href="javascript:void(0);" tabindex="-1">                                          
							<span data-width="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8' ));?>
" class="width-val ap-w-<?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( strpos($_smarty_tpl->tpl_vars['itemWidth']->value,"."),'html','UTF-8' ))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['itemWidth']->value,'.','-'),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8' ));
}?>"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['itemWidth']->value,'html','UTF-8' ));?>
/12 - ( <?php echo smarty_function_math(array('equation'=>"x/y*100",'x'=>$_smarty_tpl->tpl_vars['itemWidth']->value,'y'=>12,'format'=>"%.2f"),$_smarty_tpl);?>
 % )</span>
						</a>
					</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increase size','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action btn-change-colwidth" data-value="1"><i class="icon-plus-sign-alt"></i></a>
		</div>
		<div class="column-content">
			<?php if ((isset($_smarty_tpl->tpl_vars['apInfo']->value))) {
echo $_smarty_tpl->tpl_vars['apContent']->value;
}?>
		</div>
		<div class="column-controll-bottom">
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new Widget','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action btn-new-widget label-tooltip"><i class="icon-plus-sign"></i></a>
			<a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Column','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="column-action btn-edit label-tooltip" data-type="ApColumn"><i class="icon-pencil"></i></a>
		</div>
	</div>
</div><?php }
}
