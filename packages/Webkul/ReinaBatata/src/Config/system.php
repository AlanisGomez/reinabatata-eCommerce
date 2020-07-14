<?php

return [
    [
        'key'  => 'reinabatata',
        'name' => 'reinabatata::app.admin.system.reinabatata.extension_name',
        'sort' => 2,
    ], [
        'key'  => 'reinabatata.configuration',
        'name' => 'reinabatata::app.admin.system.reinabatata.settings',
        'sort' => 1,
    ], [
        'key'   => 'reinabatata.configuration.general',
        'name'  => 'reinabatata::app.admin.system.reinabatata.general',
        'sort'  => 1,
        'fields' => [
            [
                'name'    => 'status',
                'title'   => 'reinabatata::app.admin.system.general.status',
                'type'    => 'select',
                'options' => [
                    [
                        'title' => 'reinabatata::app.admin.system.general.active',
                        'value' => true,
                    ], [
                        'title' => 'reinabatata::app.admin.system.general.inactive',
                        'value' => false,
                    ]
                ]
            ]
        ]
    ],  [
        'key'    => 'reinabatata.configuration.category',
        'name'   => 'reinabatata::app.admin.system.reinabatata.category',
        'sort'   => 1,
        'fields' => [
            [
                'name'    => 'icon_status',
                'title'   => 'reinabatata::app.admin.system.category.icon-status',
                'type'    => 'select',
                'options' => [
                    [
                        'title' => 'reinabatata::app.admin.system.category.active',
                        'value' => true,
                    ], [
                        'title' => 'reinabatata::app.admin.system.category.inactive',
                        'value' => false,
                    ]
                ]
            ],  [
                'name'    => 'image_status',
                'title'   => 'reinabatata::app.admin.system.category.image-status',
                'type'    => 'select',
                'options' => [
                    [
                        'title' => 'reinabatata::app.admin.system.category.active',
                        'value' => true,
                    ], [
                        'title' => 'reinabatata::app.admin.system.category.inactive',
                        'value' => false,
                    ]
                ]
            ],  [
                'name'          => 'image_height',
                'title'         => 'reinabatata::app.admin.system.category.image-height',
                'type'          => 'depands',
                'depand'        => 'image_status:true',
                'validation'    => 'numeric|max:3',
                'channel_based' => false,
                'locale_based'  => false,
            ],  [
                'name'          => 'image_width',
                'title'         => 'reinabatata::app.admin.system.category.image-width',
                'type'          => 'depands',
                'depand'        => 'image_status:true',
                'validation'    => 'numeric|max:3',
                'channel_based' => false,
                'locale_based'  => false,
            ],  [
                'name'          => 'image_alignment',
                'title'         => 'reinabatata::app.admin.system.category.image-alignment',
                'channel_based' => false,
                'locale_based'  => false,
                'type'          => 'depands',
                'depand'        => 'image_status:true',
                'options'       => [
                    [
                        'title' => 'Right',
                        'value' => 'right',
                    ], [
                        'title' => 'Left',
                        'value' => 'left',
                    ]
                ]
            ],  [
                'name'    => 'tooltip_status',
                'title'   => 'reinabatata::app.admin.system.category.show-tooltip',
                'type'    => 'select',
                'options' => [
                    [
                        'title' => 'reinabatata::app.admin.system.category.active',
                        'value' => true,
                    ], [
                        'title' => 'reinabatata::app.admin.system.category.inactive',
                        'value' => false,
                    ]
                ]
            ],  [
                'name'          => 'sub_category',
                'title'         => 'reinabatata::app.admin.system.category.sub-category-show',
                'channel_based' => false,
                'locale_based'  => false,
                'type'          => 'select',
                'options'       => [
                    [
                        'title' => 'All',
                        'value' => 'all',
                    ], [
                        'title' => 'Custom',
                        'value' => 'custom',
                    ]
                ]
            ],  [
                'name'          => 'sub_category_num',
                'title'         => 'reinabatata::app.admin.system.category.num-sub-category',
                'channel_based' => false,
                'locale_based'  => false,
                'type'          => 'depands',
                'depand'        => 'sub_category:custom',
                'validation'    => 'numeric|max:2',
            ]
        ]
    ]
];