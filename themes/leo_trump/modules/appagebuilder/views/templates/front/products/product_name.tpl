{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright   Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
{block name='product_name'}
  <h2 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h2>
{/block}
