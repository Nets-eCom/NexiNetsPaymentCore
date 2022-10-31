<?php

namespace NetsCore\Auth;

use NetsCore\Enums\ApiUrlsEnum;
use NetsCore\Interfaces\APIAuthServiceInterface;
use NetsCore\Interfaces\ConfigurationInterface;
use NetsCore\Services\ApiService;

class NetaxeptSandboxAPIAuthService implements APIAuthServiceInterface
{
    protected ConfigurationInterface $configuration;
    private ApiService $apiService;

    /**
     * @param ConfigurationInterface $configuration
     * @param ApiService|null $apiService
     */
    public function __construct(ConfigurationInterface $configuration, ApiService $apiService = null)
    {
        $this->apiService    = $apiService ?: new ApiService();
        $this->configuration = $configuration;
    }

    /**
     * @return mixed
     */
    public function authorize()
    {
        return $this->apiService->post(
            $this->configuration->getAuthUrl(),
            $this->generateHeaders(),
            $this->getOptions()
        );
    }

    /**
     * @return string[]
     */
    private function generateHeaders(): array
    {
        return [
            'Authorization' => 'Basic ' . base64_encode(
                    $this->configuration->getUsername() . ':' . $this->configuration->getPassword()
                ),
        ];
    }

    /**
     * @return array[]
     */
    private function getOptions(): array
    {
        return [
            'multipart' => [
                [
                    'name'     => 'grant_type',
                    'contents' => 'client_credentials',
                ],
                [
                    'name'     => 'scope',
                    'contents' => ApiUrlsEnum::NETAXEPT_SANDBOX_API_SCOPE_PAYMENT_SERVICE,
                ],
            ],
        ];
    }
}
