<?php

namespace NetsCore;

use Exception;

class ApiException extends Exception
{
    protected ?string $responseBody;
    protected ?array $responseHeaders;
    protected ?object $responseObject;

    public function __construct(string $message = "", int $code = 0, array $responseHeaders = [], ?object $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    public function getResponseHeaders(): ?array
    {
        return $this->responseHeaders;
    }

    public function getResponseBody(): ?object
    {
        return $this->responseBody;
    }

    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    public function getResponseObject(): ?object
    {
        return $this->responseObject;
    }
}