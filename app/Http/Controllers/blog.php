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
			   "category"=>$request->category,
			 ];
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
			return view("post.update_form",["post"=>$fp]);
		}
		else{
			return abort(404);
		}
		
		
	}
	//save updated post
	public function save_up(int $id ,post $posts,request $request){
		if( $request->isMethod("POST")    ){
			$det=[];
			$up=$posts::update($det);
			if($up){
				return "Post updated.";
			}
			else{
				return "Error.Failed to update.";
			}
		}
		else{
			
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
	public function view_cmt( Request $request,comment $cmt){
		$vc=$cmt::orderBy("created_at","desc")->SimplePaginate(5);
	  return  view("blog.cmt.view",["cmt"=>$vc]);
		
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
