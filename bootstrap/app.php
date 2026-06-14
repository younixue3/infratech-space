<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

(static function (): void {
    set_error_handler(static function (int $severity, string $message, string $file): bool {
        if ($severity === E_DEPRECATED && str_contains($file, \DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR)) {
            return true;
        }

        return false;
    });
})();

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })->create();
