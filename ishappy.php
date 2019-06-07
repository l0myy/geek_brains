<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Happy ticket</title>
 </head>
 <body>

 <div>
    <p><a href="index.php">Back</a></p>
</div>

 <form name="tik" method="get" action="ishappy.php">
  <p><b>Введите номер билета :</b><br>
   <input type="tik"  name="tik"  size="40">

</p>

<?php

function isHappy($ticket) {

    if(strlen($ticket)%2==0)
    {
        for($i = 0; $i <(strlen($ticket)/2);$i++)
        {
            $sum1 = $ticket[$i];
            $sum2 = $ticket[strlen($ticket)-$i-1];
        }
        if($sum1 == $sum2)
        {
            return true;
        } else return false;
   
    } else return false;

}

var_dump(isHappy($_GET['tik']));
?>