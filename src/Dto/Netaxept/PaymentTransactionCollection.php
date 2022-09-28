<?php

namespace NetsCore\Dto\Netaxept;

class PaymentTransactionCollection
{
    /**
     * @var PaymentTransaction[]
     */
    public array $transactions = [];

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
