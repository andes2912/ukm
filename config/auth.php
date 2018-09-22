<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'api-admin' => [
            'driver' => 'token',
            'provider' => 'admins',
        ],

        'bahasa' => [
            'driver' => 'session',
            'provider' => 'bahasas',
        ],

        'api-bahasa' => [
            'driver' => 'token',
            'provider' => 'bahasas',
        ],

        'dcfc' => [
            'driver' => 'session',
            'provider' => 'dcfcs',
        ],

        'api-dcfc' => [
            'driver' => 'token',
            'provider' => 'dcfcs',
        ],

        'psdj' => [
            'driver' => 'session',
            'provider' => 'psdjs',
        ],

        'api-psdj' => [
            'driver' => 'token',
            'provider' => 'psdjs',
        ],

        'musik' => [
            'driver' => 'session',
            'provider' => 'musiks',
        ],

        'api-musik' => [
            'driver' => 'token',
            'provider' => 'musiks',
        ],

        'bem' => [
            'driver' => 'session',
            'provider' => 'bems',
        ],

        'api-bem' => [
            'driver' => 'token',
            'provider' => 'bems',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Model\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Model\Admin::class,
        ],
        'bahasas' => [
            'driver' => 'eloquent',
            'model' => App\Model\Bahasa::class,
        ],
        'dcfcs' => [
            'driver' => 'eloquent',
            'model' => App\Model\Dcfc::class,
        ],
        'psdjs' => [
            'driver' => 'eloquent',
            'model' => App\Model\Psdj::class,
        ],
        'musiks' => [
            'driver' => 'eloquent',
            'model' => App\Model\Musik::class,
        ],
         'bems' => [
            'driver' => 'eloquent',
            'model' => App\Model\Bem::class,
        ],


        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 10,
        ],

        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 10,
        ],

        'bahasas' => [
            'provider' => 'bahasas',
            'table' => 'password_resets',
            'expire' => 10,
        ],
        'dcfcs' => [
            'provider' => 'dcfcs',
            'table' => 'password_resets',
            'expire' => 10,
        ],
        'psdjs' => [
            'provider' => 'psdjs',
            'table' => 'password_resets',
            'expire' => 10,
        ],
        'musiks' => [
            'provider' => 'musiks',
            'table' => 'password_resets',
            'expire' => 10,
        ],
        'bems' => [
            'provider' => 'bems',
            'table' => 'password_resets',
            'expire' => 10,
        ],
    ],

];
