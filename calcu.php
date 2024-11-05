<?php 
print_r("<ul>");
function suma(){
  $a = 8;
  $b = 6;
  $suma = $a + $b;
  print_r("<li>8+6=".$suma."</li>");
    }
suma();

function resta(){
  $a = 8;
  $b = 6;
  $resta = $a - $b;
  print_r("<li>8-6= ".$resta."</li>");
}
resta();

function multi(){
  $a = 8;
  $b = 6;
  $multi = $a * $b;
  print_r("<li>8x6=".$multi."</li>");
}
multi();

function div(){
  $a = 8;
  $b = 6;
  $div = $a/$b; 
  print_r("<li>8/6=".$div."</li>");
}
div();
print_r("</ul>");
?>
