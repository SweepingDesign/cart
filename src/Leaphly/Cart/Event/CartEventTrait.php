<?php
/**
 * Project: cart
 * User: dylan
 * Date: 4/14/2017
 * Time: 11:09 PM
 */

namespace Leaphly\Cart\Event;


trait CartEventTrait
{

    /**
     * @var \Leaphly\Cart\Model\CartInterface
     */
    protected $cart;

    /**
     * @var array
     */
    protected $parameters;

    public function getCart()
    {
        return $this->cart;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

}
