<?php

/**
 * Rename this file to `.env.local.php` for local developement.
 */

return [

    'DB_HOST'     => 'localhost',
    'DB_NAME'     => 'phphub',
    'DB_USERNAME' => 'homestead',
    'DB_PASSWORD' => 'secret',

    // Github oauth
//    'client_id'     => 'eefd4111fbcb0e1d0fb9',
//    'client_secret' => '3dce7078f20bc10a1f6bef559b81787648f1b372',
    'client_id'     => '760711de0fbbeafafb01',
    'client_secret' => '0e4cc1b36ee357a29a0bac800eae04d7601dabfd', 

    // Github Card
    'github_card_client_id'     => '760711de0fbbeafafb01',
    'github_card_client_secret' => '0e4cc1b36ee357a29a0bac800eae04d7601dabfd',

    // App config
    'url'           => 'http://phphub.app/',
    'timezone'      => 'Asia/Shanghai',
    'locale'        => 'zh-CN',
    // 'url_static'    => 'https://dn-phphub.qbox.me/',
    // 'user_static'    => 'https://dn-phphub.qbox.me/',
    //

    'BACK_MANAGER_ROOT' => '',
    'BACK_MANAGER_DROPBOX_token' => '',
    'BACK_MANAGER_DROPBOX_key' => '',
    'BACK_MANAGER_DROPBOX_secret' => '',
    'BACK_MANAGER_DROPBOX_app' => '',
    'BACK_MANAGER_DROPBOX_root' => '',

    'bugsnag_api_key'   => 'you key here',
];