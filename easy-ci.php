<?php

declare(strict_types=1);

use Rector\Contract\Rector\RectorInterface;
use Symplify\EasyCI\Config\EasyCIConfig;

return static function (EasyCIConfig $easyCIConfig): void {
    $easyCIConfig->paths([__DIR__ . '/config', __DIR__ . '/src']);

    $easyCIConfig->typesToSkip([RectorInterface::class, \Rector\Set\Contract\SetListInterface::class]);
};
