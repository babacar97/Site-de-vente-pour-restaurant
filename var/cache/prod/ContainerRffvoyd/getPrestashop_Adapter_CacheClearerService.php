<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.cache_clearer' shared service.

return $this->services['prestashop.adapter.cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\CacheClearer(${($_ = isset($this->services['prestashop.core.cache.clearer.cache_clearer_chain']) ? $this->services['prestashop.core.cache.clearer.cache_clearer_chain'] : $this->load('getPrestashop_Core_Cache_Clearer_CacheClearerChainService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.cache.clearer.symfony_cache_clearer']) ? $this->services['prestashop.adapter.cache.clearer.symfony_cache_clearer'] : ($this->services['prestashop.adapter.cache.clearer.symfony_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SymfonyCacheClearer())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.cache.clearer.media_cache_clearer']) ? $this->services['prestashop.adapter.cache.clearer.media_cache_clearer'] : ($this->services['prestashop.adapter.cache.clearer.media_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\MediaCacheClearer())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer']) ? $this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] : ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SmartyCacheClearer())) && false ?: '_'});
