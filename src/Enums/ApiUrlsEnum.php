<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class ApiUrlsEnum extends Enum
{
    const NextAcceptPaymentService = 'https://unifiedapi.netsdev.eu/api/v1/Payments/';
    const NextAcceptOAuthAuthorization = 'https://login.microsoftonline.com/2b8c81c1-69c3-4fcd-9de2-4579ced9d137/oauth2/v2.0/token';
    const NextAcceptApiScopePaymantService = 'https://unifiedcommercedev.onmicrosoft.com/unifiedapi/paymentservice/.default';


    const NetsEasyOAuthAuthorization = '';
}