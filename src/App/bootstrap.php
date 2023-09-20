<?php

declare(strict_types=1);

include __DIR__ . "/../../vendor/autoload.php";

use App\Config\Paths;
use Framework\App;

use function App\Config\registerRoutes;

$app = new App(PATHS::SOURCE . "/App/container-definitions.php");

registerRoutes($app);

return $app;