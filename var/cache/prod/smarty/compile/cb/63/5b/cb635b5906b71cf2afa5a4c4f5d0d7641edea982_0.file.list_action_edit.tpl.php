<?php
/* Smarty version 3.1.39, created on 2021-09-16 23:58:59
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\admin7791bfwld\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143be23bbb959_71709253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb635b5906b71cf2afa5a4c4f5d0d7641edea982' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\admin7791bfwld\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1631613272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143be23bbb959_71709253 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
