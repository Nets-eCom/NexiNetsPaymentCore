<?php

namespace NexiNetsCore\Clients;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use LogicException;
use NexiNetsCore\Enums\ApiUrlsEnum;
use NexiNetsCore\Exceptions\ApiResponseException;
use NexiNetsCore\Interfaces\APIClientInterface;
use NexiNetsCore\Interfaces\PaymentRequestInterface;
use NexiNetsCore\Interfaces\PaymentObjectInterface;
use NexiNetsCore\Services\LogsService;

class NetaxeptSandboxAPIClient implements APIClientInterface
{
    protected array $authData;
    private Client $httpClient;

    /**
     * @param array $authData
     * @param Client|null $client
     */
    public function __construct(array $authData, Client $client = null)
    {
        $this->authData   = $authData;
        $this->httpClient = $client ?: new Client();
    }

    /**
     * @param PaymentObjectInterface $paymentObject
     *
     * @return mixed
     * @throws ApiResponseException
     */
    public function createPayment(PaymentObjectInterface $paymentObject)
    {
        $request = new Request(
            'POST',
            ApiUrlsEnum::NETAXEPT_SANDBOX_PAYMENT_SERVICE,
            $this->generateHeader(),
            json_encode($paymentObject)
        );
        try {
            LogsService::getInstance()->info('Netaxept payment was created successfully (sandbox)', json_encode($paymentObject));
            $res = $this->httpClient->sendAsync($request)->wait();

            return $res->getBody();
        } catch (RequestException $e) {
            LogsService::getInstance()->error(
                'Netaxept payment was NOT created successfully (sandbox)',
                json_encode($e)
            );
            throw new ApiResponseException();
        }
    }

    /**
     * @param PaymentRequestInterface $authorizationObject
     *
     * @return mixed
     * @throws ApiResponseException
     */
    public function authorizePayment(PaymentRequestInterface $authorizationObject)
    {
        $request = new Request(
            'POST',
            ApiUrlsEnum::NETAXEPT_SANDBOX_PAYMENT_SERVICE . $authorizationObject->getPaymentId(
            ) . ApiUrlsEnum::NETAXEPT_API_PAYMENT_AUTHORIZATION,
            $this->generateHeader(),
            json_encode($authorizationObject->getBodyRequest())
        );
        try {
            LogsService::getInstance()->info(
                'Netaxept authorize payment (sandbox)',
                json_encode($authorizationObject)
            );
            $res = $this->httpClient->sendAsync($request)->wait();

            return $res->getBody();
        } catch (RequestException $e) {
            LogsService::getInstance()->error(
                'Netaxept authorize payment error (sandbox)',
                json_encode($e)
            );
            throw new ApiResponseException();
        }
    }

    /**
     * @param PaymentRequestInterface $paymentObject
     *
     * @return mixed
     * @throws ApiResponseException
     */
    public function cancelPayment(PaymentRequestInterface $paymentObject)
    {
        $request = new Request(
            'POST',
            ApiUrlsEnum::NETAXEPT_SANDBOX_PAYMENT_SERVICE . $paymentObject->getPaymentId(
            ) . ApiUrlsEnum::NETAXEPT_API_CANCEL,
            $this->generateHeader(),
            json_encode($paymentObject->getBodyRequest())
        );
        try {
            LogsService::getInstance()->error('Netaxept cancel Payment (sandbox)', json_encode($paymentObject));
            $res = $this->httpClient->sendAsync($request)->wait();

            return $res->getBody();
        } catch (RequestException $e) {
            LogsService::getInstance()->error(
                'Error on cancel Payment (sandbox)',
                json_encode($e)
            );
            throw new ApiResponseException();
        }
    }

    /**
     * @param PaymentRequestInterface $capturePayment
     *
     * @return mixed
     * @throws ApiResponseException
     */
    public function capturePayment(PaymentRequestInterface $capturePayment)
    {
        $request = new Request(
            'POST',
            ApiUrlsEnum::NETAXEPT_SANDBOX_PAYMENT_SERVICE . $capturePayment->getPaymentId(
            ) . ApiUrlsEnum::NETAXEPT_API_CAPTURE,
            $this->generateHeader(),
            json_encode($capturePayment->getBodyRequest())
        );
        try {
            $res = $this->httpClient->sendAsync($request)->wait();

            return $res->getBody();
        } catch (RequestException $e) {
            LogsService::getInstance()->error(
                'Error while capturing Payment (sandbox)',
                json_encode($e)
            );
            throw new ApiResponseException();
        }
    }

    /**
     * @param string $paymentId
     *
     * @return mixed
     * @throws ApiResponseException
     */
    public function getPaymentDetails(string $paymentId)
    {
        $request = new Request(
            'GET',
            ApiUrlsEnum::NETAXEPT_SANDBOX_PAYMENT_SERVICE . $paymentId,
            $this->generateHeader()
        );
        try {
            $res = $this->httpClient->sendAsync($request)->wait();

            return $res->getBody();
        } catch (RequestException $e) {
            LogsService::getInstance()->error('Get Payment details Error (sandbox)', json_encode($e));
            throw new ApiResponseException();
        }
    }

    /**
     * @param PaymentRequestInterface $refundObject
     *
     * @return mixed
     * @throws ApiResponseException
     */
    public function refundPayment(PaymentRequestInterface $refundObject)
    {
        $request = new Request(
            'POST',
            ApiUrlsEnum::NETAXEPT_SANDBOX_PAYMENT_SERVICE . $refundObject->getPaymentId(
            ) . ApiUrlsEnum::NETAXEPT_API_REFUND,
            $this->generateHeader(),
            json_encode($refundObject->getBodyRequest())
        );
        try {
            $res = $this->httpClient->sendAsync($request)->wait();

            return $res->getBody();
        } catch (RequestException $e) {
            LogsService::getInstance()->error('Refund Payment error (sandbox)', json_encode($e));
            throw new ApiResponseException();
        }
    }

    public function salePayment()
    {
        //TODO: Implement sale payment request
    }

    /**
     * @return string[]
     */
    private function generateHeader(): array
    {
        return [
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer ' . $this->authData['token'],
        ];
    }
}
