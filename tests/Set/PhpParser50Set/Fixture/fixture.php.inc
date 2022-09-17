<?php

namespace Rector\PhpParser\Tests\Set\PhpParser50Set\Fixture;

use PhpParser\Node\Expr\ArrayItem;

class UseArrayItem
{
    public function arrayItem(ArrayItem $arrayItem)
    {
    }
}

?>
-----
<?php

namespace Rector\PhpParser\Tests\Set\PhpParser50Set\Fixture;

use PhpParser\Node\Expr\ArrayItem;

class UseArrayItem
{
    public function arrayItem(\PhpParser\Node\ArrayItem $arrayItem)
    {
    }
}

?>
