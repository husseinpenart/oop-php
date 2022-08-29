<?php

class Reservation
{
    private $host = "Host Class";
    private  $guest = "Guest Class";
    public function cancel(){
        $this->sendCancellationNotification();
        $this->refundGuest();
    }

    private function sendCancellationNotification()
    {
        echo "Sending notification to " . $this->host . '<br>';
    }

    private function refundGuest()
    {
        echo "Refunding" . $this->guest . '<br>';
    }
}