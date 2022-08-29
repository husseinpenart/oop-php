<?php
class User {
    public $name;
    public $username;
    public $followerCount;
}
$garyObject = new User();
$garyObject->name = "Hussein Asadi";
$garyObject->username = "Husseinpenart";
$garyObject->followerCount = 50;

print_r($garyObject);
