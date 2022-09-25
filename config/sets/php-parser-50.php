<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;

/**
 * @see https://github.com/nikic/PHP-Parser/blob/master/UPGRADE-5.0.md
 */
return static function (RectorConfig $rectorConfig): void {
    // https://github.com/nikic/PHP-Parser/blob/master/UPGRADE-5.0.md#renamed-nodes
    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        'PhpParser\Node\Scalar\LNumber' => 'PhpParser\Node\Scalar\Int_',
        'PhpParser\Node\Scalar\DNumber' => 'PhpParser\Node\Scalar\Float_',

        'PhpParser\Node\Scalar\Encapsed' => 'PhpParser\Node\Scalar\InterpolatedString',
        'PhpParser\Node\Scalar\EncapsedStringPart' => 'PhpParser\Node\InterpolatedStringPart',

        'PhpParser\Node\Expr\ArrayItem' => 'PhpParser\Node\ArrayItem',

        'PhpParser\Node\Expr\ClosureUse' => 'PhpParser\Node\ClosureUse',

        'PhpParser\Node\Stmt\DeclareDeclare' => 'PhpParser\Node\DeclareItem',

        'PhpParser\Node\Stmt\PropertyProperty' => 'PhpParser\Node\PropertyItem',
        'PhpParser\Node\Stmt\StaticVar' => 'PhpParser\Node\StaticVar',
        'PhpParser\Node\Stmt\UseUse' => 'PhpParser\Node\UseItem',
    ]);

    // https://github.com/nikic/PHP-Parser/blob/master/UPGRADE-5.0.md#modifiers
};
