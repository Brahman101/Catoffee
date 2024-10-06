<?php

return [
    'defaults' => [
        'guard' => 'pengguna',
        'passwords' => 'penggunas',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'pengguna' => [
            'driver' => 'session',
            'provider' => 'penggunas',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'penggunas' => [
            'driver' => 'eloquent',
            'model' => App\Models\Pengguna::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        'penggunas' => [
            'provider' => 'penggunas',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
