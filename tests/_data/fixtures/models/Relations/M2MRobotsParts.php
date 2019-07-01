<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Models\Relations;

use Phalcon\Mvc\Model\AbstractModel;

class M2MRobotsParts extends AbstractModel
{
    public function initialize()
    {
        $this->setSource('m2m_robots_parts');
    }
}
