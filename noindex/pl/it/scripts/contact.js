  var w = window.innerWidth;
  document.documentElement.style.setProperty('--width0', `${w}px`);
  
  $(document).ready(function() {
    /*kolenosc ma znaczenie, ostatni w talbei musi byc pierwszym tutaj !!!!*/
    $('#linkA15').mouseenter(function() {
        $('#textA15').show();
        $('#textA3').hide();
    });
    $('#linkA15').mouseleave(function() {
        $('#textA15').hide();
        $('#textA3').show();
    });
    $('#linkA14').mouseenter(function() {
        $('#textA14').show();
        $('#textA3').hide();
    });
    $('#linkA14').mouseleave(function() {
        $('#textA14').hide();
        $('#textA3').show();
    });
    $('#linkA13').mouseenter(function() {
        $('#textA13').show();
        $('#textA3').hide();
    });
    $('#linkA13').mouseleave(function() {
        $('#textA13').hide();
        $('#textA3').show();
    });
    $('#linkA12').mouseenter(function() {
        $('#textA12').show();
        $('#textA3').hide();
    });
    $('#linkA12').mouseleave(function() {
        $('#textA12').hide();
        $('#textA3').show();
    });
    $('#linkA11').mouseenter(function() {
        $('#textA11').show();
        $('#textA3').hide();
    });
    $('#linkA11').mouseleave(function() {
        $('#textA11').hide();
        $('#textA3').show();
    });
    $('#linkA10').mouseenter(function() {
        $('#textA10').show();
        $('#textA3').hide();
    });
    $('#linkA10').mouseleave(function() {
        $('#textA10').hide();
        $('#textA3').show();
    });
    $('#linkA9').mouseenter(function() {
        $('#textA9').show();
        $('#textA3').hide();
    });
    $('#linkA9').mouseleave(function() {
        $('#textA9').hide();
        $('#textA3').show();
    });
    $('#linkA8').mouseenter(function() {
        $('#textA8').show();
        $('#textA3').hide();
    });
    $('#linkA8').mouseleave(function() {
        $('#textA8').hide();
        $('#textA3').show();
    });
    $('#linkA7').mouseenter(function() {
        $('#textA7').show();
        $('#textA3').hide();
    });
    $('#linkA7').mouseleave(function() {
        $('#textA7').hide();
        $('#textA3').show();
    });
    $('#linkA6').mouseenter(function() {
        $('#textA6').show();
        $('#textA3').hide();
    });
    $('#linkA6').mouseleave(function() {
        $('#textA6').hide();
        $('#textA3').show();
    });
    $('#linkA5').mouseenter(function() {
        $('#textA5').show();
        $('#textA3').hide();
    });
    $('#linkA5').mouseleave(function() {
        $('#textA5').hide();
        $('#textA3').show();
    }); 
	
	$('#linkA4').mouseenter(function(){
		$('#textA4').show();
        $('#textA3').hide();
    });
		
	$('#linkA4').mouseleave(function(){
        $('#textA4').hide();
        $('#textA3').show();
	});
/*
    $('#linkA3').mouseenter(function() {
        $('#textA3').show();
        $('#textA3').hide();
    });
    $('#linkA3').mouseleave(function() {
        $('#textA3').show();
        $('#textA3').show();
    });
	*/
    $('#linkA2').mouseenter(function() {
        $('#textA2').show();
        $('#textA3').hide();
    });
    $('#linkA2').mouseleave(function() {
        $('#textA2').hide();
        $('#textA3').show();
    });
    $('#linkA1').mouseenter(function() {
        $('#textA1').show();
        $('#textA3').hide();
    });
    $('#linkA1').mouseleave(function() {
        $('#textA1').hide();
        $('#textA3').show();
    });
}); 

function resetFunction(){	
			let inputName = document.getElementById("inputName");   
			let inputEmail = document.getElementById("inputEmail");	  
			let inputMobile = document.getElementById("inputMobile");		
			let inputSubject = document.getElementById("inputSubject");	
var inputMessage = document.getElementById('inputMessage');
inputMessage.innerHTML = '';

		
			inputName.setAttribute('value', '');	
			inputEmail.setAttribute('value', '');	
			inputMobile.setAttribute('value', '');		
			inputSubject.setAttribute('value', '');		

			};