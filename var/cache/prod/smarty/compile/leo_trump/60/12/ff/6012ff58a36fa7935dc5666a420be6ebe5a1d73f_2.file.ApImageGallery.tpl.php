<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:55:57
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\themes\leo_trump\modules\appagebuilder\views\templates\hook\image-gallery\ApImageGallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435afd990679_01567878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6012ff58a36fa7935dc5666a420be6ebe5a1d73f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\themes\\leo_trump\\modules\\appagebuilder\\views\\templates\\hook\\image-gallery\\ApImageGallery.tpl',
      1 => 1631614370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435afd990679_01567878 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApImageGallery -->
<div class="widget ap-image-gallery">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <?php if ((isset($_smarty_tpl->tpl_vars['images']->value))) {?>
    <div class="widget-images block">
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
        <h4 class="title_block">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </h4>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <div class="block_content clearfix">
                <div class="images-list clearfix">    
                <div class="row no-margin">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'images', array (
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                    <div class="image-item <?php if ($_smarty_tpl->tpl_vars['columns']->value == 5) {?> col-md-2-4 <?php } else { ?> col-md-<?php echo htmlspecialchars(12/intval($_smarty_tpl->tpl_vars['columns']->value), ENT_QUOTES, 'UTF-8');
}?> col-sm-4 col-xs-4 col-sp-6 no-padding">
                        <a class="fancybox" data-fancybox-group="apimagegallery<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href= "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <img class="replace-2x img-fluid" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt=""/>
                    	</a>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    <?php echo '<script'; ?>
 type="text/javascript">
        ap_list_functions.push(function(){
            $(".fancybox").fancybox({
                openEffect : 'none',
                closeEffect : 'none'
            });
        });
    <?php echo '</script'; ?>
>
    <?php }?> 
</div><?php }
}
