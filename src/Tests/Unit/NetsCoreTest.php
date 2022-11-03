<?php

namespace NetsCore\Tests;

use Mockery\Adapter\Phpunit\MockeryTestCase;
use NetsCore\Dto\Netaxept\Request\PaymentRequest;
use NetsCore\Dto\Netaxept\Response\AuthorizePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\PaymentDetailResponseDto;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\NetsCore;

class NetsCoreTest extends MockeryTestCase
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

        public function testCreatePayment(): void
    {
        $netsCoreMock = \Mockery::mock(NetsCore::class)->makePartial();
        $netsCoreMock->shouldAllowMockingProtectedMethods();
        $netsCoreMock->shouldReceive('getClient->createPayment')->with(PaymentObjectInterface::class)->andReturn(
            new CreatePaymentResponseDto()
        );

        $mockInterface=$this->createMock(PaymentObjectInterface::class);

        $this->assertInstanceOf(
            CreatePaymentResponseDto::class ,
            $netsCoreMock->createPayment($mockInterface)
        );
    }

}
