<?php

namespace Webkul\ReinaBatata\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webkul\ReinaBatata\Models\Category::class,
        \Webkul\ReinaBatata\Models\Content::class,
        \Webkul\ReinaBatata\Models\ContentTranslation::class,
        \Webkul\ReinaBatata\Models\OrderBrand::class,
        \Webkul\ReinaBatata\Models\ReinaBatataCustomerCompareProduct::class,
        \Webkul\ReinaBatata\Models\ReinaBatataMetadata::class,
    ];
}