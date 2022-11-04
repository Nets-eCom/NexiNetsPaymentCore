<?php

namespace NetsCore\Dto\Netaxept;

class PaymentTransactionCollection
{
    /**
     * @var PaymentTransaction[]
     */
    public array $transactions = [];

    /**
     * @param $transactionsArray
     *
     * @return $this
     * @throws \Exception
     */
    public function map($transactionsArray): PaymentTransactionCollection
    {
        if (empty($transactionsArray)) {
            return $this;
        }

        foreach ($transactionsArray as $transaction) {
            $this->transactions[] = (new PaymentTransaction())->map($transaction);
        }

        return $this;
    }

}
