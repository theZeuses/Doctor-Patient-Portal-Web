<?php include 'PatientMenu.php';
  require_once '../controllers/SlotController.php';
?>
    <div class="right">
      <div class="main">
        <h2>Booked Slot(s):</h2>
        <?php
          $code="";
          $slots=getSlotBypid($id);

          if(count($slots)!="0"){
            $code='<div class="container">';
            $bg="red";
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
              $code=$code.'<a href="SlotCanceling.php?sid='.$slots[$k]["id"].'" class="cd-popup-trigger">';
              $code=$code.'<div class="slot" style=background:'.$bg.';>';
              $code=$code. "Time:".$slots[$k]["time"];
              $code=$code. "<br>Date:".$slots[$k]["date"];
              $code=$code. "<br>Price:".$slots[$k]["price"];
              $code=$code. "<br>Unvailable";
              $k++;
              $code=$code. '</div>';
              $code=$code. '</a>';
            }
            $code=$code. '</div>';

            $code=$code. '<div class="two">';
            for($i=1;$i<=$m+$z;$i++){
              $code=$code.'<a href="SlotCanceling.php?sid='.$slots[$k]["id"].'" class="cd-popup-trigger">';
              $code=$code.'<div class="slot" style=background:'.$bg.';>';
              $code=$code. "Time:".$slots[$k]["time"];
              $code=$code. "<br>Date:".$slots[$k]["date"];
              $code=$code. "<br>Price:".$slots[$k]["price"];
              $code=$code. "<br>Unvailable";
              $k++;
              $code=$code. '</div>';
              $code=$code. '</a>';
            }
            $code=$code. '</div>';

            $code=$code. '<div class="three">';
            for($i=1;$i<=$m;$i++){
              $code=$code.'<a href="SlotCanceling.php?sid='.$slots[$k]["id"].'" class="cd-popup-trigger">';
              $code=$code.'<div class="slot" style=background:'.$bg.';>';
              $code=$code. "Time:".$slots[$k]["time"];
              $code=$code. "<br>Date:".$slots[$k]["date"];
              $code=$code. "<br>Price:".$slots[$k]["price"];
              $code=$code. "<br>Unvailable";
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

        <div class="cd-popup" role="alert">
          <div class="cd-popup-container">
            <p>Are you sure to cancel the slot?</p>
            <ul class="cd-buttons">
              <li id="cd-popup-yes"><a href="#0">Yes</a></li>
              <li><a href="CancelSlot.php">No</a></li>
            </ul>
            <a href="CancelSlot.php" class="cd-popup-close img-replace">Close</a>
          </div> <!-- cd-popup-container -->
        </div>

        </div>
      </div>
    </div>   
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="javascript/popup.js"></script>
  <script src="javascript/javascript.js"></script> 
</body>
</html>