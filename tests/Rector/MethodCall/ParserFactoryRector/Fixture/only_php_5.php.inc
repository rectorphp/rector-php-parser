<?php

namespace Rector\PhpParser\Tests\Rector\MethodCall\ParserFactoryRector\Fixture;

use PhpParser\ParserFactory;

$factory = new ParserFactory;

$parser = $factory->create(ParserFactory::ONLY_PHP5);

?>
-----
<?php

namespace Rector\PhpParser\Tests\Rector\MethodCall\ParserFactoryRector\Fixture;

use PhpParser\ParserFactory;

$factory = new ParserFactory;

$parser = $factory->createForVersion(\PhpParser\PhpVersion::fromString('5.6'));

?>
