<?php
/* Smarty version 3.1.39, created on 2021-09-16 18:56:49
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\hook\productExtra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61437751087f85_24317534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '001305c1d73272c167feedff601b16a8a028051e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\hook\\productExtra.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61437751087f85_24317534 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout Type','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 form-group">
      <select id="aplayout" name="aplayout" class="form-control select2-hidden-accessible" data-toggle="select2" tabindex="-1" aria-hidden="true">
      	<option value="default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Global Layout','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</option>
      	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_layouts']->value, 'aplayout');
$_smarty_tpl->tpl_vars['aplayout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['aplayout']->value) {
$_smarty_tpl->tpl_vars['aplayout']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['aplayout']->value['plist_key'];?>
" <?php if ($_smarty_tpl->tpl_vars['aplayout']->value['plist_key'] == $_smarty_tpl->tpl_vars['current_layout']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['aplayout']->value['name'];?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <br>
      <br>
      <div class="alert alert-info" role="alert">
        <i class="material-icons">help</i>
        <p class="alert-text">
          1. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select layout to show product','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br/>
          2. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Then you can use variable','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br/>
          $product.productLayout<br/>
          3. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To select product layout in file product.tpl','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
<br/>
          <br>
        </p>
      </div>
    </div>
  </div>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apextras']->value, 'apextrav', false, 'apextrak');
$_smarty_tpl->tpl_vars['apextrav']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['apextrak']->value => $_smarty_tpl->tpl_vars['apextrav']->value) {
$_smarty_tpl->tpl_vars['apextrav']->do_else = false;
?>
  <div class="row">
    <div class="col-md-12 form-group">
      <fieldset class="form-group">
        <label><?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
</label>
        <div class="translations tabbable" id="form_tab_hooks_meta_title">
          <div class="translationsFields tab-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
              <div class="translationsFields-form_tab_hooks_<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 tab-pane translation-field translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['default_language']->value['id_lang']) {?>visible<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['apextrav']->value == 'varchar(255)') {?>
                <input type="text" id="form_tab_hooks_<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" name="form[tab_hooks][<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_fields']->value[$_smarty_tpl->tpl_vars['apextrak']->value][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
"/>
                <?php } else { ?>
                <textarea name="form[tab_hooks][<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]" rows="2" class="textarea-autosize"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data_fields']->value[$_smarty_tpl->tpl_vars['apextrak']->value][$_smarty_tpl->tpl_vars['language']->value['id_lang']] ));?>
</textarea>
                <?php }?>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
        <p class="alert-text">Use $product.<?php echo $_smarty_tpl->tpl_vars['apextrak']->value;?>
 to get value in product.tpl file</p> 
      </fieldset>
    </div>
  </div>  
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
