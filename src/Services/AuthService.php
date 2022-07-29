<?php

namespace NetsCore\Services;

use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;

class AuthService
{
    protected APIAuthServiceInterface $APIAuthService;
    private ConfigurationInterface $configuration;
    private array $authData;

    public function __construct(ConfigurationInterface $configuration, APIAuthServiceInterface $authService)
    {
        $this->APIAuthService = $authService;
        $this->configuration = $configuration;
        $this->logg = new LogsService($configuration);
        $this->authorize();
    }

    public function authorize() {
        $this->authData = json_decode($this->APIAuthService->authorize(), true);
        $this->logg->logger(json_encode($this->authData), []);
    }

    public function refreshToken() {

    }

    public function getAuthData(): array {
        return [
            'token' => $this->authData['access_token']
        ];
    }
}