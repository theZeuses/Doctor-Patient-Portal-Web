//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
$(function(){
 
    // add multiple select / deselect functionality
    $("#select_all").click(function () {
          $('.case').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){
 
        if($(".case").length == $(".case:checked").length) {
            $("#select_all").attr("checked", "checked");
        } else {
            $("#select_all").removeAttr("checked");
        }
 
    });
});

function findSlots(str) {
    var xhttp;
    if (str.length == 1 || str.length == 2 ) { 
      document.getElementById("slots").innerHTML = "<div class='center'>No data available</div>";
      return;
    }   
    else if(str.length == 11){
      var st=str.substr(0,10);     
      var link="SlotLister.php?date="+st+"&type=1"; 
    }
    else if(str.length == 12){
      var st=str.substr(0,10);
      var link="SlotLister.php?date="+st+"&type=2";
    } 
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("slots").innerHTML = this.responseText;
      }
    };    
    xhttp.open("GET",link, true);
    xhttp.send();     
}


