<?php

namespace NetsCore\Configuration;

use NetsCore\Enums\ApiUrlsEnum;
use NetsCore\Enums\ClientTypeEnum;
use NetsCore\Interfaces\ConfigurationInterface;

class NextAcceptConfiguration implements ConfigurationInterface
{
    protected string $clientType = ClientTypeEnum::NextAccept;
    private string $username;
    private string $password;


    public function getClientType(): string
    {
        return $this->clientType;
    }


    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): NextAcceptConfiguration
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): NextAcceptConfiguration
    {
        $this->password = $password;

        return $this;
    }

    public function getAuthUrl(): string
    {
        return ApiUrlsEnum::NextAcceptOAuthAuthorization;
    }

    public function getDebugLogDir(): string
    {
        return 'logs';
    }

    public function getDebugLogFile(): string
    {
        return 'debug.log';
    }
}