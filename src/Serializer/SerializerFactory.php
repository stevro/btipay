<?php

namespace Stev\BTIPay\Serializer;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class SerializerFactory
{
    protected static ?Serializer $serializer = null;

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

    public static function serialize($object): string
    {
        return self::getSerializer()->serialize($object, 'json');
    }

    public static function deserialize($json, $class)
    {
        return self::getSerializer()->deserialize($json, $class, 'json');
    }
}