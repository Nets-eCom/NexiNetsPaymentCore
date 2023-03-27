<?php

namespace NexiNetsCore\Interfaces;

interface ConfigurationInterface
{
    /**
     * @return mixed
     */
    public function getClientType();

    /**
     * @return mixed
     */
    public function getUsername();

    /**
     * @param string $username
     *
     * @return mixed
     */
    public function setUsername(string $username);

    /**
     * @return mixed
     */
    public function getPassword();

    /**
     * @param string $password
     *
     * @return mixed
     */
    public function setPassword(string $password);

    /**
     * @return mixed
     */
    public function getAuthUrl();
}
