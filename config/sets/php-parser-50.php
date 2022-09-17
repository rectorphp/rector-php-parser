<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        'PhpParser\Node\Expr\ArrayItem' => 'PhpParser\Node\ArrayItem',
        // more here
    ]);
};
