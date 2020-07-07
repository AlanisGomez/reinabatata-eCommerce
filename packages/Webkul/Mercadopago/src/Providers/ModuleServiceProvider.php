<?php

namespace Webkul\Mercadopago\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webkul\Mercadopago\Models\OrderMP::class
    ];
}