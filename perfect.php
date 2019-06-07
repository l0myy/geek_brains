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

 <form name="num" method="get" action="perfect.php">
  <p><b>Введите число > 0 :</b><br>
   <input type="num"  name="num"  size="40">

</p>

<?php

function isPerfect($num = 1){

  for($i = 1; $i < $num; $i++){
    if(($num%$i)==0)
    {
        $sum += $i;
    }
  }
  if($num==$sum)
  {
      return true;
  }else 
  return false;
}

var_dump(isPerfect($_GET['num']));

?>