<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PhpParser\Set\PhpParserSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([PhpParserSetList::PHP_PARSER_50]);
};
