<?php return [
    'eccube_install' => env('ECCUBE_INSTALL', 0),
    'auth_magic' => env('ECCUBE_AUTH_MAGIC', null),
    'auth_type' => 'HMAC',
    'password_hash_algos' => 'sha256',
    'force_ssl' => env('ECCUBE_FORCE_SSL', false),
    'admin_allow_hosts' => env('ECCUBE_ADMIN_ALLOW_HOSTS', []),
    'cookie_lifetime' => env('ECCUBE_COOKIE_LIFETIME', 0),
    'cookie_name' => env('ECCUBE_COOKIE_NAME', 'eccube'),
    'locale' => env('ECCUBE_LOCALE', 'ja'),
    'timezone' => env('ECCUBE_TIMEZONE', 'Asia/Tokyo'),
    'currency' => env('ECCUBE_CURRENCY', 'MYR'),
    'trusted_proxies_connection_only' => env('ECCUBE_TRUSTED_PROXIES_CONNECTION_ONLY', false),
    'trusted_proxies' => env('ECCUBE_TRUSTED_PROXIES', []),
    'vendor_name' => 'Acme',
];
