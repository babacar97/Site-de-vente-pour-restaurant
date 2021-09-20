<?php
/* Smarty version 3.1.39, created on 2021-09-16 18:48:22
  from 'module:leofeatureviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614375563b4447_53764561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4605e3d697a1d5d1454546d8e4581ebff643bcef' => 
    array (
      0 => 'module:leofeatureviewstemplatesh',
      1 => 1631614367,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614375563b4447_53764561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12969453666143755635c282_87321955';
?>

<?php if (($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value == 0 && $_smarty_tpl->tpl_vars['too_early_extra']->value == false && ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] || $_smarty_tpl->tpl_vars['allow_guests_extra']->value)) || ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value != 0)) {?>
	<div id="leo_product_reviews_block_extra" class="no-print" <?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value != 0) {?>itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value != 0) {?>
			<div class="reviews_note clearfix">
				
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating','mod'=>'leofeature'),$_smarty_tpl ) );?>
&nbsp;</span>
				<div class="star_content clearfix">
					<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
						<?php if ($_smarty_tpl->tpl_vars['averageTotal_extra']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
							<div class="star"></div>
						<?php } else { ?>
							<div class="star star_on"></div>
						<?php }?>
					<?php
}
}
?>
					<meta itemprop="worstRating" content = "0" />
					<meta itemprop="ratingValue" content = "<?php if ((isset($_smarty_tpl->tpl_vars['ratings_extra']->value['avg']))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round($_smarty_tpl->tpl_vars['ratings_extra']->value['avg'],1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( round($_smarty_tpl->tpl_vars['averageTotal_extra']->value,1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
					<meta itemprop="bestRating" content = "5" />
				</div>
			</div>
		<?php }?>

		<ul class="reviews_advices">
			<?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value != 0) {?>
				<li>
					<a href="javascript:void(0)" class="read-review">					
						<i class="material-icons">&#xE0B9;</i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read reviews','mod'=>'leofeature'),$_smarty_tpl ) );?>
 (<span itemprop="reviewCount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value, ENT_QUOTES, 'UTF-8');?>
</span>)
					</a>
				</li>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['too_early_extra']->value == false && ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] || $_smarty_tpl->tpl_vars['allow_guests_extra']->value))) {?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value != 0) {?>last<?php }?>">
					<a class="open-review-form" href="javascript:void(0)" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_review_extra']->value, ENT_QUOTES, 'UTF-8');?>
" data-is-logged="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
" data-product-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_product_review_extra']->value, ENT_QUOTES, 'UTF-8');?>
">
						<i class="material-icons">&#xE150;</i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'leofeature'),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
		</ul>
	</div>
<?php }?>

<?php }
}
