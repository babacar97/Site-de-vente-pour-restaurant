<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:00:54
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\admin\ap_page_builder_home\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143be96823dd4_84951656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f558030f39f3c05ea9c6aa4989a653959d34ec79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\admin\\ap_page_builder_home\\home.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./position.tpl' => 4,
  ),
),false)) {
function content_6143be96823dd4_84951656 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_home\home -->
<?php if ((isset($_smarty_tpl->tpl_vars['errorText']->value)) && $_smarty_tpl->tpl_vars['errorText']->value) {?>
<div class="error alert alert-danger">
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['errorText']->value,'html','UTF-8' ));?>

</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['errorSubmit']->value)) && $_smarty_tpl->tpl_vars['errorSubmit']->value) {?>
<div class="error alert alert-danger">
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['errorSubmit']->value,'html','UTF-8' ));?>

</div>
<?php }?>
<form id="form_data_profile" name="form_data_profile" action="<?php echo $_smarty_tpl->tpl_vars['ajaxHomeUrl']->value;?>
&id_appagebuilder_profiles=<?php echo $_smarty_tpl->tpl_vars['idProfile']->value;?>
" method="post">
	<input id="data_profile" type="hidden" value="" name="data_profile" />
	<input id="data_id_profile" type="hidden" value="" name="data_id_profile" />
        <input id="submitSaveAndStay" type="hidden" value="1" name="submitSaveAndStay" />
	<button class="hidden" type="submit">submit</button>
</form>
<div id="top_wrapper">
    <a class="btn btn-default btn-form-toggle" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand or Colapse','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
">
        <i class="icon-resize-small"></i>
    </a>
    <a class="btn btn-default btn-fwidth width-default" data-width="auto"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-large" data-width="1200"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Large','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-medium" data-width="992"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Medium','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-small" data-width="768"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Small','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-extra-small" data-width="603"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Small','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-mobile" data-width="480"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <div class="btn btn-default leo-group-devicesd">
        <a class="btn btn-default width-desktop leo-devicesd label-tooltip" title="Show only on desktop" data-width="1200"><i class="icon-desktop"></i></a>
        <a class="btn btn-default width-tablet leo-devicesd label-tooltip" title="Show only on tablet " data-width="768"><i class="icon-tablet"></i></a>
        <a class="btn btn-default width-mobile leo-devicesd label-tooltip" title="Show only on mobile " data-width="480"><i class="icon-mobile"></i></a>
    </div>
    
    <div class="pull-right control-right">
        <div class="dropdown">
            <a id="current_profile" class="btn btn-default" role="button" data-toggle="dropdown" data-target="#" data-id='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentProfile']->value['id_appagebuilder_profiles'],'html','UTF-8' ));?>
'>
              <i class="icon-file-text"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current Profile:','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentProfile']->value['name'],'html','UTF-8' ));
if ($_smarty_tpl->tpl_vars['profilesList']->value) {?> <span class="caret"></span><?php }?>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['profilesList']->value) {?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profilesList']->value, 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
                <li><a class="btn btn-select-profile" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajaxHomeUrl']->value,'html','UTF-8' ));?>
&id_appagebuilder_profiles=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['id_appagebuilder_profiles'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['name'],'html','UTF-8' ));?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php }?>
        </div>
        
        <a class="btn btn-default btn-form-action btn-import" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import Form','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"><i class="icon-cloud-upload"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
        <div class="dropdown">
            <a class="btn btn-default export_button" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
              <i class="icon-cloud-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Data','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dLabel">
                <li><a class="btn export-from btn-export" data-type="all"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Profile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</strong></a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exportItems']->value, 'hookData', false, 'position');
$_smarty_tpl->tpl_vars['hookData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['hookData']->value) {
$_smarty_tpl->tpl_vars['hookData']->do_else = false;
?>
                <li><a class="btn export-from btn-export" data-type="position" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'),'html','UTF-8' ));?>
"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
</strong></a></li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookData']->value, 'hook');
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
                <li><a class="btn export-from btn-export" data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value,'html','UTF-8' ));?>
">-------- Hook <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value,'html','UTF-8' ));?>
</a></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</div>
<div id="home_wrapper" class="default">
    <div class="position-cover row" id="position-header">
    <?php $_smarty_tpl->_subTemplateRender('file:./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'Header','config'=>$_smarty_tpl->tpl_vars['positions']->value['header'],'listPositions'=>$_smarty_tpl->tpl_vars['listPositions']->value['header'],'default'=>$_smarty_tpl->tpl_vars['currentPosition']->value['header']), 0, false);
?>
    </div>
    <div class="position-cover row" id="position-content">
    <?php $_smarty_tpl->_subTemplateRender('file:./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'Content','config'=>$_smarty_tpl->tpl_vars['positions']->value['content'],'listPositions'=>$_smarty_tpl->tpl_vars['listPositions']->value['content'],'default'=>$_smarty_tpl->tpl_vars['currentPosition']->value['content']), 0, true);
?>
    </div>
    <div class="position-cover row" id="position-footer">
    <?php $_smarty_tpl->_subTemplateRender('file:./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'Footer','config'=>$_smarty_tpl->tpl_vars['positions']->value['footer'],'listPositions'=>$_smarty_tpl->tpl_vars['listPositions']->value['footer'],'default'=>$_smarty_tpl->tpl_vars['currentPosition']->value['footer']), 0, true);
?>
    </div>
    <div class="position-cover row" id="position-product">
    <?php $_smarty_tpl->_subTemplateRender('file:./position.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>'Product','config'=>$_smarty_tpl->tpl_vars['positions']->value['product'],'listPositions'=>$_smarty_tpl->tpl_vars['listPositions']->value['product'],'default'=>$_smarty_tpl->tpl_vars['currentPosition']->value['product']), 0, true);
?>
    </div>
    
</div>
<div id="bottom_wrapper">
    <a class="btn btn-default btn-form-toggle" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expand or Colapse','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
">
        <i class="icon-resize-small"></i>
    </a>
    <a class="btn btn-default btn-fwidth width-default" data-width="auto"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-large" data-width="1200"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Large','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-medium" data-width="992"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Medium','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-small" data-width="768"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Small','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-extra-small" data-width="603"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Small','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default btn-fwidth width-mobile" data-width="480"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
    
    <div class="pull-right control-right">
        <div class="dropdown">
            <a class="btn btn-default" role="button" data-toggle="dropdown" data-target="#" data-id='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentProfile']->value['id_appagebuilder_profiles'],'html','UTF-8' ));?>
'>
              <i class="icon-file-text"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current Profile:','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentProfile']->value['name'],'html','UTF-8' ));
if ($_smarty_tpl->tpl_vars['profilesList']->value) {?><span class="caret"></span><?php }?>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['profilesList']->value) {?>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profilesList']->value, 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
                <li><a class="btn btn-select-profile" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajaxHomeUrl']->value,'html','UTF-8' ));?>
&id_appagebuilder_profiles=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['id_appagebuilder_profiles'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile']->value['name'],'html','UTF-8' ));?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php }?>
        </div>
        
        <a class="btn btn-default btn-form-action btn-import" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import Form','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"><i class="icon-cloud-upload"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
        <div class="dropdown dropup">
            <a class="btn btn-default export_button" role="button" data-toggle="dropdown" data-target="#">
              <i class="icon-cloud-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export Data','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <span class="caret"></span>
            </a>

            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dLabel">
                <li><a class="btn export-from btn-export" data-type="all"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Profile','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</strong></a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exportItems']->value, 'hookData', false, 'position');
$_smarty_tpl->tpl_vars['hookData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['hookData']->value) {
$_smarty_tpl->tpl_vars['hookData']->do_else = false;
?>
                <li><a class="btn export-from btn-export" data-type="position" data-position="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( mb_strtolower($_smarty_tpl->tpl_vars['position']->value, 'UTF-8'),'html','UTF-8' ));?>
"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' ));?>
</strong></a></li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookData']->value, 'hook');
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
                <li><a class="btn export-from btn-export" data-type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value,'html','UTF-8' ));?>
">-------- Hook <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value,'html','UTF-8' ));?>
</a></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</div>
<div id="ap_loading" class="ap-loading">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplPath']->value)."/ap_page_builder_home/home_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo '<script'; ?>
 type="text/javascript">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('imgModuleLink'=>$_smarty_tpl->tpl_vars['imgModuleLink']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('apAjaxShortCodeUrl'=>$_smarty_tpl->tpl_vars['ajaxShortCodeUrl']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('apAjaxHomeUrl'=>$_smarty_tpl->tpl_vars['ajaxHomeUrl']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('apImgController'=>$_smarty_tpl->tpl_vars['imgController']->value),$_smarty_tpl ) );?>

		
	var checkSaveMultithreading=<?php echo $_smarty_tpl->tpl_vars['checkSaveMultithreading']->value;?>
;	
	var checkSaveSubmit=<?php echo $_smarty_tpl->tpl_vars['checkSaveSubmit']->value;?>
;	
    $(document).ready(function(){
        var $apHomeBuilder = $(document).apPageBuilder();
        $apHomeBuilder.process('<?php echo $_smarty_tpl->tpl_vars['dataForm']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['shortcodeInfos']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['languages']->value;?>
');
        $apHomeBuilder.ajaxShortCodeUrl = apAjaxShortCodeUrl;
        $apHomeBuilder.ajaxHomeUrl = apAjaxHomeUrl;
        $apHomeBuilder.lang_id = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang_id']->value,'html','UTF-8' ));?>
';
        $apHomeBuilder.imgController = apImgController;
        $apHomeBuilder.profileId = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['idProfile']->value,'html','UTF-8' ));?>
';
    });
<?php echo '</script'; ?>
><?php }
}
