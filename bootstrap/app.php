<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\SuperAdmin;
use App\Http\Middleware\DivisionAdmin;
use App\Http\Middleware\DistrictAdmin;
use App\Http\Middleware\ThanaAdmin;
use App\Http\Middleware\UPAdmin;
use App\Http\Middleware\UPManager;
use App\Http\Middleware\UserPanel;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'superAdmin'    => DistrictAdmin::class,
            'divisionAdmin' => DivisionAdmin::class,
            'districtAdmin' => DistrictAdmin::class,
            'thanaAdmin'    => ThanaAdmin::class,
            'unionAdmin'    => UPAdmin::class,
            'unionManager'  => UPManager::class,
            'userPanel'     => UserPanel::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
