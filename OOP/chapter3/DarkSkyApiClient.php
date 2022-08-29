<?php
require_once 'WhetherApiClientInterface.php';

class DarkSkyApiClient implements WhetherApiClientInterface
{
    public function getForeCast($city)
    {
        return " it is raining" . $city;
    }
}