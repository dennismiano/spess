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
		   complete:function(){
				$("#em_mod").modal("toggle");
				
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
	//save msg
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
				$("#Msg_modal").modal("show");
				$("#Msg_modal").children(".modal-body").empty().html(data);
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
		var rst=$(this);
		var rese=$(this)[0].reset();
		rese;
		$("#q_modal").modal("hide");
		$.ajax({
			async:true,
			type:"POST",
			data: da,
			url:"/new/order",
			processData:false,
			contentType:false,
			success:function(data){
				//rst.parents(".modal-body").empty().html(data);
				$("#em_mod").modal('toggle');
				alert(data);
				
			}
			
		}); 
		//alert("sucess");
		
	}   );
	//view one post return user view cmt
	$("body").on("click",".one_cmt",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var id=$(this).attr("id");
		var cla=$(this).parents(".one_com_up");
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
	//SAVE COMMENT
	$("body").on("submit",".create_comment",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=new FormData(this);
		var cla=$(this).parents(".cmt_div");
	    //alert("test");
			$.ajax({
			async:true,
			type:"POST",
			data:da,
			url:"/new/user/cmt",
			processData:false,
			contentType:false,
			success:function(data){
				cla.empty().html(data);
				//alert("sucess");
				
			}
			
			
		});
		
		
		
	});
	//view selected post
	$("body").on("click",".view_post",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var id=$(this).attr("id");
	    //alert("test");
			$.ajax({
			async:true,
			type:"GET",
			url:"/user/view/blog/"+id,
			success:function(data){
				$(".view_div").empty().html(data);
				//alert("sucess");
				
			}
			
			
		});
		
		
		
	});
// user view comment
$("body").on("click",".u_view  ",function(e){
	 e.preventDefault();
	 e.stopImmediatePropagation();
	 	var id=$(this).attr("id");
		var hii=$(this);
	    //alert("test");
			$.ajax({
			async:true,
			type:"GET",
			url:"/user/cmt/"+id,
			success:function(data){
				hii.parents(".load_cmt").append(data);
				//alert("sucess");
				
			}
			
			
		});
		
		
}   );
	
	
	
	

}  );