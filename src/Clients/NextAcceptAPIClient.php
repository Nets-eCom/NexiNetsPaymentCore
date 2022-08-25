<?php

namespace NetsCore\Clients;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use NetsCore\Dto\NextAccept\Request\Transformer\AuthorizePaymentRequestTransformer;
use NetsCore\Enums\ApiUrlsEnum;
use NetsCore\Interfaces\APIClientInterface;
use NetsCore\Interfaces\PaymentObjectInterface;

class NextAcceptAPIClient implements APIClientInterface
{
    protected array $authData;
    private Client $httpClient;

    /**
     * @param  array  $authData
     * @param  Client|null  $client
     */
    public function __construct(array $authData, Client $client = null)
    {
        $this->authData = $authData;
        $this->httpClient = $client ?: new Client();
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject)
    {
        $request = new Request('POST', ApiUrlsEnum::NEXT_ACCEPT_PAYMENT_SERVICE, $this->generateHeader(), json_encode($paymentObject));
        $res = $this->httpClient->sendAsync($request)->wait();

        return $res->getBody();
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function authorizePayment(PaymentObjectInterface  $paymentObject)
    {
        $bodyRequest = new AuthorizePaymentRequestTransformer();
        $request = new Request('POST', ApiUrlsEnum::NEXT_ACCEPT_PAYMENT_SERVICE. $paymentObject->getPaymentId() . ApiUrlsEnum::NEXT_ACCEPT_API_PAYMENT_AUTHORIZATION, $this->generateHeader(), json_encode($bodyRequest->transformFromObject($paymentObject)));
        $res = $this->httpClient->sendAsync($request)->wait();
        return $res->getBody();
    }

    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function cancelPayment(PaymentObjectInterface  $paymentObject)
    {
        $request = new Request('POST', ApiUrlsEnum::NEXT_ACCEPT_PAYMENT_SERVICE. $paymentObject->getPaymentId() . ApiUrlsEnum::NEXT_ACCEPT_API_PAYMENT_CANCEL, $this->generateHeader(), json_encode($paymentObject));
        $res = $this->httpClient->sendAsync($request)->wait();
        return $res->getBody();
    }

    public function capturePayment()
    {
        //TODO: Implement capture payment request
    }

    public function getPaymentDetails()
    {
        //TODO: Implement get  payment details request
    }

    public function refundPayment()
    {
        //TODO: Implement refund payment request
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
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->authData['token']
        ];
    }
}
