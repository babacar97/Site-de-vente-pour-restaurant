<?php
/* Smarty version 3.1.39, created on 2021-09-16 18:48:26
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\leofeature\views\templates\hook\leo_product_tab_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143755a749ab7_16253797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fa3a7df1947389d547c45ca5d6ed260ca756e43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\leofeature\\views\\templates\\hook\\leo_product_tab_content.tpl',
      1 => 1631614367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143755a749ab7_16253797 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'default') {?>
	
<?php } elseif ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'accordion') {?>
	<div id="collapseleofeatureproductreview" class="collapse" role="tabpanel">
          <div class="card-block">
<?php } else { ?>
	<div class="tab-pane fade in" id="leo-product-show-review-content">	
<?php }?>

		<div id="product_reviews_block_tab">
			<?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
$_smarty_tpl->tpl_vars['review']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['review']->value['content']) {?>
					<div class="review" itemprop="review" itemscope itemtype="https://schema.org/Review">
						<div class="review-info row">
							<div class="review_author col-sm-3">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grade','mod'=>'leofeature'),$_smarty_tpl ) );?>
&nbsp;</span>
								<div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
									<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= 5; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
										<?php if ($_smarty_tpl->tpl_vars['review']->value['grade'] <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
											<div class="star"></div>
										<?php } else { ?>
											<div class="star star_on"></div>
										<?php }?>
									<?php
}
}
?>
									<meta itemprop="worstRating" content = "0" />
									<meta itemprop="ratingValue" content = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['grade'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
									<meta itemprop="bestRating" content = "5" />
								</div>
								<div class="review_author_infos">
									<strong itemprop="author"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['customer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong>
									<meta itemprop="datePublished" content="<?php echo htmlspecialchars(substr(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['date_add'],'html','UTF-8' )),0,10), ENT_QUOTES, 'UTF-8');?>
" />
									<em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['date_add'],'html','UTF-8' )),'full'=>0),$_smarty_tpl ) );?>
</em>
								</div>
							</div>

							<div class="review_details col-sm-9">
								<p itemprop="name" class="title_block">
									<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
								</p>
								<p itemprop="reviewBody"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['review']->value['content'],'html','UTF-8' )));?>
</p>
								
							</div><!-- .review_details -->
						</div>
						
						<div class="review_button">
							<ul>
								<?php if ($_smarty_tpl->tpl_vars['review']->value['total_advice'] > 0) {?>
									<li>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$d out of %2$d people found this review useful.','sprintf'=>array($_smarty_tpl->tpl_vars['review']->value['total_useful'],$_smarty_tpl->tpl_vars['review']->value['total_advice']),'mod'=>'leofeature'),$_smarty_tpl ) );?>

									</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
									<?php if (!$_smarty_tpl->tpl_vars['review']->value['customer_advice'] && $_smarty_tpl->tpl_vars['allow_usefull_button']->value) {?>
									<li>
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Was this review useful to you?','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
										<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="1" data-id-product-review="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id_product_review'], ENT_QUOTES, 'UTF-8');?>
">
											<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
										</button>
										<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="0" data-id-product-review="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id_product_review'], ENT_QUOTES, 'UTF-8');?>
">
											<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
										</button>
									</li>
									<?php }?>
									<?php if (!$_smarty_tpl->tpl_vars['review']->value['customer_report'] && $_smarty_tpl->tpl_vars['allow_report_button']->value) {?>
									<li>
										<a href="javascript:void(0)" class="btn report_btn" data-id-product-review="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id_product_review'], ENT_QUOTES, 'UTF-8');?>
">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','mod'=>'leofeature'),$_smarty_tpl ) );?>

										</a>
									</li>
									<?php }?>
								<?php }?>
							</ul>
						</div>
					</div> <!-- .review -->
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value && ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
					<a class="open-review-form" href="javascript:void(0)" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_tab_content']->value, ENT_QUOTES, 'UTF-8');?>
" data-is-logged="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
" data-product-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_product_tab_content']->value, ENT_QUOTES, 'UTF-8');?>
">
						<i class="material-icons">&#xE150;</i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'leofeature'),$_smarty_tpl ) );?>

					</a>
				<?php }?>
			<?php } else { ?>
				<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value && ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] || $_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
					<a class="open-review-form" href="javascript:void(0)" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product_tab_content']->value, ENT_QUOTES, 'UTF-8');?>
" data-is-logged="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
" data-product-link="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_product_tab_content']->value, ENT_QUOTES, 'UTF-8');?>
">
						<i class="material-icons">&#xE150;</i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Be the first to write your review!','mod'=>'leofeature'),$_smarty_tpl ) );?>

					</a>			
				<?php } else { ?>
					<p class="align_center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer reviews for the moment.','mod'=>'leofeature'),$_smarty_tpl ) );?>
</p>
				<?php }?>
			<?php }?>
		</div> 
<?php if ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'default') {?>
		
<?php } elseif ((isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'accordion') {?>
		</div>
	</div>
<?php } else { ?>
	</div>	
<?php }
}
}
