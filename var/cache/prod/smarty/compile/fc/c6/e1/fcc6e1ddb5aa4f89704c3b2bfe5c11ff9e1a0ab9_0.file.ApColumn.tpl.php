<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:04:14
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\admin\shortcodes\ApColumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143bf5e7ff9f9_87478554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc6e1ddb5aa4f89704c3b2bfe5c11ff9e1a0ab9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\admin\\shortcodes\\ApColumn.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143bf5e7ff9f9_87478554 (Smarty_Internal_Template $_smarty_tpl) {
?><p><input type="text" name="controller_pages" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" class="em_text"/></p>
<p><select size="25" name="controller_pages_select" class="em_list" multiple="multiple">

<option disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['_core_']->value;?>
</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['controllers']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['arr_controllers']->value)) {?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
    <?php } else { ?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_controllers_type']->value, 'label', false, 'type');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
    <option disabled="disabled">________________________________________ <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 ________________________________________</option>
    <?php $_smarty_tpl->_assignInScope('all_modules_controllers', $_smarty_tpl->tpl_vars['controllers_modules']->value[$_smarty_tpl->tpl_vars['type']->value]);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_modules_controllers']->value, 'modules_controllers', false, 'module');
$_smarty_tpl->tpl_vars['modules_controllers']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['modules_controllers']->value) {
$_smarty_tpl->tpl_vars['modules_controllers']->do_else = false;
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_controllers']->value, 'cont');
$_smarty_tpl->tpl_vars['cont']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cont']->value) {
$_smarty_tpl->tpl_vars['cont']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('key', "module-".((string)$_smarty_tpl->tpl_vars['module']->value)."-".((string)$_smarty_tpl->tpl_vars['cont']->value));?>
            <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['arr_controllers']->value)) {?>
                <option value="module-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
" selected="selected">module__<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
__<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
</option>
            <?php } else { ?>
                <option value="module-<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
">module__<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
__<?php echo $_smarty_tpl->tpl_vars['cont']->value;?>
</option>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select></p><?php }
}
