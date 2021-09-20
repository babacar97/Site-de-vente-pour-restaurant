<?php
/* Smarty version 3.1.39, created on 2021-09-17 12:04:45
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leobootstrapmenu\views\templates\hook\widgets\widget_product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144683dd15d72_54944471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd433a3f7b0a19a949a4225709af8c1262044ca87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leobootstrapmenu\\views\\templates\\hook\\widgets\\widget_product_list.tpl',
      1 => 1631614366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6144683dd15d72_54944471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="leo-widget" data-id_widget="<?php echo $_smarty_tpl->tpl_vars['id_widget']->value;?>
">
<?php if ((isset($_smarty_tpl->tpl_vars['products']->value)) && !empty($_smarty_tpl->tpl_vars['products']->value)) {?>
	<div class="widget-products">
		<?php if ((isset($_smarty_tpl->tpl_vars['widget_heading']->value)) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
		<div class="menu-title">
			<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

		</div>
		<?php }?>
		<div class="widget-inner">
			<?php if ((isset($_smarty_tpl->tpl_vars['products']->value)) && $_smarty_tpl->tpl_vars['products']->value) {?>
				<div class="product-block">
					<?php $_smarty_tpl->_assignInScope('liHeight', 140);?>
					<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);?>
					<?php $_smarty_tpl->_assignInScope('nbLi', $_smarty_tpl->tpl_vars['limit']->value);?>
					<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

					<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->tpl_vars['nbLines']->value),'liHeight'=>$_smarty_tpl->tpl_vars['liHeight']->value,'assign'=>'ulHeight'),$_smarty_tpl);?>
	 

					<?php $_smarty_tpl->_assignInScope('mproducts', array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['limit']->value));?>
					 
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'homeFeaturedProducts', array (
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
						<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeFeaturedProducts']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeFeaturedProducts']->value['total'] : null),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?> 
						<div class="product-miniature js-product-miniature" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" data-id-product-attribute="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" itemscope itemtype="http://schema.org/Product">
							<div class="thumbnail-container clearfix">
								<div class="product-image">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11474890016144683dceb867_99299896', 'product_thumbnail');
?>

								</div>
								<div class="product-meta">
									<div class="product-description">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15540662296144683dcf52b0_91069042', 'product_name');
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4692722456144683dcf9162_55615955', 'product_price_and_shipping');
?>

									</div>
								</div>
							</div>
						</div>			
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
	</div>
<?php } else { ?>
    <div class="widget-products">		
        <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products found.','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</p>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['show_widget_bo']->value == 'admin') {?>
    <div class="w-name">
        <select name="inject_widget" class="inject_widget_name">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['w']->value['key_widget'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['w']->value['name'];?>

                </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
<?php }?>
</div><?php }
/* {block 'product_thumbnail'} */
class Block_11474890016144683dceb867_99299896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_11474890016144683dceb867_99299896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="thumbnail product-thumbnail">
											<img
												class="img-fluid<?php if ((isset($_smarty_tpl->tpl_vars['aplazyload']->value)) && $_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>"
												<?php if ((isset($_smarty_tpl->tpl_vars['aplazyload']->value)) && $_smarty_tpl->tpl_vars['aplazyload']->value) {?>data-src<?php } else { ?>src<?php }?> = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'];?>
"
												alt = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['legend'];?>
"
												data-full-size-image-url = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'];?>
"
											>
										</a>
									<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_15540662296144683dcf52b0_91069042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_15540662296144683dcf52b0_91069042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<h4 class="h3 product-title" itemprop="name"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' ));?>
</a></h4>
										<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_4692722456144683dcf9162_55615955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_4692722456144683dcf9162_55615955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
												<div class="product-price-and-shipping">
													<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

														<span class="regular-price"><?php echo $_smarty_tpl->tpl_vars['product']->value['regular_price'];?>
</span>
														<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
															<span class="discount-percentage"><?php echo $_smarty_tpl->tpl_vars['product']->value['discount_percentage'];?>
</span>
														<?php }?>
													<?php }?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


													<span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
														<span itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
"></span><span itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['price_amount'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
													</span>

													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

												</div>
											<?php }?>
										<?php
}
}
/* {/block 'product_price_and_shipping'} */
}
