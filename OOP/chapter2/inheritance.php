<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require './premuimCheckingAccount.php';
$premuimCheckingaccount = new  premuimCheckingAccount();
$premuimCheckingaccount->minimumBalance . '<br>';
$premuimCheckingaccount->deposit(20);
$premuimCheckingaccount->withDraw(50);
$premuimCheckingaccount->transfer(1000)

?>
</body>
</html>