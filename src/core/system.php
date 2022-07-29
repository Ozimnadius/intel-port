<?php

function content(string $name, array $vars = []): string
{
    $fullPath = $GLOBALS['path']."/src/components/$name/index.php";
    extract($vars);
    ob_start();
    include($fullPath);
    return ob_get_clean();
}

function component(string $name, array $vars = []): string
{
    $fullPath = $GLOBALS['path']."/src/components/$name/index.php";
    extract($vars);
    return include($fullPath);
}

