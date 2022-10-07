<?php

namespace NetsCore\Tests;

use Mockery\Adapter\Phpunit\MockeryTestCase;
use NetsCore\Tests\TestHelper;
use NetsCore\Interfaces\PaymentObjectInterface;

class NetsCoreTest extends MockeryTestCase
{
    /**@test**/
    public function testCreatePayment(): void
    {
        //arrange
        $paymentId = TestHelper::paymentId;
        $paypageURL =  TestHelper::paypageURL;



        //Mock Object

        $paymentObjectInterfaceMock = \Mockery::mock(PaymentObjectInterface::class);

        $createPaymentResponseDtoMock = \Mockery::mock(CreatePaymentResponseDto::class) -> makePartial();
        $createPaymentResponseDtoMock -> paymentId =$paymentId;
        $createPaymentResponseDtoMock -> paypageURL =$paypageURL ;

       //Assets
        $systemConfigServiceMock = \Mockery::mock(NetsCore::class);
        $systemConfigServiceMock->shouldReceive('createPayment')
                                ->with($paymentObjectInterfaceMock)
                                ->andReturn($createPaymentResponseDtoMock);

        $test = $systemConfigServiceMock->createPayment($paymentObjectInterfaceMock);

        $this->assertEquals($paymentId,$test->paymentId);
        $this->assertEquals($paypageURL,$test->paypageURL);

    }
}
