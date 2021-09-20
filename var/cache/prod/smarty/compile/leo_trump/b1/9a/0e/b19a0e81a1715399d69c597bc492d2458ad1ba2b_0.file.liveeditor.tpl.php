<?php
/* Smarty version 3.1.39, created on 2021-09-17 12:04:41
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leobootstrapmenu\views\templates\hook\liveeditor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61446839a6c9e2_41465251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b19a0e81a1715399d69c597bc492d2458ad1ba2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leobootstrapmenu\\views\\templates\\hook\\liveeditor.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61446839a6c9e2_41465251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<div id="page-content">
        <div id="menu-form" style="display: none; left: 340px; top: 15px; max-width:600px" class="popover top out form-setting">
            <div class="arrow"></div>
            <div style="display: block;" class="popover-title">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sub Menu Setting','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

                <span class="badge pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</span>
            </div>
            <div class="popover-content"> 
                <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['liveedit_action']->value;?>
" enctype="multipart/form-data" >
                    <div class="col-lg-12">	
                        <table class="table table-hover">
                            <tr>
                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create Submenu','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</td>
                                <td>
                                    <select name="menu_submenu" class="menu_submenu">
                                        <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</option>
                                        <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submenu Width','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</td>
                                <td>
                                    <input type="text" name="menu_subwidth" class="menu_subwidth"> 
                                </td>
                            </tr>
                            <tr class="group-submenu">
                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group Submenu','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</td>
                                <td>
                                    <div id="submenu-form" >								
                                        <input type="hidden" name="submenu_id">
                                        <select name="submenu_group" class="submenu_group">
                                            <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</option>
                                            <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</option>
                                        </select>	
                                    </div>
                                </td>
                            </tr>
                            <tr class="aligned-submenu">
                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Align Submenu','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</td>
                                <td>
                                    <div class="btn-group button-aligned">
                                        <button type="button" class="btn btn-default" data-option="aligned-left"><span class="icon icon-align-left"></span></button>
                                        <button type="button" class="btn btn-default" data-option="aligned-center"><span class="icon icon-align-center"></span></button>
                                        <button type="button" class="btn btn-default" data-option="aligned-right"><span class="icon icon-align-right"></span></button>
                                        <button type="button" class="btn btn-default" data-option="aligned-fullwidth"><span class="icon icon-align-justify"></span></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="button" class="add-row btn btn-success btn-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Row','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</button>
                                    <button type="button" class="remove-row btn btn-default  btn-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove Row','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</button>
                                    | <button type="button" class="add-col btn btn-success  btn-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Column','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</button>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="menu_id">
                    </div>
                </form>
            </div>
        </div>
        <div id="column-form" style="display: none; left: 340px; top: 45px;" class="popover top   form-setting">
            <div class="arrow"></div>
            <div style="display: block;" class="popover-title">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column Setting','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

                <span class="badge pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</span>
            </div>
            <div class="popover-content"> 
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['liveedit_action']->value;?>
"  enctype="multipart/form-data" >
                    <table class="table table-hover">
                        <tr>
                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addition Class','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</td>
                            <td>
                                <input type="text" name="colclass"> 
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Column Width','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</td>
                            <td>
                                <select class="colwidth" name="colwidth">                          
									<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
										<option value="<?php echo intval($_smarty_tpl->tpl_vars['i']->value);?>
"><?php echo intval($_smarty_tpl->tpl_vars['i']->value);?>
</option>
									<?php }
}
?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">	<button type="button" class="remove-col btn btn-default  btn-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove Column','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</button> </td>
                        </tr>	
                    </table>
                </form>
            </div>
        </div>

        <div id="widget-form" style="display: none; left: 340px; min-width:400px" class="popover bottom   form-setting">
            <div class="arrow"></div>
            <div style="display: block;" class="popover-title">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Widget Setting','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

                <span class="badge pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</span>
            </div>
            <div class="popover-content">
				<?php if (!empty($_smarty_tpl->tpl_vars['widgets']->value)) {?>
					<select name="inject_widget" class="inject_widget"> 
                        <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['w']->value['key_widget'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['w']->value['name'];?>

                            </option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
                    <button type="button" id="btn-inject-widget" class="btn btn-primary btn-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insert','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</button>
				<?php } else { ?>
					<select style="display:none" name="inject_widget" class="inject_widget">
					</select>
					<button style="display:none" type="button" id="btn-inject-widget" class="btn btn-primary btn-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insert','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</button>
				<?php }?>
				<button type="button" id="btn-create-widget" class="btn btn-primary btn-sm"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create New Widget','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</button>
            </div>
        </div>

        <div id="content-s">
            <div class="container">
                <div class="page-header">					
                    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Megamenu Editor: ','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['group_title']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['group_type']->value;?>
)</h1>
                </div>
                <div class="bs-example">
                    <div class="alert alert-danger fade in">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By using this tool, allow to create sub menu having multiple rows and  multiple columns. You can inject widgets inside columns or group sub menus in same level of parent.Note: Some configurations as group, columns width setting will be overrided','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</strong>  
                    </div>
                </div>
            </div>
            <div id="pav-megamenu-liveedit">
                <div id="toolbar" class="container">
                    <div id="menu-toolbars">
                        <div>
                            <div class="pull-right">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLeoWidgets');?>
&widgets=1" class="leo-modal-action btn btn-modeal btn-info btn-action">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List Widget','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</a>
                                -
                                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLeoWidgets');?>
&addbtmegamenu_widgets&widgets=1" class="leo-modal-action btn btn-modeal btn-success btn-action">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create A Widget','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</a>
                                - 
                                <a href="<?php echo $_smarty_tpl->tpl_vars['live_site_url']->value;?>
" class="btn btn-modal btn-primary btn-sm btn-action" >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview On Live Site','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</a> | 
                                <a id="unset-data-menu" href="#" class="btn btn-danger btn-action"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset Configuration','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</a>
                                <button id="save-data-menu" class="btn btn-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</button>
                            </div>
                            <a id="save-data-back" class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['action_backlink']->value;?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

                            </a>
                        </div>
                    </div>
                </div>

                <div class="container"><div class="megamenu-wrap">
                        <div class="progress" id="leo-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 00%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                        <div id="megamenu-content" class="<?php if (($_smarty_tpl->tpl_vars['group_type']->value == 'vertical')) {?>vertical <?php echo $_smarty_tpl->tpl_vars['group_type_sub']->value;
}?>">
                        </div></div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview On Live Site','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"></button>
            </div>
        </div> 
    </div> 
</div> 


<?php echo '<script'; ?>
 type="text/javascript">
    $(".btn-modal").click(function() {
        $('#myModal .modal-dialog ').css('width', '100%');
        $('#myModal .modal-dialog ').css('height', '90%');
		
        var a = $('<span class="glyphicon glyphicon-refresh"></span><div class="cssload-container"><div class="cssload-speeding-wheel"></div></div><iframe src="' + $(this).attr('href') + '" style="width:100%;height:100%; display:none"/>');
        $('#myModal .modal-body').html(a);
		
        $('#myModal').modal();
        $('#myModal').attr('rel', $(this).attr('rel'));
        $(a).load(function() {

            $('#myModal .modal-body .glyphicon-refresh').hide();
			$('#myModal .modal-body .cssload-container').hide();
            $('#myModal .modal-body iframe').show();
			$('#myModal .modal-body').css('height', '85%');
			$('#myModal .modal-content ').css('height', '100%');
        });
        return false;
    });

    $('#myModal').on('hidden.bs.modal', function() {
        if ($(this).attr('rel') == 'refresh-page') {
            location.reload();
        }
    })

    var live_editor = true;
    var list_tab_live_editor = [];
    var _action = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ajxgenmenu']->value,'&amp;','&');?>
';
    var _action_menu = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ajxmenuinfo']->value,'&amp;','&');?>
';
    var _action_widget = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['action_widget']->value,'&amp;','&');?>
';
    var _action_loadwidget = '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['action_loadwidget']->value,'&amp;','&');?>
';
    var _id_shop = '<?php echo $_smarty_tpl->tpl_vars['id_shop']->value;?>
';
    $("#megamenu-content").PavMegamenuEditor({
		"action": _action, 
		"action_menu": _action_menu, 
		"action_widget": _action_widget, 
		"id_shop": _id_shop,
	});

<?php echo '</script'; ?>
><?php }
}
