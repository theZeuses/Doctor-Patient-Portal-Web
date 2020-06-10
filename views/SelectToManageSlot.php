<?php include 'DoctorMenu.php'; 
  require_once '../controllers/SlotController.php';
  if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $date=$_GET["date"];
    $code="";
    $slots=getSlotBydate($date);

    if(count($slots)!="0"){
      $code='<div class="container">';
      $n=count($slots);
      $bg="green";
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
          $code=$code.'<a href="ManageSlot.php?sid='.$slots[$k]["id"].'">';
          if($slots[$k]["availability"]=="Available") $bg="green";
          else $bg="red";
          $code=$code.'<div class="slot" style=background:'.$bg.';>';
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
          $code=$code.'<a href="ManageSlot.php?sid='.$slots[$k]["id"].'">';
          if($slots[$k]["availability"]=="Available") $bg="green";
          else $bg="red";
          $code=$code.'<div class="slot" style=background:'.$bg.';>';
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
          $code=$code.'<a href="ManageSlot.php?sid='.$slots[$k]["id"].'">';
          if($slots[$k]["availability"]=="Available") $bg="green";
          else $bg="red";
          $code=$code.'<div class="slot" style=background:'.$bg.';>';
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
  }
?>


    <div class="right">
      <div class="main">
        <h2>Select the slot that you want to book:</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get" accept-charset="utf-8">
          Date: <input type="date" name="date" value="<?php echo $date; ?>">
          <input type="submit" class="myButton" value="Find">
        </form>         
          <?php
            echo $code;
          ?>
        </div>
    </div>   
  </div>
  <script src="javascript/javascript.js"></script> 
</body>
</html>