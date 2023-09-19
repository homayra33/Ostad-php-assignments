<?php

  $veryold = 0;
  $old = 1;
  $new = 1;

  for($i=1;$i<=10;$i++){
    if($veryold>100){
      break;
    }

    echo "$i : $veryold \n";
    
    $old=$new;
    $new= $old+ $veryold;
    $veryold= $old;

  }


