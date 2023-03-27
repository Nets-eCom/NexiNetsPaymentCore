<?php

namespace NexiNetsCore\Services;

use NexiNetsCore\Interfaces\APIAuthServiceInterface;
use NexiNetsCore\Interfaces\ConfigurationInterface;

class AuthService
{
    protected APIAuthServiceInterface $APIAuthService;
    private ConfigurationInterface $configuration;
    private array $authData;

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
     * @return void
     */
    public function authorize()
    {
        $this->authData = json_decode($this->APIAuthService->authorize(), true);
        LogsService::getInstance()->info('Authorize object', json_encode($this->authData));
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
