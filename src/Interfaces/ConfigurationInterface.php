<?php

namespace NetsCore\Interfaces;

interface ConfigurationInterface
{
    public function getClientType();
    public function getUsername();
    public function setUsername(string $username);
    public function getPassword();
    public function setPassword(string $password);
    public function getAuthUrl();

    public function getDebugLogDir();
    public function getDebugLogFile();
}
