<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:55:56
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\hook\ApRow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435afc859b13_01395324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab3eff78a675a1686c350c8a60b2688fed17954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\hook\\ApRow.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435afc859b13_01395324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['container'])) && $_smarty_tpl->tpl_vars['formAtts']->value['container']) {?>
<div class="wrapper<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_img'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bg_img'] && $_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>"
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bg_config'] == "fullwidth") {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_img'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bg_img']) {?>
        <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?>
            data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bg_img'], ENT_QUOTES, 'UTF-8');?>
" style="background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'], ENT_QUOTES, 'UTF-8');?>
"
        <?php } else { ?>
            style="background:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bg_img'], ENT_QUOTES, 'UTF-8');?>
) <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'], ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
    <?php } else { ?>
        style="background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }
}
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bg_config'] == "fullwidth") {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['parallax'])) && $_smarty_tpl->tpl_vars['formAtts']->value['parallax']) {
echo $_smarty_tpl->tpl_vars['formAtts']->value['parallax'];
}?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formAtts']) ? $_smarty_tpl->tpl_vars['formAtts']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['bg_data'] = '';
$_smarty_tpl->_assignInScope('formAtts', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formAtts']) ? $_smarty_tpl->tpl_vars['formAtts']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['bg_img'] = '';
$_smarty_tpl->_assignInScope('formAtts', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formAtts']) ? $_smarty_tpl->tpl_vars['formAtts']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['parallax'] = '';
$_smarty_tpl->_assignInScope('formAtts', $_tmp_array);?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['formAtts']) ? $_smarty_tpl->tpl_vars['formAtts']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['calljsparallax'] = "1";
$_smarty_tpl->_assignInScope('formAtts', $_tmp_array);
}?>>

<div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['container'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
<?php }?>
    <div<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])) && $_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        class="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_img'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bg_img'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_config'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bg_config'] == "boxed" && $_smarty_tpl->tpl_vars['aplazyload']->value) {?>lazy <?php }
echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation'] != 'none' ? ' has-animation' : '', ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['bg_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation'] != 'none') {?> data-animation="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'] != '') {?> data-animation-delay="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_delay'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_duration'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_duration'] != '') {?> data-animation-duration="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_duration'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count'] != '') {?> data-animation-iteration-count="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_iteration_count'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite'])) && $_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite'] != '') {?> data-animation-infinite="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['animation_infinite'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_img'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bg_img']) {?>data-src="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_img'];?>
"<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['parallax'])) && $_smarty_tpl->tpl_vars['formAtts']->value['parallax']) {
echo $_smarty_tpl->tpl_vars['formAtts']->value['parallax'];
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['css_style'])) && $_smarty_tpl->tpl_vars['formAtts']->value['css_style']) {
echo $_smarty_tpl->tpl_vars['formAtts']->value['css_style'];
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bg_data'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bg_data']) {?>data-bg_data="<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_data'];?>
"<?php }?>
        >
        <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['bg_video'];?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block title-ap-group"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['title'];?>
</h4>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget sub-title-ap-group"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html']))) {?>
            <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
        <?php }?>
    </div>
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['container'])) && $_smarty_tpl->tpl_vars['formAtts']->value['container']) {?>
</div>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['leoConfiguration']->value)) && $_smarty_tpl->tpl_vars['leoConfiguration']->value->get('APPAGEBUILDER_LOAD_STELLAR')) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['calljsparallax'])) && $_smarty_tpl->tpl_vars['formAtts']->value['calljsparallax']) {?>
    
	<?php echo '<script'; ?>
>
		ap_list_functions.push(function(){
			$.stellar({horizontalScrolling:false}); 
		});
	<?php echo '</script'; ?>
>
    
    <?php }
}
}
}
