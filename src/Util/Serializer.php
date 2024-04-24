<?php

namespace Stev\BTIPay\Util;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;

class Serializer
{
    protected static ?\JMS\Serializer\Serializer $serializer = null;

    public static function getSerializer()
    {
        if (self::$serializer === null) {
            self::$serializer =
                SerializerBuilder::create()
                    ->setPropertyNamingStrategy(
                        new SerializedNameAnnotationStrategy(
                            new IdenticalPropertyNamingStrategy()
                        )
                    )
                    ->setSerializationContextFactory(
                        function () {
                            return SerializationContext::create()
                                ->setSerializeNull(false);
                        }
                    )
                    ->build();
        }

        return self::$serializer;
    }

    public static function serialize($object)
    {
        return self::getSerializer()->serialize($object, 'json');
    }

    public static function deserialize($json, $class)
    {
        return self::getSerializer()->deserialize($json, $class, 'json');
    }
}