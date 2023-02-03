<?php

declare(strict_types=1);

namespace Rector\PhpParser\Tests\Rector\MethodCall\ParserFactoryRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class ParserFactoryRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    /**
     * @return Iterator<string>
     */
    public function provideData(): Iterator
    {
        return self::yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}
