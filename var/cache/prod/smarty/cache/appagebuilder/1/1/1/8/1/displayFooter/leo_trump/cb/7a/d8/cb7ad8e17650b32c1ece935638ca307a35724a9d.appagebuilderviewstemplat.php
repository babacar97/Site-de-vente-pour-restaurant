<?php
/* Smarty version 3.1.39, created on 2021-09-17 00:05:09
  from 'module:appagebuilderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6143bf9598fe21_45225157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd50c9c59a2a4e1b1dc3bed4fc8dce8da33039f' => 
    array (
      0 => 'module:appagebuilderviewstemplat',
      1 => 1631614365,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6143bf9598fe21_45225157 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
    <div        class="row  no-margin ApRow  has-bg bg-boxed"
                            style="background: no-repeat;"        data-bg_data=" no-repeat"        >
                                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 gr-top-footer ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

	
<!-- @file modules\appagebuilder\views\templates\hook\ApBlockLink -->
            <div class="block ApLink ApBlockLink">
                        
                            <ul>
                                                            <li><a href="http://localhost/prestashop_1.7.7.6/content/4-a-propos" target="_self">About Us</a></li>
                                                                                <li><a href="http://localhost/prestashop_1.7.7.6/nous-contacter" target="_self">Contact Nous</a></li>
                                                                                <li><a href="http://localhost/prestashop_1.7.7.6/content/3-conditions-utilisation" target="_self">Terms &amp; Conditions</a></li>
                                                    </ul>
                    </div>
    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

  <div class="block block-social">
    <ul>
          </ul>
  </div>


    </div>            </div>
    <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
    <div        class="row gr-bottom-footer ApRow  has-bg bg-boxed"
                            style="background: no-repeat;"        data-bg_data=" no-repeat"        >
                                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12  ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
<div     class="block ApHtml">
	                    <div class="block_content"><p>Adresse : Dakar , point E rue de kaolack</p><p>Telephone : 33 567 89 09</p><p>Email :info@senfastfood.com</p><p>Service client : 33 654 89 09</p><p><br></p></div>
    	</div>
    </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12  ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApInstagram -->
    
        <div class="block ApInstagram instagram-block">
                        
        <div class="block_content">
            <div id="instafeed" ></div>
            <p class="link-instagram">
                            <a href="https://instagram.com/prestashop_gallery_fr" target="_blank" title="Voir tous dans instagram"><i class="fa fa-instagram"></i>&nbsp;&nbsp;Voir tous dans instagram</a>
                        </p>
        </div>

            </div>


<script type="text/javascript">
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
	accessToken: "3953969014.f7b7691.46d67fc2a0a34df9acc933cb236a49ed",
	limit: 20,


	template: '<a class="leo-instagram-size" target="_blank" href="{{link}}"><img title="{{caption}}" src="{{image}}"/></a>',


	transform: function(item) {
		var d = new Date(item.timestamp);
		item.date = [d.getDate(), d.getMonth(), d.getYear()].join('/');
		return item;
	},

			after: function() {
		                        
								// CASE : 2,3 images in one column
			var photos = [];
			$("#instafeed img").each(function() {
												photos.push( $(this).parent().prop('outerHTML'));
			});
			$("#instafeed").html('');
			$("#instafeed").addClass('owl-loading');

			var itempercolumn = 2;

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
			
			$('#instafeed').imagesLoaded( function() {
				$('#instafeed').owlCarousel({
					items:			3,
					itemsDesktop:		[1200,3],
					itemsDesktopSmall:	[992,3],
					itemsTablet:		[768,2],
					itemsMobile:		[576,1],
					itemsCustom:		[[1199,3],[992,3],[768,3],[481,5],[0,3]],
					singleItem:		false,       // true : show only 1 item
					itemsScaleUp:		false,
					slideSpeed:		200,        //  change speed when drag and drop a item
					paginationSpeed:	800,       // change speed when go next page
					autoPlay:		false,       // time to show each item
					stopOnHover:		false,
					navigation:		false,
					navigationText:		["&lsaquo;", "&rsaquo;"],
					scrollPerPage:		false,
					pagination:		false,       // show bullist
					paginationNumbers:	false,       // show number
					responsive:		true,
					lazyLoad:		false,
					lazyFollow:		false,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
					lazyEffect:		"fade",
					autoHeight:		false,
					mouseDrag:		true,
					touchDrag:		true,
					addClassActive:		true,
					direction:		false,
					afterInit: OwlLoaded,
					afterAction : leo_create_show,
				});
			});
			function OwlLoaded(el){
				el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
				if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
					el.width('100%');
			};
				}
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
</script>

    </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12  ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
<div     class="block ApHtml">
	                    <div class="block_content"><p>De lundi à vendredi</p><p>8 am - 10 pm</p><p>Samedi Dimanche</p><p>10 am - 9pm</p><p>24H/24</p></div>
    	</div>
    </div>            </div>
    <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
    <div id="form_3459220402666852"        class="row footer-copyright ApRow  has-bg bg-fullwidth"
                            style=""        data-bg_data=" #252525 no-repeat"        >
                                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
<div     class="block float-md-left ApRawHtml">
	                    © 2021 Sen fast food - Tous droits réservés.     	</div><!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
<div id="image-form_4160112538632669" class="block float-md-right ApImage">
	
            
                    <a href="http://prestashop.com" target=&quot;_blank&quot;>
                <img src="/prestashop_1.7.7.6/themes/leo_trump/assets/img/modules/appagebuilder/images/payment.png" class=""
                                    title=""
            alt=""
	    style=" width:auto; 
			height:auto" />

                </a>
            	        </div>
    </div>            </div>
    <?php }
}
