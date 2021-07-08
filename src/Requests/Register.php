<?php

namespace Stev\BTIPay\Requests;

use Exception;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Stev\BTIPay\Model\Order;
use Stev\BTIPay\Responses\RegisterResponse;
use Stev\BTIPay\Util\ErrorCodes;

class Register extends BaseRequest
{

    protected $url = '/payment/rest/register.do';

    /**
     * @param Order $order
     * @return RegisterResponse
     * @throws GuzzleException
     */
    public function sendRequest(Order $order)
    {
        $orderJson = $this->serializer->serialize($order, 'json');

        $requestData = $this->serializer->deserialize($orderJson, 'array', 'json');

        $requestData['orderBundle'] = $this->serializer->serialize($order->getOrderBundle(), 'json');
        $requestData['jsonParams'] = $this->serializer->serialize($order->getJsonParams(), 'json');

        try {
            $response = $this->client->request(
                'POST',
                $this->url,
                [
                    'headers' => [],
                    'form_params' => $requestData,
                ]
            );

            return $this->parseResponse($response);
        } catch (BadResponseException $e) {
            $response = new RegisterResponse();
            $response->setErrorCode(ErrorCodes::UNKNOWN);
            $response->setErrorMessage($e->getMessage());

            return $response;
        } catch (Exception $e) {
            $response = new RegisterResponse();
            $response->setErrorCode(ErrorCodes::UNKNOWN);
            $response->setErrorMessage($e->getMessage());

            return $response;
        }
    }

    /**
     * @param ResponseInterface $response
     * @return RegisterResponse
     */
    protected function parseResponse(ResponseInterface $response)
    {
        $responseBody = (string)$response->getBody();

        return $this->serializer->deserialize($responseBody, RegisterResponse::class, 'json');
    }


}