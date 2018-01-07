
$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
					
		   beforeSend: function(){
				//add  spinner
				$("#myModal").modal("show");
				var spinner=" <div class='loader'></div> ";
				$('.load_modal').empty().html(spinner);
				
				
				
			},
			complete: function(){
				$('#myModal').modal("hide");
				
				
			}
	});
  
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
					$("body").empty().html(data.message);
				 },
				success:function(data){
					//alert("success");
					window.location.replace("/admin");
					
				}
				
				
			   });
		
	}   );
	
	
});