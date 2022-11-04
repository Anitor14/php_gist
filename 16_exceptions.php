<?php

 function inverse($x)
 {
     if (!$x) {
         throw new Exception('Division by Zero');
     }

     return 1/$x;
 }

 echo inverse(0);

 try {
     echo inverse(1);
     echo inverse(0);
 } catch (Exception $e) {
     echo "Caught Exception: " . $e->getMessage();
 } finally {
    echo "First Finally";
 }
