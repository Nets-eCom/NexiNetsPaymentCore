<?php

namespace NexiNetsCore\Configuration;

use NexiNetsCore\Enums\ApiUrlsEnum;
use NexiNetsCore\Enums\ClientTypeEnum;
use NexiNetsCore\Interfaces\ConfigurationInterface;

class NetaxeptSandboxConfiguration implements ConfigurationInterface
{
    protected string $clientType = ClientTypeEnum::NETAXEPT_SANDBOX;
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
     * @param string $username
     *
     * @return $this
     */
    public function setUsername(string $username): NetaxeptSandboxConfiguration
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
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password): NetaxeptSandboxConfiguration
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthUrl(): string
    {
        return ApiUrlsEnum::NETAXEPT_SANDBOX_O_AUTH_AUTHORIZATION;
    }
}
