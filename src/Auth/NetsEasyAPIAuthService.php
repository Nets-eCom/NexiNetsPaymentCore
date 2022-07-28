<?php

namespace NetsCore\Auth;

use NetsCore\Configuration\NextAcceptConfiguration;
use NetsCore\Interfaces\APIAuthServiceInterface;

class NetsEasyAPIAuthService implements APIAuthServiceInterface
{
    protected NextAcceptConfiguration $configuration;

    public function __construct(NextAcceptConfiguration $configuration)
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