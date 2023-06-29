<?php
return [
    'backend' => [
        'frontName' => 'farmare_new'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '0e75ebe01a15bf7f30b93307a3fca959'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'farmare_new',
                'username' => 'farmare_new',
                'password' => 'nBvgZ7rA4nJt',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '725_'
            ],
            'page_cache' => [
                'id_prefix' => '725_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => '127.0.0.1',
                    'database' => '11',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '0',
                    'compression_lib' => '',
                    'preload_keys' => [
                        '725_EAV_ENTITY_TYPES',
                        '725_GLOBAL_PLUGIN_LIST',
                        '725_DB_IS_UP_TO_DATE',
                        '725_SYSTEM_DEFAULT'
                    ]
                ]
            ]
        ],
        'allow_parallel_generation' => false,
        'graphql' => [
            'id_salt' => 'mFKaW2tw3D6czi6QmYlCeJ3cELJZAAiQ'
        ]
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 0,
        'checkout' => 1,
        'amasty_blog' => 1,
        'amasty_shopby' => 1
    ],
    'install' => [
        'date' => 'Tue, 18 Apr 2023 13:11:57 +0000'
    ]
];
