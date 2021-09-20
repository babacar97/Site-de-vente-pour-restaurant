<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:56:01
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\modules\appagebuilder\views\templates\hook\ApInstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435b01beb236_23349193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52e0166c70fe0c88ad30b95501554ef95a9b5258' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\modules\\appagebuilder\\views\\templates\\hook\\ApInstagram.tpl',
      1 => 1631614365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435b01beb236_23349193 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApInstagram -->
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
    
    <?php if (!(isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])) || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'full') {?>    <div class="block <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 instagram-block">
        <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>

        <div class="block_content">
            <div id="instafeed" <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "list") {?>class='normal-list'<?php }?>></div>
            <p class="link-instagram">
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['profile_link'])) && $_smarty_tpl->tpl_vars['formAtts']->value['profile_link']) {?>
                <a href="https://instagram.com/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['profile_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"><i class="fa fa-instagram"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
            <?php }?>
            </p>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    </div>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])) && ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion' || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen')) {?>    <div class="block <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 instagram-block block-toggler<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen') {?> accordion_small_screen<?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
            <div class="title clearfix" data-target="#widget-instagram-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
                <h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
                <span class="float-xs-right">
                  <span class="navbar-toggler collapse-icons">
                    <i class="material-icons add">&#xE313;</i>
                    <i class="material-icons remove">&#xE316;</i>
                  </span>
                </span>
            </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <div class="collapse block_content" id="widget-instagram-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <div id="instafeed" <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "list") {?>class='normal-list'<?php }?>></div>
            <p class="link-instagram">
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['profile_link'])) && $_smarty_tpl->tpl_vars['formAtts']->value['profile_link']) {?>
                <a href="https://instagram.com/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['profile_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
"><i class="fa fa-instagram"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
            <?php }?>
            </p>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
    </div>
    <?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    var instafeed_start = 0;
    ap_list_functions.push(function(){

        $(window).scroll(function() {
		if(instafeed_start != 1){
			var hT = $('#instafeed').offset().top,
			hH = $('#instafeed').outerHeight(),
			wH = $(window).height(),
			wS = $(this).scrollTop();

			if (wS > (hT+hH-wH)){
				$('#instafeed').fadeOut();
				instafeed_start = 1;
				leo_create_instafeed();
				// $('#instafeed').fadeIn(3500);
			}
		}
	});
});
    
var leo_create_instafeed = function() {
	var feed = new Instafeed({
<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['access_token'])) && $_smarty_tpl->tpl_vars['formAtts']->value['access_token']) {?>
	accessToken: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['access_token'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
<?php }
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['limit'])) && $_smarty_tpl->tpl_vars['formAtts']->value['limit']) {?>
	limit: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['limit']), ENT_QUOTES, 'UTF-8');?>
,
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "list") {?>

	template: '<div class="col-sp-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4"><a class="leo-instagram-size" target="_blank" href="{{link}}"><img title="{{caption}}" src="{{image}}"/></a></div>',

<?php } else { ?>

	template: '<a class="leo-instagram-size" target="_blank" href="{{link}}"><img title="{{caption}}" src="{{image}}"/></a>',

<?php }?>

	transform: function(item) {
		var d = new Date(item.timestamp);
		item.date = [d.getDate(), d.getMonth(), d.getYear()].join('/');
		return item;
	},

	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] !== "list") {?>
		after: function() {
		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value)) && (isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>
						var html = $("#instafeed").html();
			html = html.replace(/ src="/g,' class="lazyOwl" data-src="');
			$("#instafeed").html(html);
		<?php }?>
                        
		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "boostrap") {?>

		<?php } else { ?>
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn'])) && $_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn'] > 1) {?>
			// CASE : 2,3 images in one column
			var photos = [];
			$("#instafeed img").each(function() {
												photos.push( $(this).parent().prop('outerHTML'));
			});
			$("#instafeed").html('');
			$("#instafeed").addClass('owl-loading');

			var itempercolumn = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn'], ENT_QUOTES, 'UTF-8');?>
;

			var photos = array_chunk(photos,itempercolumn);
			var total_column = photos.length;

			for (i = 0; i < total_column; i++)
			{
				if(i == 0){
					var img_html = '<div class="item first">';
				} else {
					var img_html = '<div class="item">';
				}

				for(j=0; j<photos[i].length; j++)
				{
					img_html += '<div class="block-carousel-container">';
					img_html += '   <div class="left-block">';
					img_html += '       <div class="block-carousel-image-container image">';

					img_html += photos[i][j];

					img_html += '       </div>';
					img_html += '   </div>';
					img_html += '</div>';
				}

				$("#instafeed").html( $("#instafeed").html() + img_html );
			}
			<?php }?>

			$('#instafeed').imagesLoaded( function() {
				$('#instafeed').owlCarousel({
					items:			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['items']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['items']), ENT_QUOTES, 'UTF-8');
} else { ?>false<?php }?>,
					itemsDesktop:		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop'])) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']) {?>[1200,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
					itemsDesktopSmall:	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall'])) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']) {?>[992,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
					itemsTablet:		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet'])) && $_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']) {?>[768,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
					itemsMobile:		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile'])) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']) {?>[576,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
					itemsCustom:		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom'])) && $_smarty_tpl->tpl_vars['formAtts']->value['itemscustom']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['itemscustom'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>false<?php }?>,
					singleItem:		false,       // true : show only 1 item
					itemsScaleUp:		false,
					slideSpeed:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']), ENT_QUOTES, 'UTF-8');
} else { ?>200<?php }?>,        //  change speed when drag and drop a item
					paginationSpeed:	<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']), ENT_QUOTES, 'UTF-8');
} else { ?>800<?php }?>,       // change speed when go next page
					autoPlay:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoplay']) {?>true<?php } else { ?>false<?php }?>,       // time to show each item
					stopOnHover:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['stoponhover']) {?>true<?php } else { ?>false<?php }?>,
					navigation:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['navigation']) {?>true<?php } else { ?>false<?php }?>,
					navigationText:		["&lsaquo;", "&rsaquo;"],
					scrollPerPage:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['scrollperpage']) {?>true<?php } else { ?>false<?php }?>,
					pagination:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['pagination']) {?>true<?php } else { ?>false<?php }?>,       // show bullist
					paginationNumbers:	<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationnumbers']) {?>true<?php } else { ?>false<?php }?>,       // show number
					responsive:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['responsive']) {?>true<?php } else { ?>false<?php }?>,
					lazyLoad:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>true<?php } else { ?>false<?php }?>,
					lazyFollow:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyfollow']) {?>true<?php } else { ?>false<?php }?>,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
					lazyEffect:		"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['lazyeffect'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
					autoHeight:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoheight']) {?>true<?php } else { ?>false<?php }?>,
					mouseDrag:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['mousedrag']) {?>true<?php } else { ?>false<?php }?>,
					touchDrag:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['touchdrag']) {?>true<?php } else { ?>false<?php }?>,
					addClassActive:		true,
					direction:		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['rtl']) {?>'rtl'<?php } else { ?>false<?php }?>,
					afterInit: OwlLoaded,
					afterAction : leo_create_show,
				});
			});
			function OwlLoaded(el){
				el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
				if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
					el.width('100%');
			};
		<?php }?>
		}
	<?php }?>
	});
	feed.run();
}


	var array_chunk = function(arr, chunkSize) {
		var groups = [], i;
		for (i = 0; i < arr.length; i += chunkSize) {
			groups.push(arr.slice(i, i + chunkSize));
		}
		return groups;
	}

	var leo_create_show = function() {
		$('#instafeed').fadeIn();
	}
<?php echo '</script'; ?>
>
<?php }
}
}
