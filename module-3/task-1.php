<?php 
$text = 'The quick brown fox jumps over the lazy dog.';


function modification($text){

$text =  strtolower($text);
 $text = str_replace('brown','red',$text);
 echo $text;
}

modification($text);
