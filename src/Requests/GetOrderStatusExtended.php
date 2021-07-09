<?php


namespace Stev\BTIPay\Requests;


use Exception;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Stev\BTIPay\Model\Order;
use Stev\BTIPay\Responses\GetOrderStatusExtendedResponse;
use Stev\BTIPay\Responses\RegisterResponse;
use Stev\BTIPay\Util\ErrorCodes;

class GetOrderStatusExtended extends BaseRequest implements GetOrderStatusExtendedRequestInterface
{

    protected $url = '/payment/rest/getOrderStatusExtended.do';

    /**
     * @param array $data
     * @return GetOrderStatusExtendedResponse
     * @throws GuzzleException
     */
    public function sendRequest(array $data)
    {
        try {
            $response = $this->client->request(
                'POST',
                $this->url,
                [
                    'headers' => [],
                    'form_params' => $data,
                ]
            );

            return $this->parseResponse($response);
        } catch (BadResponseException $e) {
            $response = new GetOrderStatusExtendedResponse();
            $response->setErrorCode(ErrorCodes::UNKNOWN);
            $response->setErrorMessage($e->getMessage());

            return $response;
        } catch (Exception $e) {
            $response = new GetOrderStatusExtendedResponse();
            $response->setErrorCode(ErrorCodes::UNKNOWN);
            $response->setErrorMessage($e->getMessage());

            return $response;
        }
    }

    /**
     * @param ResponseInterface $response
     * @return GetOrderStatusExtendedResponse
     */
    protected function parseResponse(ResponseInterface $response)
    {
        $responseBody = (string)$response->getBody();

//        unset($responseBody['merchantOrderParams']);
//        unset($responseBody['attributes']);
//        unset($responseBody['paymentAmountInfo']);
//        unset($responseBody['bankInfo']);
//        unset($responseBody['orderBundle']);
//        unset($responseBody['billingInfo']);
//        unset($responseBody['date']);
//        unset($responseBody['orderNumber']);
//        unset($responseBody['orderDescription']);
//        unset($responseBody['terminalId']);
//        unset($responseBody['currency']);
//        unset($responseBody['actionCodeDescription']);
//        unset($responseBody['amount']);
//        unset($responseBody['actionCode']);
//        unset($responseBody['orderStatus']);
//        unset($responseBody['errorMessage']);
//        var_dump(json_encode($responseBody));
        return $this->serializer->deserialize($responseBody, GetOrderStatusExtendedResponse::class, 'json');
    }


}