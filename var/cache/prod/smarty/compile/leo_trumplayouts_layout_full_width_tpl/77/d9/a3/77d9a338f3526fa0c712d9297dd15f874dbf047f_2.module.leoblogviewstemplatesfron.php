<?php
/* Smarty version 3.1.39, created on 2021-09-16 20:14:29
  from 'module:leoblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61438985d69e84_31650301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77d9a338f3526fa0c712d9297dd15f874dbf047f' => 
    array (
      0 => 'module:leoblogviewstemplatesfron',
      1 => 1631614366,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61438985d69e84_31650301 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['no_follow']->value)) && $_smarty_tpl->tpl_vars['no_follow']->value) {?>
	<?php $_smarty_tpl->_assignInScope('no_follow_text', 'rel="nofollow"');
} else { ?>
	<?php $_smarty_tpl->_assignInScope('no_follow_text', '');
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['p']->value)) && $_smarty_tpl->tpl_vars['p']->value) {?>	
	<?php if (($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value) < $_smarty_tpl->tpl_vars['nb_items']->value) {?>
		<?php $_smarty_tpl->_assignInScope('blogShowing', $_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('blogShowing', ($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nb_items']->value-$_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)*-1);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['p']->value == 1) {?>
		<?php $_smarty_tpl->_assignInScope('blogShowingStart', 1);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('blogShowingStart', $_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['n']->value+1);?>
	<?php }?>
        
	<nav class="pagination">
		<div class="col-xs-12 col-md-6 col-lg-6">		
			<?php if ($_smarty_tpl->tpl_vars['nb_items']->value > 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing','mod'=>'leoblog'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogShowingStart']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogShowing']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of','mod'=>'leoblog'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['nb_items']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'items','mod'=>'leoblog'),$_smarty_tpl ) );?>
	
			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing','mod'=>'leoblog'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogShowingStart']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogShowing']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'of','mod'=>'leoblog'),$_smarty_tpl ) );?>
 1 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'item','mod'=>'leoblog'),$_smarty_tpl ) );?>

			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['start']->value != $_smarty_tpl->tpl_vars['stop']->value) {?>
			<div id="pagination<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" class="col-xs-12 col-md-6 col-lg-6">			
				<ul class="page-list clearfix text-sm-right text-xs-center">
					<?php if ($_smarty_tpl->tpl_vars['p']->value != 1) {?>
						<?php $_smarty_tpl->_assignInScope('p_previous', $_smarty_tpl->tpl_vars['p']->value-1);?>
						<li id="pagination_previous<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">							
							<a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 class="previous" rel="prev" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_previous']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<i class="material-icons">&#xE314;</i>
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','mod'=>'leoblog'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
					<?php } else { ?>
						<li id="pagination_previous<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">							
							<a class="previous disabled" rel="prev" href="#">
								<i class="material-icons">&#xE314;</i>
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','mod'=>'leoblog'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['start']->value == 3) {?>
						<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">1</a></li>
						<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,2),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">2</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['start']->value == 2) {?>
						<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">1</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['start']->value > 3) {?>
						<li><a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
  href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">1</a></li>
						<li class="truncate">...</li>
					<?php }?>
					<?php
$__section_pagination_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['stop']->value+1) ? count($_loop) : max(0, (int) $_loop));
$__section_pagination_0_start = (int)@$_smarty_tpl->tpl_vars['start']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['start']->value + $__section_pagination_0_loop) : min((int)@$_smarty_tpl->tpl_vars['start']->value, $__section_pagination_0_loop);
$__section_pagination_0_total = min(($__section_pagination_0_loop - $__section_pagination_0_start), $__section_pagination_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pagination'] = new Smarty_Variable(array());
if ($__section_pagination_0_total !== 0) {
for ($__section_pagination_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] = $__section_pagination_0_start; $__section_pagination_0_iteration <= $__section_pagination_0_total; $__section_pagination_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']++){
?>
						<?php if ($_smarty_tpl->tpl_vars['p']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null)) {?>
							<li class="current">
								<a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,(isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null)),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="disabled">
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								</a>
							</li>
						<?php } else { ?>
							<li>
								<a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,(isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null)),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pagination']->value['index'] : null),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								</a>
							</li>
						<?php }?>
					<?php
}
}
?>
					<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value > $_smarty_tpl->tpl_vars['stop']->value+2) {?>
						<li class="truncate">...</li>
						<li>
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value == $_smarty_tpl->tpl_vars['stop']->value+1) {?>
						<li>
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value == $_smarty_tpl->tpl_vars['stop']->value+2) {?>
						<li>
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value-1),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pages_nb']->value-intval(1), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
						<li>
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8');?>

							</a>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value > 1 && $_smarty_tpl->tpl_vars['p']->value != $_smarty_tpl->tpl_vars['pages_nb']->value) {?>
						<?php $_smarty_tpl->_assignInScope('p_next', $_smarty_tpl->tpl_vars['p']->value+1);?>
						<li id="pagination_next<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">						
							<a <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_follow_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 class="next" rel="next" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_next']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">							
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'leoblog'),$_smarty_tpl ) );?>
</span>
								<i class="material-icons">&#xE315;</i>
							</a>
						</li>
					<?php } else { ?>
						<li id="pagination_next<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paginationId']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">						
							<a class="next disabled" rel="next" href="#">	
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'leoblog'),$_smarty_tpl ) );?>
</span>
								<i class="material-icons">&#xE315;</i>
							</a>
						</li>
					<?php }?>
				</ul>			
			</div>
		<?php }?>
	</nav>	
<?php }
}
}
