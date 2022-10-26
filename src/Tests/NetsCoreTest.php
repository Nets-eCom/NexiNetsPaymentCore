<?php

namespace NetsCore\Tests;

use Mockery\Adapter\Phpunit\MockeryTestCase;
use NetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NetsCore\NetsCore;
use NetsCore\Tests\TestHelper;
use NetsCore\Interfaces\PaymentObjectInterface;

class NetsCoreTest extends MockeryTestCase
{
    /**@test**/
    public function testCreatePayment(): void
    {
        //arrange
        $paymentId = TestHelper::PAYMENT_ID;
        $payPageUrl = TestHelper::PAY_PAGE_URL;

        //Mock Object

        $paymentObjectInterfaceMock = \Mockery::mock(PaymentObjectInterface::class);

        $createPaymentResponseDtoMock = \Mockery::mock(CreatePaymentResponseDto::class) -> makePartial();
        $createPaymentResponseDtoMock -> paymentId =$paymentId;
        $createPaymentResponseDtoMock -> payPageUrl =$payPageUrl ;

        //Assets
        $systemConfigServiceMock = \Mockery::mock(NetsCore::class);
        $systemConfigServiceMock->shouldReceive('createPayment')
            ->with($paymentObjectInterfaceMock)
            ->andReturn($createPaymentResponseDtoMock);

        $test = $systemConfigServiceMock->createPayment($paymentObjectInterfaceMock);

        $this->assertEquals($paymentId,$test->paymentId);
        $this->assertEquals($payPageUrl,$test->payPageUrl);

    }

}
