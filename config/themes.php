<?php

return [
    'default' => 'default',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default'
        ],

        'reinabatata' => [
            'views_path' => 'resources/themes/reinabatata/views',
            'assets_path' => 'public/themes/reinabatata/assets',
            'name' => 'Reina Batata',
            'parent' => 'default'
        ],
    ]
];