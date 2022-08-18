<?php

namespace NetsCore\Configuration;

use NetsCore\Enums\ApiUrlsEnum;
use NetsCore\Enums\ClientTypeEnum;
use NetsCore\Interfaces\ConfigurationInterface;

class NextAcceptConfiguration implements ConfigurationInterface
{
    protected string $clientType = ClientTypeEnum::NEXT_ACCEPT;
    private string $username;
    private string $password;

    /**
     * @return string
     */
    public function getClientType(): string
    {
        return $this->clientType;
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param  string  $username
     * @return $this
     */
    public function setUsername(string $username): NextAcceptConfiguration
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param  string  $password
     * @return $this
     */
    public function setPassword(string $password): NextAcceptConfiguration
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthUrl(): string
    {
        return ApiUrlsEnum::NEXT_ACCEPT_O_AUTH_AUTHORIZATION;
    }

    /**
     * @return string
     */
    public function getDebugLogDir(): string
    {
        return 'logs';
    }

    /**
     * @return string
     */
    public function getDebugLogFile(): string
    {
        return 'debug.log';
    }
}
