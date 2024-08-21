  	$( "#informationClauseContentId" ).dialog({ 
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
          $( "#informationClauseId" ).click(function() { 
             $( "#informationClauseContentId" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show(); 
			 
			 $("#generalTermsOfWebsiteContentId").dialog("close");
			  $("#privayPolicyContentId").dialog("close");
          }); 
		   
		  
		  
		  
		  
	           $( "#generalTermsOfWebsiteContentId" ).dialog({ 
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
          $( "#generalTermsOfWebsiteId" ).click(function() { 

             $( "#generalTermsOfWebsiteContentId" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show();  
			           
			 $("#privayPolicyContentId").dialog("close");
			  $("#informationClauseContentId").dialog("close");
          }); 
		  
		  
		
		  
          $( "#privayPolicyContentId" ).dialog({ 
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
          $( "#rodoLinkId" ).click(function() { 
		
             $( "#privayPolicyContentId" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show(); 
		
		  $("#generalTermsOfWebsiteContentId").dialog("close");
		   $("#informationClauseContentId").dialog("close");
          }); 
		  
