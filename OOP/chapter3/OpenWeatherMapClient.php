<?php
require_once 'WhetherApiClientInterface.php';

class OpenWeatherMapClient implements WhetherApiClientInterface
{
    public function getForeCast( $city)
    {
        return " it is raining" . $city;
    }
}