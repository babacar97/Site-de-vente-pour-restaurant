{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright  2007-2016 Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{block name='product_thumbnail'}
{if isset($cfg_product_list_image) && $cfg_product_list_image}
	<div class="leo-more-info" data-idproduct="{$product.id_product}"></div>
{/if}
<a href="{$product.url}" class="thumbnail product-thumbnail">
  <img
    class="img-fluid"
	src = "{$product.cover.bySize.product_small.url}"
	alt = "{$product.cover.legend}"
	data-full-size-image-url = "{$product.cover.large.url}"
  >
</a> 
{/block}

