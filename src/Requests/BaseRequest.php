<?php


namespace Stev\BTIPay\Requests;


use GuzzleHttp\Client;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

class BaseRequest
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    protected $baseUrl = 'https://ecclients.btrl.ro';

    /**
     * Register constructor.
     */
    public function __construct($isTest = true)
    {
        $this->init($isTest);
    }

    protected function init($isTest = true)
    {
        $this->client = new Client(
            [
                'base_uri' => ($isTest === true ? $this->baseUrl.':5443' : $this->baseUrl),
                'verify' => !$isTest,
            ]
        );

        $this->serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
            ->setSerializationContextFactory(
                function () {
                    return SerializationContext::create()
                        ->setSerializeNull(false);
                }
            )
            ->build();
    }

}