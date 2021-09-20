<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:14:52
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leoblog\views\templates\admin\leoblog_dashboard\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143899c24b4b4_38109204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c31d621b87c801821524a5e2d839bc276aae720' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leoblog\\views\\templates\\admin\\leoblog_dashboard\\helpers\\form\\form.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143899c24b4b4_38109204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_theme_configuration\helpers\form\form.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3861575986143899c235ca1_57370270', "input");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_3861575986143899c235ca1_57370270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_3861575986143899c235ca1_57370270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tabConfig') {?>
		<div class="row">
			<?php $_smarty_tpl->_assignInScope('tabList', $_smarty_tpl->tpl_vars['input']->value['values']);?>
			<ul class="nav nav-tabs" role="tablist">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabList']->value, 'value', false, 'key', 'tabList', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['index'];
?>
				<li role="presentation" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tabList']->value['first'] : null)) {?>active<?php }?>"><a href="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="aptab-config" role="tab" data-toggle="tab"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
</a></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }?>
	
<?php
}
}
/* {/block "input"} */
}
