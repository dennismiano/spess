$(document).ready( function(){
	$("body").on("submit",".login_form",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=new FormData(this);
	    $.ajax({
				async:true,
				type:"POST",
				url:"/admin/login",
				data:da,
				processData:false,
				contentType:false,
				error:function(data){
					 alert(data);
				 },
				success:function(data){
					//alert("success");
					
					
				}
				
				
			   });
		
	}   );
	
	
});