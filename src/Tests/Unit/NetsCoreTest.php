<?php

namespace NexiNetsCore\Tests;

use Mockery\Adapter\Phpunit\MockeryTestCase;
use NexiNetsCore\Dto\Netaxept\Request\PaymentRequest;
use NexiNetsCore\Dto\Netaxept\Response\AuthorizePaymentResponseDto;
use NexiNetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NexiNetsCore\Dto\Netaxept\Response\PaymentDetailResponseDto;
use NexiNetsCore\Interfaces\PaymentObjectInterface;
use NexiNetsCore\NexiNetsCore;

class NexiNetsCoreTest extends MockeryTestCase
{
    public function testAuthorizePayment(): void
    {
        $netsCoreMock = \Mockery::mock(NetsCore::class)->makePartial();
        $netsCoreMock->shouldAllowMockingProtectedMethods();
        $netsCoreMock->shouldReceive('getClient->authorizePayment')->with(PaymentRequest::class)->andReturn(
            new AuthorizePaymentResponseDto()
        );

        $this->assertInstanceOf(
            AuthorizePaymentResponseDto::class,
            $netsCoreMock->authorizePayment(new PaymentRequest())
        );
    }
    public function testGetPaymentDetails(): void
    {
        $paymentId = TestHelper::paymentId;
        $netsCoreMock = \Mockery::mock(NetsCore::class)->makePartial();
        $netsCoreMock->shouldAllowMockingProtectedMethods();
        $netsCoreMock->shouldReceive('getClient->getPaymentDetails')->with($paymentId)->andReturn(
            new PaymentDetailResponseDto()
        );

        $this->assertInstanceOf(
            PaymentDetailResponseDto::class,
            $netsCoreMock->getPaymentDetails($paymentId)
        );
    }
}
