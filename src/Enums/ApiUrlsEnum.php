<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class ApiUrlsEnum extends Enum
{
    const NEXT_ACCEPT_PAYMENT_SERVICE = 'https://unifiedapi.netsdev.eu/api/v1/Payments/';
    const NEXT_ACCEPT_O_AUTH_AUTHORIZATION = 'https://login.microsoftonline.com/2b8c81c1-69c3-4fcd-9de2-4579ced9d137/oauth2/v2.0/token';
    const NEXT_ACCEPT_API_SCOPE_PAYMENT_SERVICE = 'https://unifiedcommercedev.onmicrosoft.com/unifiedapi/paymentservice/.default';
    const NEXT_ACCEPT_API_CANCEL = '/Cancel';
    const NEXT_ACCEPT_API_CAPTURE = '/Capture';


    const NETS_EASY_O_AUTH_AUTHORIZATION = '';
}
