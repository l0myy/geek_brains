<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>FizzBuzz</title>
 </head>
 <body>

 <div>
    <p><a href="index.php">Back</a></p>
</div>

 <form name="test" method="get" action="fizzbuzz.php">
  <p><b>Введите начальное значение 'a' > 0 :</b><br>
   <input type="a"  name="a"  size="40">
   
  </p>
  <p><b>Введите конечное значение 'b' > 'a' :</b><br>
   <input type="b"  name="b" size="40"><br>
   <input type="submit"   value="Отправить">
</p>

<?php

function fizzBuzz($begin = 1, $end = 6) {

    if( ($begin < $end) && ($begin>0) )
    {   
        for($i = $begin;$i<= $end;$i++)
        {  
            if (($i%2)==0)
            {
                echo "Fizz";
            } 
            if (($i%3)==0)
            {
                echo "Buzz";
            }
            if ( ($i%2)!=0 && ($i%3)!=0 )
            {
                echo $i;    
            }
            echo "\n";
        }
    }
}

fizzBuzz($_GET['a'],$_GET['b']);

?>