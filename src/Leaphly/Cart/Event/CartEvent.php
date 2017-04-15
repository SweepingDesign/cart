<?php

namespace Leaphly\Cart\Event;

use Symfony\Component\EventDispatcher\Event;
use Leaphly\Cart\Model\CartInterface;

class CartEvent extends Event implements CartEventInterface
{
    use CartEventTrait;

    public function __construct(CartInterface $cart, array $parameters = null)
    {
        $this->cart = $cart;
        $this->parameters = $parameters;
    }


}
