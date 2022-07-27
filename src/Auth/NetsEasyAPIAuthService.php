<?php

namespace NetsCore\Auth;

use NetsCore\Configuration;
use NetsCore\Interfaces\APIAuthServiceInterface;

class NetsEasyAPIAuthService implements APIAuthServiceInterface
{
    protected Configuration $configuration;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function authorize()
    {
        // TODO: Implement authorize() method.
    }

    public function refreshToken()
    {
        // TODO: Implement refreshToken() method.
    }
}