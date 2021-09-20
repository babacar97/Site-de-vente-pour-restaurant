<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:56:00
  from 'module:leobootstrapmenuviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435b0076eba1_72744276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '024c8c8c69d901a42dd06af29ce07d10ab2dcb88' => 
    array (
      0 => 'module:leobootstrapmenuviewstemp',
      1 => 1631614366,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435b0076eba1_72744276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '115876352261435b00758967_33346719';
if ((isset($_smarty_tpl->tpl_vars['error']->value)) && $_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</div>
<?php } else { ?>
    
    <?php if ($_smarty_tpl->tpl_vars['group_type']->value && $_smarty_tpl->tpl_vars['group_type']->value == 'horizontal') {?>
            <nav data-megamenu-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="leo-megamenu cavas_menu navbar navbar-default <?php if ($_smarty_tpl->tpl_vars['show_cavas']->value && $_smarty_tpl->tpl_vars['show_cavas']->value == 1) {?>enable-canvas<?php } else { ?>disable-canvas<?php }?> <?php if ($_smarty_tpl->tpl_vars['group_class']->value && $_smarty_tpl->tpl_vars['group_class']->value != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['group_class']->value, ENT_QUOTES, 'UTF-8');
}?>" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                    <button type="button" class="navbar-toggler hidden-lg-up" data-toggle="collapse" data-target=".megamenu-off-canvas-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                            <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Toggle navigation','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</span>
                                            &#9776;
                                            <!--
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            -->
                                    </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                                                        <div class="leo-top-menu collapse navbar-toggleable-md megamenu-off-canvas megamenu-off-canvas-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['boostrapmenu']->value,'html','UTF-8' ));?>
</div>
            </nav>
<?php echo '<script'; ?>
 type="text/javascript">
	list_menu_tmp.id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
';
	list_menu_tmp.type = 'horizontal';
<?php if ($_smarty_tpl->tpl_vars['show_cavas']->value && $_smarty_tpl->tpl_vars['show_cavas']->value == 1) {?>
	list_menu_tmp.show_cavas =1;
<?php } else { ?>
	list_menu_tmp.show_cavas =0;	
<?php }?>
	list_menu_tmp.list_tab = list_tab;
	list_menu.push(list_menu_tmp);
	list_menu_tmp = {};	
	list_tab = {};
<?php echo '</script'; ?>
>
    <?php } else { ?>
            <div data-megamenu-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="leo-verticalmenu <?php if ($_smarty_tpl->tpl_vars['group_class']->value && $_smarty_tpl->tpl_vars['group_class']->value != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['group_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
                    <h4 class="title_block verticalmenu-button"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_title']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
                    <div class="box-content block_content">
                            <div class="verticalmenu" role="navigation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['boostrapmenu']->value,'html','UTF-8' ));?>
</div>
                    </div>
            </div>
<?php echo '<script'; ?>
 type="text/javascript">
	list_menu_tmp.id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['megamenu_id']->value, ENT_QUOTES, 'UTF-8');?>
';
	list_menu_tmp.type = 'vertical';
	list_menu_tmp.list_tab = list_tab;
	list_menu.push(list_menu_tmp);
	list_menu_tmp = {};
	list_tab = {};
<?php echo '</script'; ?>
>


    <?php }?>

<?php }
}
}
