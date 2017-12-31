$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	//load homepage
	$.ajax({
			async:true,
			type:"GET",
			url:"/admin/home",
			success:function(data){
				$("body").empty().html(data);
				//alert("sucess");
				
			}
			
			
		});
		
 //capture all links
	$("body").on("click",".load_ajax",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		$(this).each(function(){
			   var ur=$(this).attr("href");
			var cla=$("."+$(this).attr("cl") );
		$.ajax({
			async:true,
			type:"GET",
			url:ur,
			success:function(data){
				cla.empty().html(data);
				//alert("sucess");
				
			}
			
			
		   });
		}   );
		
	}   );
	
	//del msg
	$("body").on("click",".del_msg",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		 $(this).each( function(){
			 //alert("data");
			 var mid=$(this).attr("id");
					$.ajax({
				async:true,
				type:"GET",
				url:"/del/message/"+mid,
				success:function(data){
					//cla.empty().html(data);
					alert(data);
					
				}
				
				
			   });
		 }   );
	} );
	//del orders
	$("body").on("click",".del_order",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		var di=$(this).attr("id");
		  	$.ajax({
				async:true,
				type:"GET",
				url:"/del/order/"+di,
				success:function(data){
					//cla.empty().html(data);
					alert(data);
					
				}
				
				
			   });
		 
	} );
	//create post
	$("body").on("submit",".ad_post",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=new FormData(this);
		  	$.ajax({
				async:true,
				type:"POST",
				url:"/new/post",
				data:da,
				processData:false,
				contentType:false,
				error:function(data){
					 alert(data);
				 },
				success:function(data){
					//cla.empty().html(data);
					alert(data);
					
				}
				
				
			   });
		 
	} );
	//update post form
	$("body").on("click",".edit_post",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		var hii=$(this);
	     hii.each(function(){
			  	var id=hii.attr("id");
		  	$.ajax({
				async:true,
				type:"GET",
				url:"update/form/"+id,
				error:function(data){
					 alert(data);
				 },
				success:function(data){
					$(".admin_content").empty().html(data);
					//alert(data);
					
				}
				
				
			   }); 
			 
			 
		     });
		 
	} );
	//save up post
	$("body").on("submit",".up_post",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		
	     var da=new FormData(this);
		  	$.ajax({
				async:true,
				type:"POST",
				url:"/save/up",
				data:da,
				processData:false,
				contentType:false,
				error:function(data){
					 alert(data);
				 },
				success:function(data){
					$(".admin_content").empty().html(data);
					//alert(data);
					
				}
				
				
			   });
		 
	} );
	//del post
	$("body").on("click",".del_post",  function(e) {
				e.preventDefault();
				e.stopImmediatePropagation();
				
				 var id=$(this).attr("id");
				$.ajax({
				async:true,
				type:"GET",
				url:"/del/post/"+id,
				error:function(data){
					 alert(data);
				 },
				success:function(data){
					$(".admin_content").empty().html(data);
					//alert(data);
					
				}
				
				
			   });
			 
	} );
	
	
	

	
	
	

}  );