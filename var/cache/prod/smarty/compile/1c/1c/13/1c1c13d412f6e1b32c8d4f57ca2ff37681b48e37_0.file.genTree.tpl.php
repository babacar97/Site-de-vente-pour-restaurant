<?php
/* Smarty version 3.1.39, created on 2021-09-17 12:04:04
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leobootstrapmenu\views\templates\admin\genTree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614468148e5fc7_80483379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c1c13d412f6e1b32c8d4f57ca2ff37681b48e37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leobootstrapmenu\\views\\templates\\admin\\genTree.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614468148e5fc7_80483379 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;
echo $_smarty_tpl->tpl_vars['t']->value;?>
">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
        <li data-menu-type="<?php echo $_smarty_tpl->tpl_vars['menu']->value['type'];?>
" id="list_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
" data-id-menu="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
" class="nav-item <?php if ($_smarty_tpl->tpl_vars['param_id_btmegamenu']->value == $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu']) {?>selected<?php }?>">
        <div>
            <span class="disclose"><span></span></span>
            <?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
 (ID:<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
)
            <input type="checkbox" name="menubox[]" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
" class="quickselect" title="Select to delete">
            <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="quickedit" rel="id_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
">E</span>
            <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="quickdel" rel="id_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
">D</span>
            <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="quickduplicate" rel="id_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
">DUP</span>
            <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['active'])) && $_smarty_tpl->tpl_vars['menu']->value['active']) {?>
                <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to Disabled','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="quickdeactive" rel="id_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
">ACT</span>
            <?php } else { ?>
                <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to Enabled','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
" class="quickactive" rel="id_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'];?>
">DACT</span>
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'] != $_smarty_tpl->tpl_vars['parent']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['model_cat']->value->genTree($_smarty_tpl->tpl_vars['menu']->value['id_btmegamenu'],$_smarty_tpl->tpl_vars['level']->value+1);?>

        <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol><?php }
}
