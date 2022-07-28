<?php

namespace NetsCore\Services;

use NetsCore\Configuration\NextAcceptConfiguration;
use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;

class AuthService
{
    protected APIAuthServiceInterface $APIAuthService;
    private ConfigurationInterface $configuration;

    public function __construct(ConfigurationInterface $configuration, APIAuthServiceInterface $authService)
    {
        $this->APIAuthService = $authService;
        $this->configuration = $configuration;
        $this->logg = new LogsService($configuration);
        $this->authorize();
    }

    public function authorize() {
        $authData = json_decode($this->APIAuthService->authorize(), true);
        $this->logg->logger(json_encode($authData), []);
    }

    public function refreshToken() {

    }

    public function getAuthData(): array {
        return [];
    }
}