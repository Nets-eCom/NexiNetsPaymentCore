<?php

namespace NetsCore\Enums;

use MyCLabs\Enum\Enum;

class ApiUrlsEnum extends Enum
{
    const NETAXEPT_PAYMENT_SERVICE = 'https://unifiedapi.netsdev.eu/api/v1/Payments/';
    const NETAXEPT_O_AUTH_AUTHORIZATION = 'https://login.microsoftonline.com/2b8c81c1-69c3-4fcd-9de2-4579ced9d137/oauth2/v2.0/token';
    const NETAXEPT_API_SCOPE_PAYMENT_SERVICE = 'https://unifiedcommercedev.onmicrosoft.com/unifiedapi/paymentservice/.default';
    const NETAXEPT_API_CANCEL = '/Cancel';
    const NETAXEPT_API_CAPTURE = '/Capture';


    const NETS_EASY_O_AUTH_AUTHORIZATION = '';
}
