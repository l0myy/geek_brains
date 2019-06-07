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

 <form name="brac" method="get" action="ishappy.php">
  <p><b>Введите номер билета :</b><br>
   <input type="brac"  name="brac"  size="40">

</p>

<?php

function bracket($ticket) {

    if(strlen($ticket)%2==0)
    {
        for($i = 0; $i <(strlen($ticket)/2);$i++)
        {
            if( ($ticket[$i] == ')') && ($ticket[strlen($ticket)-$i-1] == '(')
            {
                return true;
            }
            else return false;
        }
   
    } else return false;

}

var_dump(bracket($_GET['tik']));
?>