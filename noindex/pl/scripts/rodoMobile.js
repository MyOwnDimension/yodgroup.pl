  	$( "#informationClauseContentIdMob" ).dialog({ 
		  autoOpen: false ,
		  modal: false,
		         maxWidth:600,
        maxHeight: 600,
        width: $(document).width()*0.9,
        height: $(document).width()*0.5,
	 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Klauzula informacyjna'}); 
          $( "#informationClauseIdMob" ).click(function() { 
		  
$( "#informationClauseContentIdMob" ).css('display','block');
$( "#informationClauseContentIdMob" ).css('visibility','visible');
$( "#informationClauseContentIdMob" ).css('background-color','#FCEEF7');
$( "#informationClauseContentIdMob" ).css('color','#000000');

             $( "#informationClauseContentIdMob" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show(); 
			 
			 $("#generalTermsOfWebsiteContentIdMob").dialog("close");
			  $("#privayPolicyContentIdMob").dialog("close");
          }); 
		   
		  
		  
		  
		  
	           $( "#generalTermsOfWebsiteContentIdMob" ).dialog({ 
		  autoOpen: false ,
		  modal: false,
		         maxWidth:600,
        maxHeight: 600,
        width: $(document).width()*0.9,
        height: $(document).width()*0.9,
	 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Ogólne warunki użytkowania strony'}); 
          $( "#generalTermsOfWebsiteIdMob" ).click(function() { 
		  
$( "#generalTermsOfWebsiteContentIdMob" ).css('display','block');
$( "#generalTermsOfWebsiteContentIdMob" ).css('visibility','visible');
$( "#generalTermsOfWebsiteContentIdMob" ).css('background-color','#FCEEF7');
$( "#generalTermsOfWebsiteContentIdMob" ).css('color','#000000');

             $( "#generalTermsOfWebsiteContentIdMob" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show();  
			           
			 $("#privayPolicyContentIdMob").dialog("close");
			  $("#informationClauseContentIdMob").dialog("close");
          }); 
		  
		  
		
		  
          $( "#privayPolicyContentIdMob" ).dialog({ 
		  autoOpen: false ,
		  modal: false,
		         maxWidth:600,
        maxHeight: 600,
        width: $(document).width()*0.9,
        height: $(document).width()*0.9,
		 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Polityka prywatności'}); 
          $( "#rodoLinkIdMob" ).click(function() { 

$( "#privayPolicyContentIdMob" ).css('display','block');
$( "#privayPolicyContentIdMob" ).css('visibility','visible');
$( "#privayPolicyContentIdMob" ).css('background-color','#FCEEF7');
$( "#privayPolicyContentIdMob" ).css('color','#000000');

             $( "#privayPolicyContentIdMob" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show(); 
		
		  $("#generalTermsOfWebsiteContentIdMob").dialog("close");
		   $("#informationClauseContentIdMob").dialog("close");
          }); 
		  
