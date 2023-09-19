<?php

function fibonacci(int $number){
  $veryold = 0;
  $old = 1;
  $new = 1;

  for($i=1; $i<=$number; $i++){

    echo "$i : $veryold \n";
    
    $old = $new;
    $new = $old+ $veryold;
    $veryold = $old;

  }

}

fibonacci(20);
