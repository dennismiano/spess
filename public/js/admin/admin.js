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

	
	
	

}  );