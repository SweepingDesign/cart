<?php
/**
 * Project: cart
 * User: dylan
 * Date: 4/15/2017
 * Time: 10:05 AM
 */

namespace Leaphly\Cart\Listener;


use JMS\Serializer\EventDispatcher\Events;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;
use Leaphly\Cart\Model\Item;

class ItemStrategySerializerListener implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            ['event' => Events::PRE_SERIALIZE, 'method' => 'onPreSerialize'],
            ['event' => Events::PRE_DESERIALIZE, 'method' => 'onPreDeserialize'],
            ['event' => Events::POST_SERIALIZE, 'method' => 'onPostSerialize']
        ];
    }

    /**
     * @param PreSerializeEvent $event
     */
    public function onPreSerialize(PreSerializeEvent $event)
    {
        $object = $event->getObject();
        if (is_object($object) &&
            is_subclass_of($object, Item::class) &&
            get_class($object) !== $event->getType()['name']
        ) {
            $event->setType(get_class($object));
        }
    }
    public function onPostSerialize(ObjectEvent $event)
    {
    }

    public function onPreDeserialize(PreDeserializeEvent $event)
    {
        $object = $event->getData();
        $type = $event->getType();
        $context = $event->getContext();
    }
}
