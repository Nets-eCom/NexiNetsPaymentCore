<?php

namespace NetsCore\Dto\NextAccept\Response;

class CapturePaymentResponseDto
{
    public string $paymentId;
    public string $type;
    public string $title;
    public string $status;
    public string $instance;
    public array $problems;

    public function map($data): CapturePaymentResponseDto
    {
        $data = json_decode($data);
        if(isset($data->paymentId)) {
            $this->paymentId = $data->paymentId;
        }
        if(isset($data->type)){
            $this->type = $data->type;
        }
        if(isset($data->title)){
            $this->title = $data->title;
        }
        if(isset($data->status)){
            $this->status = $data->status;
        }
        foreach ($data as $key=>$value) {
            if(preg_match('/additional/i', $key)!== false) {
                $this->problems += [$key=>$value];
            }
        }
        return $this;
    }
}