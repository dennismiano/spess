<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class msg extends Controller
{
    //create msg
	public function create_msg(Request $request,message $message){
		$det=[
		 "name"=>$Request->name;
		 "email"=>$Request->email;
		 "message"=>$Request->msg;
		 
		 ];
		$msgs=$message::create($det);
		if($msgs){
			return "message sent";
		}
		else{
			return "An error occured in sending your message";
		}
		
	}
	//view msg
	public function view_msg(  message $message ){
		$msgs=$message::orderBy('creataed_at','desc')->SimplePaginate(5);
		return view("msg.view",["msg"=>$msgs]);
		
		
	}
	//delete msg
	public function delete_msg(message $message, int $id){
		$msgss=$message::destroy($id);
		if($msgss){
			return "Message deleted successfully";
			
		}
		else{
			return "Message not deleted";
		}
	}
}
