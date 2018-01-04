$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
			beforeSend:function(){
				var spinner=" <div class='loader'></div> ";
				$("#em_mod").modal("show");
				$('.modal-content').empty().html(spinner);
			},
		   complete: function(){
				$("#em_mod").modal("hide");
				//alert("test");
				
			},
			error:function(data){
				//$("#em_mod").modal("hide");
				$("body").empty().html(data);
			}
	});
	//capture all links
	$("body").on("click",".load_ajax",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var ur=$(this).attr("href");
		var cla=$("."+$(this).attr('cl') );
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
	//save 
	$("body").on("submit",".msg_form",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=new FormData(this);
		var hii=$(this);
		
		$.ajax({
			async:true,
			type:"POST",
			data: da,
			url:'/new/message',
			processData:false,
			contentType:false,
			
			success:function(data){
				$(".msg_form")[0].reset();
				//alert(data);
				//alert("sucess");
				
			}
			
			
		});
		
	}   );
	//save order
	$("body").on("submit",".op",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		//alert("data");
		var da= new FormData(this);
		$.ajax({
			async:true,
			type:"POST",
			data: da,
			url:"/new/order",
			processData:false,
			contentType:false,
			
			success:function(data){
				//$(".op")[0].reset();
				//alert(data);
				//alert("sucess");
				
			}
			
		});
		
	}   );
	//user view cmt
	$("body").on("click",".user_reply",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var id=$(this).attr("id");
		var cla=$(this).parents(".post_div");
			$.ajax({
			async:true,
			type:"GET",
			url:"/user/cmt/"+id,
			success:function(data){
				cla.append(data);
				//alert("sucess");
				
			}
			
			
		});
		
		
		
	});
	//capture all post pagination links
	$(".pagination").on("click","a",function(e){
		//alert("test");
		e.preventDefault();
		e.stopImmediatePropagation();
		var ur=$(this).attr("href");
		var hii=$(this);
		$.ajax({
			async:true,
			type:"GET",
			url:ur,
			success:function(data){
				//cla.append(data);
				//alert("sucess");
				hii.parents(".poat_page").empty().html(data);
				
			}
			
			
		});
		//alert("test");
		
		
		
		
		
	});
	
	

}  );