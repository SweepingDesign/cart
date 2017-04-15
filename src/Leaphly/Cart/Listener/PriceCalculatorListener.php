<?php

namespace Leaphly\Cart\Listener;

use Leaphly\Cart\Calculator\PriceCalculatorInterface;
use Leaphly\Cart\Event\CartEventInterface;

/**
 * Listener that calculate the price when Cart or Item are modified.
 *
 * @author Giulio De Donato <liuggio@gmail.com>
 */
class PriceCalculatorListener
{
    /**
     * @var string
     */
    private $class;

    /**
     * @var \Leaphly\Cart\Calculator\PriceCalculatorInterface
     */
    private $priceCalculator;

    /**
     * @param PriceCalculatorInterface $priceCalculator
     * @param string                   $class
     */
    public function __construct(PriceCalculatorInterface $priceCalculator, $class = 'Leaphly\Cart\Model\CartInterface')
    {
        $this->class = $class;
        $this->priceCalculator = $priceCalculator;
    }

    /**
     * Calculate the cart price.
     *
     * @param CartEventInterface $event
     */
    public function calculatePrice(CartEventInterface $event)
    {
        $this->priceCalculator->calculatePrice($event->getCart());
    }
}
