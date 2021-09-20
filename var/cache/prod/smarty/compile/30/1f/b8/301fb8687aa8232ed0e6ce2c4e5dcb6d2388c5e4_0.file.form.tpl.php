<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:15:06
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leoblog\views\templates\admin\leoblog_blogs\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614389aa42b9c7_15638456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '301fb8687aa8232ed0e6ce2c4e5dcb6d2388c5e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leoblog\\views\\templates\\admin\\leoblog_blogs\\helpers\\form\\form.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614389aa42b9c7_15638456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<!-- @file modules\appagebuilder\views\templates\admin\ap_page_builder_theme_configuration\helpers\form\form.tpl -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1218598819614389aa420452_28675741', "input");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_1218598819614389aa420452_28675741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1218598819614389aa420452_28675741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'date_leoblog') {?>
		<div class="row">
			<div class="input-group col-lg-4">
				<input
					id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['id'],'htmlall','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));
}?>"
					type="text"
					data-hex="true"
					<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
					<?php } else { ?>class="datepicker"<?php }?>
					name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
"
					value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['default'])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == '') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['default'],'htmlall','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));
}?>" />
				<span class="input-group-addon">
					<i class="icon-calendar-empty"></i>
				</span>
			</div>
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
