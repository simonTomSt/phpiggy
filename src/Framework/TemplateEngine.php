<?php

namespace Framework;

class TemplateEngine
{
    public function __construct(private readonly string $basePath)
    {
    }

    public function render(string $template, array $data = []): string
    {
        extract(array_map(fn(mixed $d): mixed => escapeHTML($d), $data), EXTR_SKIP);

        ob_start();

        include $this->resolve($template);

        $output = ob_get_contents();

        ob_end_clean();

        return $output;
    }

    public function resolve(string $path): string
    {
        return "{$this->basePath}/{$path}";
    }
}