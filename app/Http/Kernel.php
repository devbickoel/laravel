protected $middlewareGroups = [
    'web' => [
        // ...
        \App\Http\Middleware\AllowTelegramIframe::class,
    ],
];
