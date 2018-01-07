$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
			beforeSend: function(){
				//add  spinner
				$("#myModal").modal('show');
				var spinner=" <div class='loader'></div> ";
				$('.load_modal').empty().html(spinner);
				
				
				
			},
			complete: function(){
				//$('#myModal').modal('hide');
				$('#myModal').on('shown.bs.modal',
					function () {
					// do something…
					$(this).modal("hide");
				});
				
			}
	});
	//load homepage
	$.ajax({
			async:true,
			type:"GET",
			url:"/admin/home",
			success:function(data){
				$("#myModal").modal('hide');
				$(".magic").empty().html(data);
				//$("#myModal").modal('hide');
				//alert("sucess");
				
			}
			
			
		});
		
 //capture all links
	$("body").on("click",".load_ajax",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
	    var ur=$(this).attr("href");
		var cla=$("."+$(this).attr("cl") );
		$.ajax({
			async:true,
			type:"GET",
			url:ur,
			success:function(data){
				//$("#myModal").modal('hide');
				cla.empty().html(data);
				//alert("sucess");
				
			}
			
			
		   });
		
	}   );
	
	//del msg
	$("body").on("click",".del_msg",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		var hiik=$(this);
		 $(this).each( function(){
			 //alert("data");
			 var mid=$(this).attr("id");
					$.ajax({
				async:true,
				type:"GET",
				url:"/del/message/"+mid,
				success:function(data){
					
				 hiik.parents(".msg_div").empty().html(data);
					
					
				}
				
				});
		 }   );
	} );
	//del orders
	$("body").on("click",".del_order",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		var di=$(this).attr("id");
		var hiik=$(this);
		  	$.ajax({
				async:true,
				type:"GET",
				url:"/del/order/"+di,
				success:function(data){
				
				    hiik.parents(".order_up").empty().html(data);
					
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
					//alert("success");
					$(".admin_content").empty().html(data);
					
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
					//alert("set");
					
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
	});
	//view cmt
	$("body").on("click",".view_cmt",function(e) {
				e.preventDefault();
				e.stopImmediatePropagation();
				var hii= $(this);
				
				 var id=$(this).attr("id");
				$.ajax({
				async:true,
				type:"GET",
				url:"/cmt/view/"+id,
				error:function(data){
					 alert(data);
				 },
				success:function(data){
					hii.parents(".one_div").append(data);
					//alert(data);
					
				}
				
				
			   });
			 
	} );
	//create comment
	$("body").on("submit",".create_comment",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		var hiig=$(this);
		var da=new FormData(this);
		  	$.ajax({
				async:true,
				type:"POST",
				url:"/new/comment",
				data:da,
				processData:false,
				contentType:false,
				error:function(data){
					 alert(data);
				 },
				success:function(data){
					hiig.parents(".cmt_div").empty().html(data);
					
				}
				
				
			   });
	} );
	//del comment
	$("body").on("click",".del_cmt",  function(e) {
		         e.preventDefault();
				e.stopImmediatePropagation();
				var hii= $(this);
				
				 var id=$(this).attr("id");
				$.ajax({
				async:true,
				type:"GET",
				url:"/del/cmt/"+id,
				error:function(data){
					 alert(data);
				 },
				success:function(data){
					hii.parents(".cmt_div").empty().html(data);
					//alert(data);
					
				}
				
				
			   });
		
	} );
	//view  one post
	$("body").on("click",".view_post",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		 var id=$(this).attr("id");
		$.ajax({
		async:true,
		type:"GET",
		url:"/one/post/"+id,
		error:function(data){
			 alert(data);
		 },
		success:function(data){
			$(".one_post").empty().html(data);
			//alert(data);
			
		}
		
		
	   });
		
	} );
	//log out admin
		$("body").on("click",".admin_logout",  function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();
		$.ajax({
		async:true,
		type:"GET",
		url:"/admin/logout",
		error:function(data){
			 alert(data);
		 },
		success:function(){
			//$(".one_post").empty().html(data);
			//alert(data);
			window.location.replace("/");
			
		}
		
		
	   });
		
	} );
	
	
	
	
	

	
	
	

}  );