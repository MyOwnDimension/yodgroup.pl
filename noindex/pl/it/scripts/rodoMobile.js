  	$( "#informationClauseContentIdMob" ).dialog({ 
		  autoOpen: false ,
		  modal: false,
		         maxWidth:600,
        maxHeight: 600,
        width: $(document).width()*0.9,
        height: $(document).height()*0.02,
	 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Klauzula informacyjna'}); 
          $( "#informationClauseIdMob" ).click(function() { 
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
        height: $(document).height()*0.05,
	 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Ogólne warunki użytkowania strony'}); 
          $( "#generalTermsOfWebsiteIdMob" ).click(function() { 

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
        height: $(document).height()*0.08,
		 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Polityka prywatności'}); 
          $( "#rodoLinkIdMob" ).click(function() { 
		
             $( "#privayPolicyContentIdMob" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show(); 
		
		  $("#generalTermsOfWebsiteContentIdMob").dialog("close");
		   $("#informationClauseContentIdMob").dialog("close");
          }); 
		  
