<?php


namespace Stev\BTIPay\Requests;


use GuzzleHttp\Client;
use JMS\Serializer\SerializerInterface;
use Stev\BTIPay\Serializer\SerializerFactory;

class BaseRequest
{
    public const BASE_URL_PROD = 'https://ecclients.btrl.ro';

    public const BASE_URL_TEST = 'https://ecclients-sandbox.btrl.ro';

    /**
     * @var Client
     */
    protected Client $client;

    /**
     * @var SerializerInterface
     */
    protected SerializerInterface $serializer;

    protected string $baseUrl = self::BASE_URL_PROD;

    /**
     * Register constructor.
     */
    public function __construct($isTest = true)
    {
        $this->init($isTest);
    }

    protected function init($isTest = true): void
    {
        $this->client = new Client(
            [
                'base_uri' => ($isTest === true ? self::BASE_URL_TEST : self::BASE_URL_PROD),
                'verify' => !$isTest,
            ]
        );

        $this->serializer = SerializerFactory::getSerializer();
    }

}