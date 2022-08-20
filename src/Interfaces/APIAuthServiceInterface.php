<?php

namespace NetsCore\Interfaces;

interface APIAuthServiceInterface
{
    public function authorize();
    public function refreshToken();
}
