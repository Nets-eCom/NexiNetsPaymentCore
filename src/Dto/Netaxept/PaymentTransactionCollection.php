<?php

namespace NetsCore\Dto\Netaxept;

use Exception;

class PaymentTransactionCollection
{
    /**
     * @var PaymentTransaction[]
     */
    public array $transactions = [];

    /**
     * @param $transactionsArray
     *
     * @return PaymentTransactionCollection
     * @throws Exception
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
