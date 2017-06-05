$("#insert").click(function(){
	
	$.ajax({
	       url : base_url + 'insert',
	       type : 'GET',
	       dataType : 'html',
	       success : function(code_html, statut){
	    	   
	    	   if ($("#js").length == 0){
	    		 $("body").append(code_html); 
	    	   } 
	       }
	});
});
