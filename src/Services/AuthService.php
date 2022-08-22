<?php

namespace NetsCore\Services;

use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;

class AuthService
{
    protected APIAuthServiceInterface $APIAuthService;
    private ConfigurationInterface $configuration;
    private array $authData;
    private LogsService $logg;

    /**
     * @param  ConfigurationInterface  $configuration
     * @param  APIAuthServiceInterface  $authService
     */
    public function __construct(ConfigurationInterface $configuration, APIAuthServiceInterface $authService)
    {
        $this->APIAuthService = $authService;
        $this->configuration = $configuration;
        $this->authorize();
    }

    /**
     *
     */
    public function authorize()
    {
        $this->authData = json_decode($this->APIAuthService->authorize(), true);
        LogsService::logger(json_encode($this->authData));
    }

    /**
     * @return array
     */
    public function getAuthData(): array
    {
        return [
            'token' => $this->authData['access_token']
        ];
    }
}
