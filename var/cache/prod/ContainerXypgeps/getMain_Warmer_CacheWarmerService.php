<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'main.warmer.cache_warmer' shared service.

return $this->services['main.warmer.cache_warmer'] = new \PrestaShopBundle\Cache\CacheWarmer(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'});
