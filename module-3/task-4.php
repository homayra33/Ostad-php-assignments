<?php 
$studentGrades =[
  'nazmul'  => ['Math'=>89, 'English'=> 78,'Science'=>82],
  'homayra' => ['Math'=>69, 'English'=> 70, 'Science'=>80],
  'hanif'   => ['Math'=>2, 'English'=> 2, 'Science'=>2]
];
function gradeCalculation($array){
  
  foreach($array as $key => $value){
    $total = array_sum($value);
    $result = $total/3;

    echo "{$key}: ";
    if($result>=80 && $result<=100)echo "A+";
    else if($result>=70 && $result<=79)echo "A";
    else if($result>=60 && $result<=69)echo "A-";
    else if($result>=50 && $result<=59)echo "B";
    else if($result>=40 && $result<=49)echo "C";
    else if($result>=33 && $result<=39)echo "D";
    else echo "fail";
    echo "\n";
  }
}

gradeCalculation($studentGrades);
