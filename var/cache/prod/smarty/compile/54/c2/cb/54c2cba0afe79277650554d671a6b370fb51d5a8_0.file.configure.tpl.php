<?php
/* Smarty version 3.1.39, created on 2021-09-17 12:04:06
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leobootstrapmenu\views\templates\admin\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614468168afe38_44467144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c2cba0afe79277650554d671a6b370fb51d5a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leobootstrapmenu\\views\\templates\\admin\\configure.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614468168afe38_44467144 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['successful']->value == 1) {?>
	<div class="bootstrap">
		<div class="alert alert-success megamenu-alert">
			<button data-dismiss="alert" class="close" type="button">×</button>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Successfully','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

		</div>
	</div>
<?php }?>
<div class="col-lg-12"> 
	<div class="" style="float: right">
		<div class="pull-right">
			<a href="<?php echo $_smarty_tpl->tpl_vars['live_editor_url']->value;?>
" class="btn btn-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Edit Tools','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</a>
               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To Make Rich Content For Megamenu','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

		</div>
	</div>
</div>
 
<div class="tab-content row">
	<div class="tab-pane active" id="megamenu">
	
		<div class="col-md-4">
			<div class="panel panel-default">
				<h3 class="panel-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tree Megamenu Management - Group: ','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['current_group_title']->value;
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' - Type: ','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['current_group_type']->value;?>
</h3>
				<div class="panel-content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To sort orders or update parent-child, you drap and drop expected menu.','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

					<hr>
					<p>
						<input type="button" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Menu Item','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" id="addcategory" data-loading-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processing ...','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="btn btn-danger" name="addcategory">
						<a href="<?php echo $_smarty_tpl->tpl_vars['admin_widget_link']->value;?>
" class="leo-modal-action btn btn-modeal btn-success btn-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List Widget','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</a>
					</p>
					<p>
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8' ));?>
&configure=leobootstrapmenu&addmenuproductlayout=1&id_group=<?php echo $_smarty_tpl->tpl_vars['id_group']->value;?>
" class="btn btn-modeal btn-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Menu Item For Product Multi Layout (Only For Developers)','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</a>
					</p>
					<hr>										
					<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

                                        <a href="javascript:void(0);" class="btn btn-danger delete_many_menus">
                                            <i class="icon-trash"></i>&nbsp;Delete selected
                                        </a>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<?php echo $_smarty_tpl->tpl_vars['helper_form']->value;?>

		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
			var addnew ="<?php echo $_smarty_tpl->tpl_vars['addnew']->value;?>
"; 
			var action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
";
			$("#content").PavMegaMenuList({
				action:action,
				addnew:addnew
			});
		<?php echo '</script'; ?>
>
	</div>
</div>
<?php echo '<script'; ?>
>
	$('#myTab a[href="#profile"]').tab('show');
<?php echo '</script'; ?>
><?php }
}
