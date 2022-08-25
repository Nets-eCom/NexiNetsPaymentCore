<?php

namespace NetsCore\Auth;

use NetsCore\Configuration\NetaxeptConfiguration;
use NetsCore\Interfaces\APIAuthServiceInterface;

class NetsEasyAPIAuthService implements APIAuthServiceInterface
{
    protected NetaxeptConfiguration $configuration;

    /**
     * @param  NetaxeptConfiguration  $configuration
     */
    public function __construct(NetaxeptConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function authorize()
    {
        // TODO: Implement authorize() method.
    }
}
