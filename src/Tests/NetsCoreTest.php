<?php

namespace NetsCore\Tests;

use Mockery\Adapter\Phpunit\MockeryTestCase;
use NetsCore\Dto\Netaxept\PaymentSummary;
use NetsCore\NetsCore;
use NetsCore\Interfaces\PaymentObjectInterface;
use NetsCore\Dto\Netaxept\Response\CreatePaymentResponseDto;
use NetsCore\Dto\Netaxept\Response\PaymentDetailResponseDto;
use NetsCore\Tests\TestHelper;

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

    /**@test**/
    public function testGetPaymentDetails(): void
    {
        //arrange
        $paymentId = TestHelper::PAYMENT_ID;
        $currencyCode=  TestHelper::CURRENCY_CODE;



        //Mock Object

        $paymentObjectInterfaceMock = \Mockery::mock(PaymentObjectInterface::class);

        $paymentDetailResponseDtoMock = \Mockery::mock(PaymentDetailResponseDto::class) -> makePartial();
        $paymentDetailResponseDtoMock -> paymentNumber =$paymentId;
        $paymentDetailResponseDtoMock -> currencyCode =$currencyCode ;

        //Assets
        $systemConfigServiceMock = \Mockery::mock(NetsCore::class);
        $systemConfigServiceMock->shouldReceive('getPaymentDetails')
            ->with($paymentId)
            ->andReturn($paymentDetailResponseDtoMock);

        $test = $systemConfigServiceMock->getPaymentDetails($paymentId);

        $this->assertNotNull($test);
        $this->assertEquals($paymentId,$test->paymentNumber);
        $this->assertEquals($currencyCode,$test->currencyCode);}


}
