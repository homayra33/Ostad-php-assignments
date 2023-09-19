<?php 
function isEvenFor(int $start, int $end){
  for($start; $start<=$end; $start++){
    if($start%2==0)
    echo $start."\n";
  }
}



function isEvenWhile(int $start, int $end){

while($start <= $end){
  if($start%2==0)
    echo $start."\n";
  ++$start;
}

}

function isEvenDoWhile(int $start, int $end){

do {
  if($start%2==0)
    echo $start."\n";

  ++$start;
}while($start <= $end);

}

isEvenFor(1,20);
isEvenWhile(1,20);
isEvenDoWhile(1,20);
