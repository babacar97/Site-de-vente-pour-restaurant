<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:14:52
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\admin7791bfwld\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143899c555be0_67438568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3940cd24761be36f6141645f475d0dc2087474ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\admin7791bfwld\\themes\\default\\template\\content.tpl',
      1 => 1631613270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143899c555be0_67438568 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
