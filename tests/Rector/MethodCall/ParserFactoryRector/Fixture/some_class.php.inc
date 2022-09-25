<?php

namespace Rector\PhpParser\Tests\Rector\MethodCall\ParserFactoryRector\Fixture;

use PhpParser\ParserFactory;

$factory = new ParserFactory;

$parser = $factory->create(ParserFactory::PREFER_PHP7);

?>
-----
<?php

namespace Rector\PhpParser\Tests\Rector\MethodCall\ParserFactoryRector\Fixture;

use PhpParser\ParserFactory;

$factory = new ParserFactory;

$parser = $factory->createForNewestSupportedVersion();

?>
