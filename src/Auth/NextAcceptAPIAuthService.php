<?php

namespace NetsCore\Auth;

use NetsCore\Enums\ApiUrls;
use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;
use NetsCore\Services\ApiService;

class NextAcceptAPIAuthService implements APIAuthServiceInterface
{

    protected ConfigurationInterface $configuration;
    private ApiService $apiService;

    public function __construct(ConfigurationInterface $configuration, ApiService $apiService = null)
    {
        $this->apiService = $apiService ?: new ApiService();
        $this->configuration = $configuration;
    }

    public function authorize()
    {
        return $this->apiService->post($this->configuration->getAuthUrl(), $this->generateHeaders(), $this->getOptions());
    }

    public function refreshToken()
    {
        // TODO: Implement refreshToken() method.
    }

    private function generateHeaders(): array
    {
        return [
            'Authorization' => 'Basic ' . base64_encode($this->configuration->getUsername() . ':' . $this->configuration->getPassword()),
        ];
    }

    private function getOptions(): array
    {
        return [
            'multipart' => [
                [
                    'name' => 'grant_type',
                    'contents' => 'client_credentials'
                ],
                [
                    'name' => 'scope',
                    'contents' => ApiUrls::NextAcceptApiScopePaymantService
                ]
            ]
        ];
    }
}