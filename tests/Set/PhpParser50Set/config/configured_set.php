<?php

use Rector\PhpParser\Set\PhpParserSetList;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        PhpParserSetList::PHP_PARSER_50
    ]);
};