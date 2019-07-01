<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Models;

use Phalcon\Mvc\Model\AbstractModel;

class Select extends AbstractModel
{
    public function initialize()
    {
        $this->setSource('ph_select');
    }

    public function getId()
    {
        return $this->sel_id;
    }

    public function getName()
    {
        return $this->sel_name;
    }

    public function getText()
    {
        return $this->sel_text;
    }

    public function setId($id)
    {
        $this->sel_id = $id;
    }

    public function setName($name)
    {
        $this->sel_name = $name;
    }

    public function setText($text)
    {
        $this->sel_text = $text;
    }
}
