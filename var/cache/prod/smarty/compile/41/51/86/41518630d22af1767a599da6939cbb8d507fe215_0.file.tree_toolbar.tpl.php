<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:00:52
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\admin7791bfwld\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143be949e9fc5_04998737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41518630d22af1767a599da6939cbb8d507fe215' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\admin7791bfwld\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1631613272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143be949e9fc5_04998737 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
