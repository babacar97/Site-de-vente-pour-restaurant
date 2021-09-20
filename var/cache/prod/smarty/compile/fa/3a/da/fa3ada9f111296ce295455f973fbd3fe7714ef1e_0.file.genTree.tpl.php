<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:15:06
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leoblog\views\templates\admin\genTree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614389aa09f5b8_09797829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa3ada9f111296ce295455f973fbd3fe7714ef1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leoblog\\views\\templates\\admin\\genTree.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614389aa09f5b8_09797829 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="level<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level']->value,'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value,'htmlall','UTF-8' ));?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
        <li id="list_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'],'htmlall','UTF-8' ));?>
" class="<?php if ($_smarty_tpl->tpl_vars['param_id_leoblogcat']->value == $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat']) {?>selected<?php }?>">
        <div>
            <span class="disclose"><span></span></span>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['title'],'htmlall','UTF-8' ));?>
 (ID:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'],'htmlall','UTF-8' ));?>
)
            <input type="checkbox" name="menubox[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'],'htmlall','UTF-8' ));?>
" class="quickselect" title="Select to delete">
            <span class="quickedit" rel="id_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'],'htmlall','UTF-8' ));?>
">E</span>
            <span class="quickdel" rel="id_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'],'htmlall','UTF-8' ));?>
">D</span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'] != $_smarty_tpl->tpl_vars['parent']->value) {?>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['model_leoblogcat']->value->genTree($_smarty_tpl->tpl_vars['menu']->value['id_leoblogcat'],$_smarty_tpl->tpl_vars['level']->value+1),'htmlall','UTF-8' ));?>

        <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol><?php }
}
