<?php
  require_once '../controllers/SlotController.php';
  $date=$_GET["date"];
  $type=$_GET["type"];
  $code="";
  if($type=="1"){
  	$slots=getAvailableSlotBydate($date);
  }
  else{
  	$slots=getSlotBydate($date);
  }
  
  if(count($slots)!="0"){
    $code='<div class="container">';
    $bg="green";
    $n=count($slots);
    $y=$z=0;
    $m=$n/3;
    $x=$n%3;

    $k=0;

    if($x=="1"){
      $y=1;
    }
    if($x=="2"){
      $y=1;
      $z=1;
    }
    $code=$code. '<div class="one">';
    for($i=1;$i<=$m+$y;$i++){
      $code=$code.'<a href="#">';
      $code=$code.'<div class="slot" style=background:'.if($slots[$k]["availability"]=="yes") echo "green";else echo "red";.';>';
      $code=$code. "Time:".$slots[$k]["time"];
      $code=$code. "<br>Date:".$slots[$k]["date"];
      $code=$code. "<br>Price:".$slots[$k]["price"];
      $code=$code. "<br>".$slots[$k]["availability"];
      $k++;
      $code=$code. '</div>';
      $code=$code. '</a>';
    }
    $code=$code. '</div>';

    $code=$code. '<div class="two">';
    for($i=1;$i<=$m+$z;$i++){
      $code=$code.'<a href="#">';
      $code=$code.'<div class="slot" style=background:'.if($slots[$k]["availability"]=="yes") echo "green";else echo "red";.';>';
      $code=$code. "Time:".$slots[$k]["time"];
      $code=$code. "<br>Date:".$slots[$k]["date"];
      $code=$code. "<br>Price:".$slots[$k]["price"];
      $code=$code. "<br>".$slots[$k]["availability"];
      $k++;
      $code=$code. '</div>';
      $code=$code. '</a>';
    }
    $code=$code. '</div>';

    $code=$code. '<div class="three">';
    for($i=1;$i<=$m;$i++){
      $code=$code.'<a href="#">';
      $code=$code.'<div class="slot" style=background:'.if($slots[$k]["availability"]=="yes") echo "green";else echo "red";.';>';
      $code=$code. "Time:".$slots[$k]["time"];
      $code=$code. "<br>Date:".$slots[$k]["date"];
      $code=$code. "<br>Price:".$slots[$k]["price"];
      $code=$code. "<br>".$slots[$k]["availability"];
      $k++;
      $code=$code. '</div>';
      $code=$code. '</a>';
    }
    $code=$code. '</div>';
    $code=$code. '</div>';
  }else{
    $code="<div class='center'>No Data found</div>";
  }
  echo $code;
?>

