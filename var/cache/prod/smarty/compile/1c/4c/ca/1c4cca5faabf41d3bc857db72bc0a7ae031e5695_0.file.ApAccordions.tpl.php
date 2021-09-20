<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:00:55
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApAccordions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143be97bba595_66257222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c4cca5faabf41d3bc857db72bc0a7ae031e5695' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_shortcodes\\ApAccordions.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143be97bba595_66257222 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_shortcodes\ApAccordions -->
<?php if (!(isset($_smarty_tpl->tpl_vars['isSubTab']->value))) {?>
<div id="<?php if (!(isset($_smarty_tpl->tpl_vars['apInfo']->value))) {?>default_ApAccordions<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ));
}?>" class="widget-row clearfix ApAccordions<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value))) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ));
}
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_desktop'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_desktop']) {?> deactive-desktop<?php } else { ?> active-desktop<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_tablet'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_tablet']) {?> deactive-tablet<?php } else { ?> active-tablet<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active_mobile'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active_mobile']) {?> deactive-mobile<?php } else { ?> active-mobile<?php }?>" data-type='ApAccordions'>
    <div class="float-center-control text-center">
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Drag to sort accordion','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="accordions-action waction-drag label-tooltip"><i class="icon-move"></i> </a>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Widget Accordions','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
        
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Accordions','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="accordions-action btn-edit label-tooltip " data-type="ApAccordions"><i class="icon-edit"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Accordions','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="accordions-action btn-delete label-tooltip"><i class="icon-trash"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Accordions','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="accordions-action btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable or Enable Accordions','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="accordions-action btn-status label-tooltip<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['active'])) && !$_smarty_tpl->tpl_vars['formAtts']->value['active']) {?> deactive<?php } else { ?> active<?php }?>"><i class="icon-ok"></i></a>
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
    <div class="panel-group" id="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ));
} else { ?>accordion<?php }?>">
        <?php if (!(isset($_smarty_tpl->tpl_vars['formAtts']->value['form_id']))) {?>
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 2+1 - (1) : 1-(2)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <div class="panel panel-default">
                <div class="panel-heading widget-container-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8' ));?>
">Accordion <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8' ));?>
</a>
                    </h4>
                </div>
                <div id="collapse<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['foo']->value,'html','UTF-8' ));?>
" class="panel-collapse collapse in widget-container-content">
                    <div class="panel-body">
                        <div class="text-center tab-content-control">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accordion','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
                            <a href="javascript:void(0)" class="tabcontent-action accordion btn-new-widget label-tooltip" title=""><i class="icon-plus-sign"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action accordions btn-edit label-tooltip" data-type="apSubAccordions"><i class="icon-edit"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action accordions btn-delete label-tooltip"><i class="icon-trash"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action accordions btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
                        </div>
                        <div class="subwidget-content">

                        </div>
                    </div>
                </div>
            </div>    
        <?php }
}
?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
        <?php }?>
            <a href="javascript:void(0)" class="btn-add-accordion"><i class="icon-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    </div>
</div>    
<?php } else { ?>
        <div class="panel panel-default">
            <div class="panel-heading widget-container-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' ));?>
" data-parent="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['parent_id'],'html','UTF-8' ));?>
" href="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' ));?>
</a>
                </h4>
            </div>
            <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ));?>
" class="panel-collapse collapse widget-wrapper-content widget-container-content">
                <div class="panel-body">
                    <div class="text-center tab-content-control">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</span>
                        <a href="javascript:void(0)" class="tabcontent-action accordion btn-new-widget label-tooltip" title=""><i class="icon-plus-sign"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action accordions btn-edit label-tooltip" data-type="apSubAccordions"><i class="icon-edit"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action accordions btn-delete label-tooltip"><i class="icon-trash"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate Tab','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" class="tabcontent-action accordions btn-duplicate label-tooltip"><i class="icon-paste"></i></a>
                    </div>
                    <div class="subwidget-content">
                        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
                    </div>
                </div>
            </div>
        </div> 
<?php }
}
}
