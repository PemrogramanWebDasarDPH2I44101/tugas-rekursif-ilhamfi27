<?php
function starRowMaker($i) {
  echo "*";
  $i--;
  if ($i > 0)
    starRowMaker($i);
}
function rekursifNumberOne($i){
  starRowMaker($i);
  echo "<br>";
  $i--;
  if($i>0)
    rekursifNumberOne($i);
}
rekursifNumberOne(5);
/*============================================================================*/
function numberRowMaker($i, $n){
  echo $i;
  $i++;
  if($i<=$n)
    numberRowMaker($i, $n);
}
function rekursif_number_two($i, $n){
  numberRowMaker(1, $i);
  echo "<br>";
  $i++;
  if($i<=$n)
    rekursif_number_two($i, $n);
}
rekursif_number_two(1,5);
?>
