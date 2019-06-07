<?php

return [
    'url' => env('PRESTASHOP_URL', 'http://domain.com'),
    'token' => env('PRESTASHOP_TOKEN', ''),
    'debug' => env('PRESTASHOP_DEBUG', env('APP_DEBUG', false)),
    'basic_auth' => env('PRESTASHOP_BASIC_AUTHENTICATION', '1'),
];
