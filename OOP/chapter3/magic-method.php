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
     require 'Connection.php';
     $connection1 = new Connection();
     $connection1->setConnectionID(('127.0.0.1'));




 ?>
<p><?php echo "The number of connection is" . $connection1->getCount()?></p>
<p><?php echo "The number of conference ip is" . $connection1->conferenceId?></p>
<p><?php echo "The number of conference id is" . $connection1->connectionId?></p>b
</body>
</html>