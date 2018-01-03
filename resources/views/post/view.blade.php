       <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>
        

	<div class="col-md-6">
		<div class="blogform-section">
				@if(isset($up_post)  )
						<h3><span class="blue"><i class="fa fa-plus-circle"></i> Edit article</span></h3>
					
						<form class="up_post">
						   {{csrf_field()}}

						   	 <div class="form-group">
								<label for="blogtitle">Blog Title:</label>
							  	<input type="text" class="form-control" name="title"  id="blogtitle" value="{{ $up_post->title  }}">
							 </div>

							 <input type="hidden"  value="{{ $up_post->id}}" name="id"/>

							 <div class="form-group">
								<label for="blogauthor">Blog Author:</label>
							  	<input  type="text"  class="form-control" name="name" value="{{ $up_post->name  }}" id="blogauthor" />
							 </div>

							 <div class="form-group">
								<label for="editor">Blog Article:</label>
								<textarea name="body" class="form-control" id="editor">{{ $up_post->body }}</textarea>
							 </div>

							 <div class="form-group">
								<label for="blogcat">Blog Category:</label>
							  	<input type="text"  class="form-control" name="category"  value="{{ $up_post->category  }}" id="blogcat"/>
							 </div>

							  <img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $up_post->files); ?>" /><br>
							  
							  Replace with:<input type="file"  name="ff" /><br>
							  <button type="submit" class="btn btn-success">Update blog</button>
							  <button type="button" class="btn btn-warning" href="/view/post" class="load_ajax" cl="admin_content">Cancel</button>
						   
						 </form>

				@else
						<h3><span class="blue"><i class="fa fa-plus-circle"></i> Create a new article</span></h3>
							
							<form class="ad_post" >
								   {{csrf_field()}}

								   <div class="form-group">
								   		<label for="blogtitle">Blog Title:</label>
									  <input type="text" class="form-control" name="title"  placeholder="blog title" id="blogtitle">
								   </div>

								   <div class="form-group">
								   		<label for="blogauthor">Blog Author:</label>
									  <input  type="text" class="form-control"  placeholder="author" name="name" id="blogauthor" />
								   </div>

								   <div class="form-group">
								   		<label for="editor">Blog Article:</label>
									  <textarea name="body" class="form-control" id="editor" placeholder="your blog..." rows="6"></textarea>
									</div>

									<div class="form-group">
								   		<label for="blogcat">Blog Category:</label>
									  		<input type="text"  class="form-control" placeholder="category" name="category" id="blogcat" />
									 </div>

									 <div class="form-group">
								   		<label for="blogimage">Upload image:</label>
									  		<i class="fa fa-cloud-upload"></i><input type="file" name="ff" id="blogimage"/>
									  </div>
									  <button type="submit" class="publish-btn" >Publish blog <i class="fa fa-plus-circle"></i></button> 
							 </form>
			</div>
	</div>
	
	<div class="col-md-6">
		<div class="recent-blogs">
			<h3 class="recent-blogs-header">Recent Blogs</h3>
				@if( isset($post)  && $post->isNotEmpty()   )	
		
					   @foreach( $post as $value)
							<div class="post_div">
								<div class="row">
									<div class="col-md-3">
										<img  class="img-responsive blogger-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->files); ?>" />
									</div>

									<div class="col-md-9">
										<h4>{{$value->title}}</h4>
										<p>Posted {{$value->created_at->diffForHumans()}} by {{$value->name}}</p>
										
										<a href="#" class="view_cmt" id="{{$value->id}}"><span class="blue"><i class="fa fa-commenting"></i> comments({{$value->comments()->count()}})</span></a>&nbsp;&nbsp;
										<a href="#" class="edit_post" id="{{$value->id}}"><span class="blue"><i class="fa fa-pencil-square-o"></i> update</span></a>&nbsp;&nbsp;
										<a href="#" class="del_post" id="{{$value->id}}"><span class="red"><i class="fa fa-trash"></i> delete</span></a>
									</div>
								</div>
							</div>
					   @endforeach
			  
			@else
				@if( ! isset($up_post)  )
					   <p>No posts to display.</p>
				@endif
		</div>		   
	</div>



				
			
		@endif
@endif

 
	<script src="[ckeditor-build-path]/ckeditor.js"></script>	
	<script>
		ClassicEditor
		    .create( document.querySelector( '#editor' ) )
		    .then( editor => {
		        console.log( editor );
		    } )
		    .catch( error => {
		        console.error( error );
		    } );
	</script>
  
