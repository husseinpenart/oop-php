<?php

class bid
{
    private $minimumBid = 5;
    private $bidAmount;


    public function setBidAMount($amount)
    {
        if ($amount < $this->minimumBid) {
            $this->bidAmount = $this->minimumBid;
            return;
        }
        $this->bidAmount = $amount;
    }


    public function getBidAmount()
    {
        return $this->bidAmount();
    }
}