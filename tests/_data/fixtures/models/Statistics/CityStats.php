<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Models\Statistics;

use Phalcon\Mvc\Model\AbstractModel;

class CityStats extends AbstractModel
{
    public function initialize()
    {
        $this->setSource('stats');
    }
}
