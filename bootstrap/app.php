<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\{Exceptions, Middleware};
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // $middleware->redirectGuestsTo('/');
        // $middleware->redirectGuestsTo(
        //     fn(Request $request) =>
        //     abort(404) // Mengarahkan tamu ke halaman 404
        // );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
