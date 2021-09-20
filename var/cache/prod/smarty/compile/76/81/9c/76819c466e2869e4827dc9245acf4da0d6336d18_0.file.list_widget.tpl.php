<?php
/* Smarty version 3.1.39, created on 2021-09-17 12:13:08
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leobootstrapmenu\views\templates\admin\list_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61446a34a10936_22189041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76819c466e2869e4827dc9245acf4da0d6336d18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leobootstrapmenu\\views\\templates\\admin\\list_widget.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61446a34a10936_22189041 (Smarty_Internal_Template $_smarty_tpl) {
?>
<option value=""></option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['w']->value['key_widget'];?>
"><?php echo $_smarty_tpl->tpl_vars['w']->value['name'];?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }
}
