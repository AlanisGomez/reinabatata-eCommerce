<?php

namespace Webphorium\ReinaBatata\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webphorium\ReinaBatata\Models\Category::class,
        \Webphorium\ReinaBatata\Models\Content::class,
        \Webphorium\ReinaBatata\Models\ContentTranslation::class,
        \Webphorium\ReinaBatata\Models\OrderBrand::class,
        \Webphorium\ReinaBatata\Models\ReinaBatataCustomerCompareProduct::class,
        \Webphorium\ReinaBatata\Models\ReinaBatataMetadata::class,
    ];
}