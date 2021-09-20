<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:00:55
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\admin\ap_page_builder_home\position.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143be970991b9_86317863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c5095fe4ddc7153095c15a4af3a4e5957f3718d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_home\\position.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143be970991b9_86317863 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_home\position -->
<div class="header-cover">
    <strong>Position <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
</strong>
    <div class="fr">
        <div class="dropdown">
            <div class="hide box-edit-position">
                <div class="form-group">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position name:','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</label>
                    <input class="edit-name" value="" type="text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter position name ','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"/>
                </div>
                <button type="button" class="btn btn-primary btn-save"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</button>
            </div>
            
            <a class="btn btn-default" id="dropdown-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'),'html','UTF-8' ));?>
" role="button" data-toggle="dropdown" data-target="#">
                <i class="icon-columns"></i> 
                <span class="lbl-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current Position:','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 
                    <?php if ($_smarty_tpl->tpl_vars['default']->value['name']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default']->value['name'],'html','UTF-8' ));
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Blank','mod'=>'appagebuilder'),$_smarty_tpl ) );
}?>
                </span>
                <?php if ($_smarty_tpl->tpl_vars['listPositions']->value) {?> <span class="caret"></span><?php }?>
            </a>
            <ul class="dropdown-menu dropdown-menu-right list-position" role="menu" aria-labelledby="dLabel" 
                data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'),'html','UTF-8' ));?>
" id="position-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'),'html','UTF-8' ));?>
"
                data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default']->value['id'],'html','UTF-8' ));?>
" data-blank-error="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Please choose or create new a position ','mod'=>'appagebuilder'),$_smarty_tpl ) );
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
">
                <li>
                    <a href="javascript:;" class="add-new-position" data-id="0">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New ','mod'=>'appagebuilder'),$_smarty_tpl ) );
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
</span>
                    </a>
                </li>
                
                <?php if ($_smarty_tpl->tpl_vars['listPositions']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listPositions']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['val']->value['id_appagebuilder_positions']))) {?>
                <li>
                    <a href="javascript:;" class="position-name" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value['id_appagebuilder_positions'],'html','UTF-8' ));?>
">
                        <span title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value['name'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value['name'],'html','UTF-8' ));?>
</span>
                        <i class="icon-edit label-tooltip" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value['id_appagebuilder_positions'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit name','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"></i>
                        <i class="icon-paste label-tooltip" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value['id_appagebuilder_positions'],'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" data-temp="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"></i>
                    </a>
                </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<br/>
<div class="position-area">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value, 'hookData', false, 'hookKey');
$_smarty_tpl->tpl_vars['hookData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hookKey']->value => $_smarty_tpl->tpl_vars['hookData']->value) {
$_smarty_tpl->tpl_vars['hookData']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['hookKey']->value == "displayHome") {?>
    <div class="col-md-6 home-content-wrapper">
	<?php }?>
        <div class="hook-wrapper <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hookData']->value['class'],'html','UTF-8' ));?>
" data-hook="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8' ));?>
">
            <div class="hook-top">
                <div class="pull-left hook-desc"></div>
                <div class="hook-info text-center">
                    <a href="javascript:;" tabindex="0" class="open-group label-tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand Hook','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8' ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8' ));?>
">
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hookKey']->value,'html','UTF-8' ));?>
 <i class="icon-circle-arrow-down"></i>
                    </a>
                </div>
            </div>
            <div class="hook-content">
                <?php if ((isset($_smarty_tpl->tpl_vars['hookData']->value['content']))) {?>
                <?php echo $_smarty_tpl->tpl_vars['hookData']->value['content'];?>
                <?php }?>
                <div class="hook-content-footer text-center">
                    <a href="javascript:void(0)" tabindex="0" class="btn-new-widget-group" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Widget in new Group','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" data-container="body" data-toggle="popover" data-placement="top" data-trigger="focus">
                        <i class="icon-plus"></i>
                    </a>
                </div>
            </div>
        </div>
	<?php if ($_smarty_tpl->tpl_vars['hookKey']->value == "displayHome") {?>
		</div>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
