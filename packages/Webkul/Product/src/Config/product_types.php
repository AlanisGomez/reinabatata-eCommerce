<?php

return [
    'simple'       => [
        'key'   => 'simple',
        'name'  => 'Simple',
        'class' => 'Webkul\Product\Type\Simple',
        'sort'  => 1,
    ],

    'configurable' => [
        'key'   => 'configurable',
        'name'  => 'Configurable',
        'class' => 'Webkul\Product\Type\Configurable',
        'sort'  => 2,
    ],

    'grouped'      => [
        'key'   => 'grouped',
        'name'  => 'Grouped',
        'class' => 'Webkul\Product\Type\Grouped',
        'sort'  => 4,
    ],
];