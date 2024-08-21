
const height = window.innerHeight;
const width = window.innerWidth;

var divMobile = document.getElementById("MOBILE"); 
  var divPC = document.getElementById("PC"); 

if(height>width){
	//document.write('MOBILE 1 '+divMobile);
	

	  if (divPC.style.display === "block") {
    divPC.style.display = "none";
  } else {
    divPC.style.display = "none";
  }
 
  
  	  if (divMobile.style.display === "none") {
    divMobile.style.display = "block";
  } else {
    divMobile.style.display = "block";
  }
  
	  if (divPC.style.visibility === "visible") {
    divPC.style.visibility = "hidden";
  } else {
    divPC.style.visibility = "hidden";
  }
 
  
  	  if (divMobile.style.visibility === "hidden") {
    divMobile.style.visibility = "visible";
  } else {
    divMobile.style.visibility = "visible";
  }
  
  
}else{
	//document.write('PC 1 '+divPC+'  ');
	
	  if (divPC.style.display === "none") {
    divPC.style.display = "block";
  } else {
    divPC.style.display = "block";
  }
  
  
  	  if (divMobile.style.display === "block") {
    divMobile.style.display = "none";
  } else {
    divMobile.style.display = "none";
  }
  
 	  if (divPC.style.visibility === "hidden") {
    divPC.style.visibility = "visible";
  } else {
    divPC.style.visibility = "visible";
  }
 
  
  	  if (divMobile.style.visibility === "visible") {
    divMobile.style.visibility = "hidden";
  } else {
    divMobile.style.visibility = "hidden";
  }

}