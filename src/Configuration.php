<?php

namespace NetsCore;

use NetsCore\Clients\BaseAPIClient;
use NetsCore\Enums\ClientType;

class Configuration
{
    private static Configuration $defaultConfiguration;

    protected string $clientType;
    protected array $apiKeys = [];
    protected array $apiKeyPrefixes = [];
    protected string $accessToken = '';
    protected string $username = '';
    protected string $password = '';
    protected string $authenticationLink = '';
    protected string $debugFile = 'php://output';
    protected string $debugLogDir = 'logs';
    protected string $debugLogFile = 'debug.log';
    protected string $userAgent;
    protected string $tempFolderPath;
    protected bool $debug = false;


    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    public function setClientType(string $clientType): Configuration
    {
        $this->clientType = $clientType;

        return $this;
    }

    public function getClientType(): string
    {
        return $this->clientType;
    }

    public function setApiKey(string $apiKeyIdentifier, string $key): Configuration
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;

        return $this;
    }

    public function getApiKey(string $apiKeyIdentifier): ?string
    {
        return $this->apiKeys[$apiKeyIdentifier] ?? null;
    }

    public function setApiKeyPrefix(string $apiKeyIdentifier, string $prefix): Configuration
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;

        return $this;
    }

    public function getApiKeyPrefix(string $apiKeyIdentifier): ?string
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ?? null;
    }

    public function setAccessToken(string $accessToken): Configuration
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setUsername(string $username): Configuration
    {
        $this->username = $username;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setPassword(string $password): Configuration
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setUserAgent(string $userAgent): Configuration
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setDebug(string $debug): Configuration
    {
        $this->debug = $debug;

        return $this;
    }

    public function getDebug(): bool
    {
        return $this->debug;
    }

    public function setDebugFile(string $debugFile): Configuration
    {
        $this->debugFile = $debugFile;

        return $this;
    }

    public function getDebugFile(): string
    {
        return $this->debugFile;
    }

    public function setTempFolderPath(string $tempFolderPath): Configuration
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

    public function getApiKeyWithPrefix(string $apiKeyIdentifier): ?string
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

    public function getAuthenticationLink(): string
    {
        return $this->authenticationLink;
    }

    public function setAuthenticationLink(string $authenticationLink): Configuration
    {
        $this->authenticationLink = $authenticationLink;

        return $this;
    }

    /**
     * @return string
     */
    public function getDebugLogFile(): string
    {
        return $this->debugLogFile;
    }

    /**
     * @param string $debugLogFile
     * @return Configuration
     */
    public function setDebugLogFile(string $debugLogFile): Configuration
    {
        $this->debugLogFile = $debugLogFile;

        return $this;
    }

    /**
     * @return string
     */
    public function getDebugLogDir(): string
    {
        return $this->debugLogDir;
    }

    /**
     * @param string $debugLogDir
     * @return Configuration
     */
    public function setDebugLogDir(string $debugLogDir): Configuration
    {
        $this->debugLogDir = $debugLogDir;

        return $this;
    }
}