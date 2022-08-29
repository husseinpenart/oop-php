<?php

class Calender
{
   public $name;

   public static $daysInFebruary = 28;
public function __construct(){
   self::$count++;
}
  public const MONTH_IN_YEAR = 12;
   public function getMonthsInYear(){
       return self::MONTH_IN_YEAR;
   }
}
$calender = new Calender();

$calender->name = "2022 Year";

//print $calender->name . PHP_EOL;
//print Calender::$daysInFebruary++;
//print $calender::$daysInFebruary . PHP_EOL;
print Calender::$count . PHP_EOL;
