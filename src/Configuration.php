<?php

namespace NetsCore;

use InvalidArgumentException;

class Configuration
{
    private static Configuration $defaultConfiguration;

    protected array $apiKeys = [];
    protected array $apiKeyPrefixes = [];
    protected string $accessToken = '';
    protected string $username = '';
    protected string $password = '';
    protected string $debugFile = 'php://output';
    protected string $host;
    protected string $userAgent;
    protected string $tempFolderPath;
    protected bool $debug = false;


    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    public function setApiKey($apiKeyIdentifier, $key): Configuration
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;

        return $this;
    }

    public function getApiKey($apiKeyIdentifier): string|null
    {
        return $this->apiKeys[$apiKeyIdentifier] ?? null;
    }

    public function setApiKeyPrefix($apiKeyIdentifier, $prefix): Configuration
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;

        return $this;
    }

    public function getApiKeyPrefix($apiKeyIdentifier): string|null
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ?? null;
    }

    public function setAccessToken($accessToken): Configuration
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setUsername($username): Configuration
    {
        $this->username = $username;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setPassword($password): Configuration
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setHost($host): Configuration
    {
        $this->host = $host;

        return $this;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function setUserAgent($userAgent): Configuration
    {
        if (!is_string($userAgent)) {
            throw new InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;

        return $this;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setDebug($debug): Configuration
    {
        $this->debug = $debug;

        return $this;
    }

    public function getDebug(): bool
    {
        return $this->debug;
    }

    public function setDebugFile($debugFile): Configuration
    {
        $this->debugFile = $debugFile;

        return $this;
    }

    public function getDebugFile(): string
    {
        return $this->debugFile;
    }

    public function setTempFolderPath($tempFolderPath): Configuration
    {
        $this->tempFolderPath = $tempFolderPath;

        return $this;
    }

    public function getTempFolderPath(): string
    {
        return $this->tempFolderPath;
    }

    public function getDefaultConfiguration(): Configuration
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    public function setDefaultConfiguration(Configuration $configuration): Configuration
    {
        self::$defaultConfiguration = $configuration;

        return self::$defaultConfiguration;
    }

    public function toDebugReport(): string
    {
        $report = 'NetsCore Debug Report: ' . PHP_EOL;
        $report .= 'OS: ' . php_uname() . PHP_EOL;
        $report .= 'PHP VERSION: ' . PHP_VERSION . PHP_EOL;
        $report .= 'TEMP Folder PATH: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    public function getApiKeyWithPrefix($apiKeyIdentifier): string | null
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }
}