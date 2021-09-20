<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:00:56
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApTabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143be9879cc82_70566953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb947183151fc97348cd73d6f7a7d845a6bae26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_shortcodes\\ApTabs.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143be9879cc82_70566953 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApTabs -->
<?php if (!(isset($_smarty_tpl->tpl_vars['isSubTab']->value))) {?>
<div <?php if (!(isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?>id="default_ApTabs"<?php }?> class="widget-row clearfix ApTabs<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ));
}
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?> deactive-desktop<?php } else { ?> active-desktop<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?> deactive-tablet<?php } else { ?> active-tablet<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?> deactive-mobile<?php } else { ?> active-mobile<?php }?> " data-type='ApTabs'>
    <div class="float-center-control text-center">
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to sort group','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tab-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Widget Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
        
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Tabs','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tab-action btn-edit label-tooltip" data-type="ApTabs"><i class="icon-edit"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Tabs','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tab-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Tabs','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tab-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable or Enable Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tab-action btn-status label-tooltip<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>"><i class="icon-ok"></i></a>
        <div class="devicesd-active widget-action group-devicesd pull-right">
            <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?> deactive-desktop<?php } else { ?> active-desktop<?php }?> label-tooltip" device="desktop" data-toggle="tooltip"
                        title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?>Enable Widget On Desktop<?php } else { ?>Disable Widget On Desktop<?php }?>">
                <i class="icon-desktop leo-devicesd" ></i>
            </div>
            <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?> deactive-tablet<?php } else { ?> active-tablet<?php }?> label-tooltip" device="tablet" data-toggle="tooltip"
            title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?>Enable Widget On Tablet<?php } else { ?>Disable Widget On Tablet<?php }?>">
                <i class="icon-tablet leo-devicesd" ></i>
            </div>
            <div class="btn-group <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?> deactive-mobile<?php } else { ?> active-mobile<?php }?> label-tooltip" device="mobile" data-toggle="tooltip"
            title="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?>Enable Widget On Mobile<?php } else { ?>Disable Widget On Mobile<?php }?>">
                <i class="icon-mobile leo-devicesd" ></i>
            </div>
        </div>
    </div>
<?php if (!(isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?>
    <ul class="widget-container-heading nav nav-tabs" role="tablist">
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['foo']->value == 3) {?>id="default_tabnav"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['foo']->value == 1) {?>active<?php }?>">
                <a href="#tab<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8' ));?>
" role="tab" data-toggle="tab"><?php if ($_smarty_tpl->tpl_vars['foo']->value == 3) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8' ));
}?></a></li>
        <?php }
}
?>
        <li class="tab-button"><a href="javascript:void(0)" class="btn-add-tab"><i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>
    </ul>
    
    <div class="tab-content widget-container-content">
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <div <?php if ($_smarty_tpl->tpl_vars['foo']->value == 3) {?>id="default_tabcontent"<?php } else { ?>id="tab<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8' ));?>
"<?php }?> class="tab-pane<?php if ($_smarty_tpl->tpl_vars['foo']->value == 1) {?> active<?php }?> widget-wrapper-content">
                <div class="text-center tab-content-control">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
                    <a href="javascript:void(0)" class="tabcontent-action btn-new-widget label-tooltip" title=""><i class="icon-plus-sign"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action btn-edit label-tooltip" data-type="apSubTabs"><i class="icon-edit"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action btn-delete label-tooltip tab"><i class="icon-trash"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
                </div>
                <div class="subwidget-content">
                    
                </div>
            </div>
        <?php }
}
?>
    </div>
<?php } else { ?>
    <ul class="widget-container-heading nav nav-tabs" role="tablist">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
$_smarty_tpl->tpl_vars['subTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['subTab']->do_else = false;
?>
            <li class="">
                <a href="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' ));?>
" class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' ));?>
" role="tab" data-toggle="tab">
                    <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' ));?>
</span>
                </a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <li class="tab-button"><a href="javascript:void(0)" class="btn-add-tab"><i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a></li>
    </ul>

    <div class="tab-content">
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
    </div>
<?php }?>
</div>
<?php } else { ?>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabID']->value,'html','UTF-8' ));?>
" class="tab-pane widget-wrapper-content">
        <div class="text-center tab-content-control">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
            <a href="javascript:void(0)" class="tabcontent-action btn-new-widget label-tooltip" title=""><i class="icon-plus-sign"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action btn-edit label-tooltip" data-type="apSubTabs"><i class="icon-edit"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action btn-delete label-tooltip tab"><i class="icon-trash"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        </div>
        <div class="subwidget-content">
            <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
        </div>
    </div>
<?php }
}
}
