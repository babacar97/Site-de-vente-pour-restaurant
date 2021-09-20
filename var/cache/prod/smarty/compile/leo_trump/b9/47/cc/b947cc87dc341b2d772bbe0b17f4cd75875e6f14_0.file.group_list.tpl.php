<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:55:47
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leobootstrapmenu\views\templates\hook\group_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435af3c57b15_96299060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b947cc87dc341b2d772bbe0b17f4cd75875e6f14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leobootstrapmenu\\views\\templates\\hook\\group_list.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435af3c57b15_96299060 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset>
		<?php if (count($_smarty_tpl->tpl_vars['groups']->value) > 0) {?>
		<div class="panel form-horizontal">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Megamenu Control Panel','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</h3>
			
			<div class="form-wrapper">
									
				<div class="form-group">
					<label class="control-label col-md-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Hook','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</label>
					<div class="col-md-2">
						<select class="list_hook" class=" fixed-width-xl">
							<option <?php if ($_smarty_tpl->tpl_vars['clearcache_hook']->value == '' || $_smarty_tpl->tpl_vars['clearcache_hook']->value == 'all') {?>selected="selected"<?php }?> value="all"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All hook','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_hook']->value, 'hook');
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
								<option <?php if ($_smarty_tpl->tpl_vars['clearcache_hook']->value == $_smarty_tpl->tpl_vars['hook']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
						</select>
					</div>
					<div class="col-md-2">
						<a class="clear_cache btn btn-success" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&success=clearcache&hook=">
							<i class="icon-AdminTools"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear cache','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</a>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Backup the database before run correct module to safe','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</label>
					<div class="col-md-9">
						<a class="megamenu-correct-module btn btn-success" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&success=correct&correctmodule=1">
							<i class="icon-AdminParentPreferences"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Correct module','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</a>
					</div>
					
				</div>
			</div>
		</div>
	<?php }?>
    <div id="groupLayer" class="panel col-md-12">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group List','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</h3>
				
        
		
		<div class="group-header col-md-8 col-xs-12">
			<ol>
				<li>
					<div class="col-md-1 col-xs-1 text-center">
						<span class="title_box ">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</span>
					</div>
					<div class="col-md-6 col-xs-3">
						<span class="title_box ">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group Name','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</span>
					</div>
					<div class="col-md-1 col-xs-2">
						<span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</span>
					</div>
					<div class="col-md-2 col-xs-2">
						<span class="title_box ">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hook','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</span>
					</div>
					<div class="col-md-2 col-xs-4 text-right">
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&addNewGroup=1" class="btn btn-default">
							<i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new Group','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</a>
					</div>
				</li>
			</ol>
		</div>
		<div class="group-wrapper col-md-8 col-xs-12">
			<ol class="tree-group">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
					<li id="list_group_<?php echo $_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group'];?>
" class="nav-item">
						
							<div class="col-md-1 col-xs-1 text-center"><strong>#<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
</strong></div>
							<div class="col-md-6 col-xs-3" class="pointer">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['title'],'html','UTF-8' ));?>

							</div>
							<div class="col-md-1 col-xs-2">
								<?php echo $_smarty_tpl->tpl_vars['group']->value['status'];?>
&nbsp;&nbsp;&nbsp;
							</div>
							
							<div class="col-md-2 col-xs-2">
								<?php echo $_smarty_tpl->tpl_vars['group']->value['hook'];?>

							</div>

							<div class="col-md-2 col-xs-4">
								<div class="btn-group-action">
									<div class="btn-group pull-right">
										<?php if ($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group'] != $_smarty_tpl->tpl_vars['curentGroup']->value) {?>
											<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&editgroup=1&id_group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Group','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="edit btn btn-default">
												<i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

											</a>
										<?php } else { ?>
											<a href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Editting','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="btn editting" style="color:#BBBBBB">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Editting','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

											</a>
										<?php }?>
										<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>&nbsp;
										</button>
										<ul class="dropdown-menu">
											
											<li>
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&deletegroup=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
" onclick="if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Selected Group?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
')) {
														return true;
													} else {
														event.stopPropagation();
														event.preventDefault();
													}
													;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="delete">
													<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

												</a>
																													
											</li>
											<li>
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&duplicategroup=1&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
" onclick="if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Selected Group?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
')) {
														return true;
													} else {
														event.stopPropagation();
														event.preventDefault();
													}
													;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="duplicate">
													<i class="icon-copy"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

												</a>
																													
											</li>
											
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['exportLink']->value;?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
&widgets=1" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Group With Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="export">
													<i class="icon-external-link-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Group With Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

												</a>
																													
											</li>
											
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['exportLink']->value;?>
&id_group=<?php echo intval($_smarty_tpl->tpl_vars['group']->value['id_btmegamenu_group']);?>
&widgets=0" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Group Without Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="export">
													<i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Group Without Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

												</a>
																													
											</li>
											
										</ul>

									</div>
								</div>				
							</div>
						
					</li> 
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		</div>
		
		<div class="group-footer import-group col-md-5">
			<form method="post" enctype="multipart/form-data" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&importgroup=1">
				<div class="row">
					<div class="form-group">							
						<input type="file" class="hide" name="import_file" id="import_file">
						<div class="dummyfile input-group">
							<span class="input-group-addon"><i class="icon-file"></i></span>
							<input type="text" readonly="" name="filename" class="disabled" id="import_file-name">
							<span class="input-group-btn">
								<button class="btn btn-default" name="submitAddAttachments" type="button" id="import_file-selectbutton">
									<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

								</button>
							</span>
						</div>
						<p class="help-block color_danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please upload *.txt only','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</p>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-4" for="title_group">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Overide group or not:','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</label>
						<div class="input-group col-lg-3 col-xs-3">
							<span class="switch prestashop-switch">
								<input type="radio" value="1" id="override_group_on" name="override_group">
								<label for="override_group_on">
									<i class="icon-check-sign color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

								</label>
								<input type="radio" checked="checked" value="0" id="override_group_off" name="override_group">
								<label for="override_group_off">
									<i class="icon-ban-circle color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

								</label>
								<a class="slide-button btn btn-default"></a>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-lg-4" for="title_group">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Overide widgets or not:','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</label>
						<div class="input-group col-lg-3 col-xs-3">
							<span class="switch prestashop-switch">
								<input type="radio" value="1" id="override_widget_on" name="override_widget">
								<label for="override_widget_on">
									<i class="icon-check-sign color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

								</label>
								<input type="radio" checked="checked" value="0" id="override_widget_off" name="override_widget">
								<label for="override_widget_off">
									<i class="icon-ban-circle color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

								</label>
								<a class="slide-button btn btn-default"></a>
							</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
							<button class="btn btn-default dash_trend_right" name="importGroup" id="import_file_submit_btn" type="submit">
								 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import Group','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

							</button>
						</div>
					</div>                                                                                                                            
				</div>
			</form>
		</div>
		
		<div class="group-footer import-widgets col-md-5">
			<form method="post" enctype="multipart/form-data" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&importwidgets=1">
				<div class="row">
					<div class="form-group">							
						<input type="file" class="hide" name="import_widgets_file" id="import_widgets_file">
						<div class="dummyfile input-group">
							<span class="input-group-addon"><i class="icon-file"></i></span>
							<input type="text" readonly="" name="filename" class="disabled" id="import_widgets_file-name">
							<span class="input-group-btn">
								<button class="btn btn-default" name="submitAddAttachments" type="button" id="import_widgets_file-selectbutton">
									<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

								</button>
							</span>
						</div>
						<p class="help-block color_danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please upload *.txt only','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</p>
					</div>					
					
					<div class="form-group">
						<label class="control-label col-lg-4" for="title_group">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Overide widgets or not:','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

						</label>
						<div class="input-group col-lg-3 col-xs-3">
							<span class="switch prestashop-switch">
								<input type="radio" value="1" id="override_import_widgets_on" name="override_import_widgets">
								<label for="override_import_widgets_on">
									<i class="icon-check-sign color_success"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

								</label>
								<input type="radio" checked="checked" value="0" id="override_import_widgets_off" name="override_import_widgets">
								<label for="override_import_widgets_off">
									<i class="icon-ban-circle color_danger"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

								</label>
								<a class="slide-button btn btn-default"></a>
							</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-3">
							<button class="btn btn-default dash_trend_right" name="importWidgets" id="import_widgets_file_submit_btn" type="submit">
								 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import Widgets','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

							</button>
						</div>
						
						<div class="col-lg-3">
														<a class="export-widgets" href="<?php echo $_smarty_tpl->tpl_vars['exportWidgetsLink']->value;?>
" title="Export Widgets Of Shop">
								<i class="icon-external-link-sign"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Widgets Of Shop','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

							</a>
						</div>
					</div>                                                                                                                            
				</div>
			</form>
		</div>
    </div>
</fieldset>
<?php echo '<script'; ?>
 type="text/javascript">
	var update_group_position_link = "<?php echo $_smarty_tpl->tpl_vars['update_group_position_link']->value;?>
";
    $(document).ready(function() {
        //import export fix
        $('#import_file-selectbutton').click(function(e){
                $('#import_file').trigger('click');
        });
        $('#import_file').change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $('#import_file-name').val(file[file.length-1]);
        });
        $('#import_file_submit_btn').click(function(e){
            if($("#import_file-name").val().indexOf(".txt") != -1){
                if($("#override_group_on").is(":checked")) return confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure to override group?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
");
				if($("#override_widget_on").is(":checked")) return confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure to override widgets?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
");
                return true;
            }else{
                alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please upload txt file','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
");
                $('#import_file').val("");
                $('#import_file-name').val("");
                return false;
            }
		});

		//import export widgets fix
        $('#import_widgets_file-selectbutton').click(function(e){
                $('#import_widgets_file').trigger('click');
        });
        $('#import_widgets_file').change(function(e){
                var val = $(this).val();
                var file = val.split(/[\\/]/);
                $('#import_widgets_file-name').val(file[file.length-1]);
        });
        $('#import_widgets_file_submit_btn').click(function(e){
            if($("#import_widgets_file-name").val().indexOf(".txt") != -1){
                if($("#override_import_widgets_on").is(":checked")) return confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure to override widgets?','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
");
                return true;
            }else{
                alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please upload txt file','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
");
                $('#import_widgets_file').val("");
                $('#import_widgets_file-name').val("");
                return false;
            }
		});		
        
        $(".group-preview").click(function() {
            eleDiv = $(this).parent().parent().parent();
            if ($(eleDiv).hasClass("open"))
                eleDiv.removeClass("open");

            var url = $(this).attr("href") + "&content_only=1";
            $('#dialog').remove();
            $('#content').prepend('<div id="dialog" style="padding: 3px 0px 0px 0px;"><iframe name="iframename2" src="' + url + '" style="padding:0; margin: 0; display: block; width: 100%; height: 100%;" frameborder="no" scrolling="auto"></iframe></div>');
            $('#dialog').dialog({
                title: 'Preview Management',
                close: function(event, ui) {

                },
                bgiframe: true,
                width: 1024,
                height: 780,
                resizable: false,
                draggable:false,
                modal: true
            });
            return false;
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
