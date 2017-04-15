<?php

namespace Leaphly\Cart\Tests;

use JMS\Serializer\Annotation as Serializer;
use Leaphly\Cart\Model\Cart;
use Leaphly\Cart\Model\Item;
use Leaphly\Cart\Model\ItemInterface;
use Leaphly\Cart\Model\ItemTrait;

/**
 *
 * @author Dylan Oliver <dylan@sweepingdesign.com>
 * @package Leaphly\Cart\Tests
 */
class TestCartItem extends Item
{
//    use ItemTrait;

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}
