<?php

declare(strict_types=1);

function dump(mixed $value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function escapeHTML(mixed $value): string
{
    return htmlspecialchars((string)$value);
}