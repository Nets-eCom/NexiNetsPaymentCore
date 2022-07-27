<?php

namespace NetsCore\Services;

use NetsCore\Configuration;
use NetsCore\Interfaces\APIAuthServiceInterface;

class AuthService
{
    protected APIAuthServiceInterface $APIAuthService;

    public function __construct(Configuration $configuration, APIAuthServiceInterface $authService)
    {
        $this->APIAuthService = $authService;
    }

    public function authorize() {

    }

    public function getAuthData(): array {
        return [];
    }
}