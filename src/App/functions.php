<?php

declare(strict_types=1);

function dump(mixed $value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}