<?php
/* Smarty version 3.1.39, created on 2021-09-17 12:04:46
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leobootstrapmenu\views\templates\hook\widgets\widget_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144683e189cd1_00790670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3646d8cca7fa750127641c421a9a855496a21b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leobootstrapmenu\\views\\templates\\hook\\widgets\\widget_html.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6144683e189cd1_00790670 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="leo-widget" data-id_widget="<?php echo $_smarty_tpl->tpl_vars['id_widget']->value;?>
">
    <?php if ((isset($_smarty_tpl->tpl_vars['html']->value))) {?>
        <div class="widget-html">
            <?php if ((isset($_smarty_tpl->tpl_vars['widget_heading']->value)) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
            <div class="menu-title">
                    <?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

            </div>
            <?php }?>
            <div class="widget-inner">
                    <?php echo $_smarty_tpl->tpl_vars['html']->value;?>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['show_widget_bo']->value == 'admin') {?>
        <div class="w-name">
            <select name="inject_widget" class="inject_widget_name">
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
        </div>
    <?php }?>
</div><?php }
}
