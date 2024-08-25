  	$( "#informationClauseContentIdPc" ).dialog({ 
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
          $( "#informationClauseIdPc" ).click(function() { 
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
        height: $(document).height()*0.05,
	 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Ogólne warunki użytkowania strony'}); 
          $( "#generalTermsOfWebsiteIdPc" ).click(function() { 

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
        height: $(document).height()*0.08,
		 position: { 
	  my: 'center',
     at: 'top' 
                } ,
    resizable: false,
    title: 'Polityka prywatności'}); 
          $( "#rodoLinkIdPc" ).click(function() { 
		
             $( "#privayPolicyContentIdPc" ).dialog( "open" ); 
             $(".ui-dialog-titlebar").show(); 
		
		  $("#generalTermsOfWebsiteContentIdPc").dialog("close");
		   $("#informationClauseContentIdPc").dialog("close");
          }); 
		  
