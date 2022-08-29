<?php

class Account
{
    public $accountNumber;
    public $balance;

    public function deposit($amount)
    {
        echo "Depositing" . $amount . '<br>';
    }

    public function withDraw($amount)
    {
        echo "withDraw" . $amount . '<br>';
    }

    public function getbalance()
    {
        return $this->balance;
    }
}