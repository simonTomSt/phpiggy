<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    public function setRoute(string $method, string $path, array $controller): void
    {
        $this->routes[] = [
            'path' => $this->normalizePath($path),
            'method' => strtoupper($method),
            'controller' => $controller
        ];
    }

    public function dispatch(string $path, string $method): void
    {
        $path = $this->normalizePath($path);
        $method = strtoupper($method);

        foreach ($this->routes as $route){
            if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method){
                continue;
            }

            [$class, $function] = $route['controller'];

            $controllerInstance = new $class;
            $controllerInstance->{$function}();
        }
    }

    private function normalizePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";

        return preg_replace('#/{2,}#', '/', $path);
    }
}