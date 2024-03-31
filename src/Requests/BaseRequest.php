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
    public const BASE_URL_PROD = 'https://ecclients.btrl.ro';

    public const BASE_URL_TEST = 'https://ecclients-sandbox.btrl.ro';

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    protected $baseUrl = self::BASE_URL_PROD;

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
                'base_uri' => ($isTest === true ? self::BASE_URL_TEST : self::BASE_URL_PROD),
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