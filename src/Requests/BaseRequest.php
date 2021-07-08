<?php


namespace Stev\BTIPay\Requests;


use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;
use Stev\BTIPay\Model\Order;

abstract class BaseRequest implements RequestInterface
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

        $this->serializer = SerializerBuilder::create()->build();
    }

    abstract public function sendRequest(Order $order);

    abstract protected function parseResponse(ResponseInterface $response);

}