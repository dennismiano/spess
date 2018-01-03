$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					},
			beforeSend:function(){
				var spinner=" <div class='loader'></div> ";
				$("#empty_model").modal("show");
				$('.modal-content').empty().html(spinner);
			},
			complete: function(){
				$('#empty_model').modal('hide');
				
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
				alert(data);
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
				$(".op")[0].reset();
				alert(data);
				//alert("sucess");
				
			}
			
		});
		
	}   );
	

}  );