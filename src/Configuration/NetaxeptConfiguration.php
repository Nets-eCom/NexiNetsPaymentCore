<?php

namespace NexiNetsCore\Configuration;

use NexiNetsCore\Enums\ApiUrlsEnum;
use NexiNetsCore\Enums\ClientTypeEnum;
use NexiNetsCore\Interfaces\ConfigurationInterface;

class NetaxeptConfiguration implements ConfigurationInterface
{
    protected string $clientType = ClientTypeEnum::NETAXEPT;
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
    public function setUsername(string $username): NetaxeptConfiguration
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
    public function setPassword(string $password): NetaxeptConfiguration
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthUrl(): string
    {
        return ApiUrlsEnum::NETAXEPT_O_AUTH_AUTHORIZATION;
    }
}
