  	$( "#informationClauseContentIdPc" ).dialog({ 
		  autoOpen: false ,
		  modal: false,
		         maxWidth:600,
        maxHeight: 600,
        width: $(document).width()*0.9,
        height: $(document).height()*0.9,
	 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Klauzula informacyjna'}); 
          $( "#informationClauseIdPc" ).click(function() { 
		  
$( "#informationClauseContentIdPc" ).css('display','block');
$( "#informationClauseContentIdPc" ).css('visibility','visible');
$( "#informationClauseContentIdPc" ).css('background-color','#FCEEF7');
$( "#informationClauseContentIdPc" ).css('color','#000000');

             $( "#informationClauseContentIdPc" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show(); 
			 
			 $("#generalTermsOfWebsiteContentIdPc").dialog("close");
			  $("#privayPolicyContentIdPc").dialog("close");
          }); 
		   
		  
	           $( "#generalTermsOfWebsiteContentIdPc" ).dialog({ 
		  autoOpen: false ,
		  modal: false,
		         maxWidth:600,
        maxHeight: 600,
        width: $(document).width()*0.9,
        height: $(document).height()*0.9,
	 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Ogólne warunki użytkowania strony'}); 
          $( "#generalTermsOfWebsiteIdPc" ).click(function() { 
		  
$("#generalTermsOfWebsiteContentIdPc").css('display','block');
$("#generalTermsOfWebsiteContentIdPc").css('visibility','visible');
$("#generalTermsOfWebsiteContentIdPc").css('background-color','#FCEEF7');
$("#generalTermsOfWebsiteContentIdPc").css('color','#000000');

             $( "#generalTermsOfWebsiteContentIdPc" ).dialog( "open" );
             $(".ui-dialog-titlebar").show();
			           
			 $("#privayPolicyContentIdPc").dialog("close");
			  $("#informationClauseContentIdPc").dialog("close");
          }); 




          $( "#privayPolicyContentIdPc" ).dialog({ 
		  autoOpen: false ,
		  modal: false,
		         maxWidth:600,
        maxHeight: 600,
        width: $(document).width()*0.9,
        height: $(document).height()*0.9,
		 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Polityka prywatności'}); 
          $( "#rodoLinkIdPc" ).click(function() { 
	
$( "#privayPolicyContentIdPc" ).css('display','block');
$( "#privayPolicyContentIdPc" ).css('visibility','visible');
$( "#privayPolicyContentIdPc" ).css('background-color','#FCEEF7');
$( "#privayPolicyContentIdPc" ).css('color','#000000');

             $( "#privayPolicyContentIdPc" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show(); 
		
		  $("#generalTermsOfWebsiteContentIdPc").dialog("close");
		   $("#informationClauseContentIdPc").dialog("close");
          }); 
		  
