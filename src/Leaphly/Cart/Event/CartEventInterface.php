<?php
/**
 * Project: cart
 * User: dylan
 * Date: 4/14/2017
 * Time: 10:46 PM
 */

namespace Leaphly\Cart\Event;

use Leaphly\Cart\Model\CartInterface;

/**
 * The Cart Event
 *
 * @author Claudio D'Alicandro <claudio.dalicandro@gmail.com>
 */
interface CartEventInterface
{
    /**
     * @return CartInterface
     */
    public function getCart();

    /**
     * @return array
     */
    public function getParameters();

    /**
     * @param array $parameters
     */
    public function setParameters($parameters);
}
