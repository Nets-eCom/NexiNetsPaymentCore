<?php

namespace NexiNetsCore\Dto\Netaxept\Response;

class CapturePaymentResponseDto
{
    public string $paymentId;
    public string $transactionRef;
    public string $type;
    public string $title;
    public string $status;
    public string $instance;
    public array $problems = [];

    /**
     * @param $data
     *
     * @return CapturePaymentResponseDto
     */
    public function map($data): CapturePaymentResponseDto
    {
        $data = json_decode($data);
        if (isset($data->paymentId)) {
            $this->paymentId = $data->paymentId;
        }
        if (isset($data->transactionRef)) {
            $this->transactionRef = $data->transactionRef;
        }
        if (isset($data->type)) {
            $this->type = $data->type;
        }
        if (isset($data->title)) {
            $this->title = $data->title;
        }
        if (isset($data->status)) {
            $this->status = $data->status;
        }
        foreach ($data as $key => $value) {
            if (preg_match('/additional/i', $key) !== false) {
                $this->problems += [$key => $value];
            }
        }
        return $this;
    }
}
