<?php

namespace NetsCore;

use GuzzleHttp\ClientInterface;

class NetsCore
{
    private ClientInterface $client;
    private Configuration $configuration;
}