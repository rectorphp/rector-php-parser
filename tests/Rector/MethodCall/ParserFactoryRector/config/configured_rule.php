<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PhpParser\Rector\MethodCall\ParserFactoryRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ParserFactoryRector::class);
};
