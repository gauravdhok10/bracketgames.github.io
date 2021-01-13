
document.getElementById("ipopup").style.display="block";
function togglePopup()
{
    document.getElementById("ipopup").style.display="none";
}

var myIndex = 0;
slides();
function slides() {	
	
	var i;
	var x = document.getElementsByClassName("imgSlides");
	  for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	  }
	  myIndex++;
	  if (myIndex > x.length) {myIndex = 1}    
	  x[myIndex-1].style.display = "";  
	  setTimeout(slides, 4000); // Change image every 4 seconds
}
