<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;


class blog extends Controller
{
    //add blog
	public function create_post( Request $request,post $post){
		if($request->isMethod("POST")  ){
			$det=[
			   "title"=>$request->title,
			   "name"=>$request->name,
			   "body"=>$request->body,
			   "category"=>$request->category
			   //"files"=>file_get_contents($request->file("files"));
			 ];
			$file_types=$request->file("ff")->getMimeType() == "image/jpeg" || $request->file("ff")->getMimeType() == "image/png" || $request->file("ff")->getMimeType() == "image/gif";
			 if( $request->hasFile("ff") && $request->file("ff")->isValid() && $file_types ){
				$det["files"]= file_get_contents($request->file("ff") );
				//return pg_escape_bytea($det["files"]  );
				  //return var_dump ( $det['files'] );
				
				 
			 }
			 $np=$post::create($det);
			 if($np){
				 return "Post created successfully.";
			 }
			 else{
				return "Error.Couldn't create post."; 
			 }
		}
		else{
			return abort(404);
		}
	}
	
	
	//del post
	public function del_post(int $id, post $post){
		$dp=$post::destroy($id);
		if($dp){
			return "Post deleted successfully.";
		}
		else{
			return abort(404);
		}
		
	}
	//return update post form
	public function up_form(int $id , post $posts ){
		$fp=$posts::find($id);
		if($fp){
			return view("post.view",["up_post"=>$fp]);
		}
		else{
			return "Error could not find post. ";
		}
		
		
	}
	//save updated post
	public function save_up(post $posts,request $request){
		if( $request->isMethod("POST")    ){
			$det=[
			 "title"=>$request->title,
			 "name"=>$request->title,
			 "body"=>$request->title,
			 "category"=>$request->title,
			
			 ];
			 //check file
			 $file_types=$request->file("ff")->getMimeType() == "image/jpeg" || $request->file("ff")->getMimeType() == "image/png" || $request->file("ff")->getMimeType() == "image/gif";
			 if( $request->hasFile("ff") && $request->file("ff")->isValid() && $file_types ){
				$det["files"]= file_get_contents($request->file("ff") );
				//return pg_escape_bytea($det["files"]  );
				  //return var_dump ( $det['files'] );
				
				 
			 }
			$up=$posts::update($det);
			if($up){
				return "Post updated.";
			}
			else{
				return "Error.Failed to update.";
			}
		}
		else{
			return abort(404);
			
		}
		
	}
	//return all posts
	public function view_post (Request $request ,post $post){
		$ap=$post::orderBy("created_at","desc")->SimplePaginate(5);
		return view("post.view",["post"=>$ap]);
		
	}
	//create comment
	public function create_cmt( Request $request,comment $cmt){
		if( $request->isMethod("POST")    ){
			$det=[
			 "name"=>$request->name,
			 "email"=>$request->email,
			 "post_id"=>$request->post_id,
			 "message"=>$request->message,
			];
			$cc=$cmt::create($det);
			if($cc){
				return "Comment created successfully";
				
				
			}
			else{
				return "Error failed to create comment.";
			}
			
		}
		else{
			
		}
	}
	//view comment
	public function view_cmt( int $id,Request $request,comment $cmt){
		$vc=$cmt::orderBy("created_at","desc")->where('post_id',$id)->SimplePaginate(5);
	  return  view("cmt.admin_view",["cmt"=>$vc]);
		
	}
	//del comment
	public function del_cmt( int $cid,Request $request,comment $cmt){
		$dc=$cmt::destroy($cid);
		if($dc){
			return "Comment deleted successfully.";
			
		}
		else{
			return "Error.Failed to delete comment.";
		}
	  
		
	}
	
}
