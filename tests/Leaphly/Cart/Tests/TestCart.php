<?php

namespace Leaphly\Cart\Tests;

use JMS\Serializer\Annotation as Serializer;
use Leaphly\Cart\Model\Cart;

/**
 *
 * @author Giulio De Donato <liuggio@gmail.com>
 * @package Leaphly\Cart\Tests
 */
class TestCart extends Cart
{
    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @Serializer\VirtualProperty()
     * @return string
     */
    public function getDong()
    {
        return 'dong';
    }

}
