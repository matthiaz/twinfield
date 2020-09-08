<?php

namespace PhpTwinfield\Enums;

use MyCLabs\Enum\Enum;

/**

 * @method static BrowseColumnOperator::NONE()
 * @method static BrowseColumnOperator::EQUAL()
 * @method static BrowseColumnOperator::BETWEEN()
   @method static BrowseColumnOperator::LIKE()
 */
class BrowseColumnOperator extends Enum
{
    const NONE = 'none';
    const EQUAL = 'equal';
    const BETWEEN = 'between';
    const LIKE = 'like';
}
