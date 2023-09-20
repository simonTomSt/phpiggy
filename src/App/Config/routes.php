<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Controllers\AboutController;
use App\Controllers\HomeController;


function registerRoutes(App $app): void
{
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
}