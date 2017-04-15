<?php

namespace Leaphly\Cart\Handler;

use Leaphly\Cart\Model\CartInterface;
use Leaphly\Cart\Model\ItemInterface;
use Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException;

/**
 * Interface that the ProductHandler must respect
 *
 * @author Giulio De Donato <liuggio@gmail.com>
 */
interface ItemHandlerInterface
{
    /**
     * @param CartInterface $cart
     * @param array         $parameters
     *
     * @return ItemInterface
     * @throws
     * @throws NotAcceptableHttpException
     *
     * @api
     */
    public function postItem(CartInterface $cart, array $parameters);

    /**
     * @param CartInterface $cart
     * @param ItemInterface $item
     * @param array         $parameters
     *
     * @return ItemInterface
     * @throws NotAcceptableHttpException
     *
     * @api
     */
    public function patchItem(CartInterface $cart, ItemInterface $item, array $parameters);

    /**
     * @param CartInterface $cart
     * @param ItemInterface $item
     *
     * @return CartInterface
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException
     *
     * @api
     */
    public function deleteItem(CartInterface $cart, ItemInterface $item);

}
