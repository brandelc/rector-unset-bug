<?php

use Rector\Config\RectorConfig;
use Rector\Php56\Rector\FunctionLike\AddDefaultValueForUndefinedVariableRector;

return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->rule(AddDefaultValueForUndefinedVariableRector::class);
    $rectorConfig->paths([
        __DIR__
    ]);
    $rectorConfig->skip([
        __DIR__ . '/vendor'
    ]);

};
