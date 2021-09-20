<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:55:59
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leobootstrapmenu\views\templates\hook\menu_1_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435affac0485_03686154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c22614660c8cc9f11d0ba33b8c746d3bfb0d973' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leobootstrapmenu\\views\\templates\\hook\\menu_1_widget.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435affac0485_03686154 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['menu']->value['active'] == 1) {?>
<li data-menu-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['type'], ENT_QUOTES, 'UTF-8');?>
" class="nav-item parent <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['menu_class'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['hascat']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['align']->value, ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addwidget']->value, ENT_QUOTES, 'UTF-8');?>
 " <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->renderAttrs($_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
>
    <a class="nav-link dropdown-toggle <?php if ($_smarty_tpl->tpl_vars['hascat']->value) {?>has-category<?php }?>" data-toggle="dropdown" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->getLink($_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['target'], ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_smarty_tpl->tpl_vars['menu']->value['icon_class']) {?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['icon_class'] != preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['menu']->value['icon_class'])) {?>
                <span class="hasicon menu-icon-class"><?php echo $_smarty_tpl->tpl_vars['menu']->value['icon_class'];?>

            <?php } else { ?>
                <span class="hasicon menu-icon-class"><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['image']) {?>
            <span class="hasicon menu-icon" style="background:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->image_base_url, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['image'], ENT_QUOTES, 'UTF-8');?>
') no-repeat">
        <?php }?>
            
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['show_title']) {?>
            <span class="menu-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['text']) {?>
            <span class="sub-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['description']) {?>
            <span class="menu-desc"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['image'] || $_smarty_tpl->tpl_vars['menu']->value['icon_class']) {?>
            </span>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['model']->value->is_live_edit && $_smarty_tpl->tpl_vars['menu']->value['is_group'] == 0) {?><b class="caret"></b><?php }?>
    </a>
        <?php if (!$_smarty_tpl->tpl_vars['model']->value->is_live_edit && $_smarty_tpl->tpl_vars['menu']->value['is_group'] == 0) {?><b class="caret"></b><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['menu']->value['sub_with'] == 'widget') {?>
        <div class="dropdown-sub <?php if ($_smarty_tpl->tpl_vars['menu']->value['is_group'] == 1) {?>dropdown-mega<?php } else { ?>dropdown-menu<?php }?>" <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
>
            <div class="dropdown-menu-inner">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->rows, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value->cols, 'col');
$_smarty_tpl->tpl_vars['col']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->do_else = false;
?>
                            <div class="mega-col col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->colwidth, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['model']->value->getColumnDataConfig($_smarty_tpl->tpl_vars['col']->value), ENT_QUOTES, 'UTF-8');?>
>
                                <div class="mega-col-inner<?php if ((isset($_smarty_tpl->tpl_vars['col']->value->colclass))) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col']->value->colclass, ENT_QUOTES, 'UTF-8');
}?>">
                                    <?php echo $_smarty_tpl->tpl_vars['model']->value->renderWidgetsInCol($_smarty_tpl->tpl_vars['col']->value);?>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php }?>
</li>
<?php }
}
}
