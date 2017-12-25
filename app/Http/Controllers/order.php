<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order as orders;

class order extends Controller
{
    //create orders
	public function create_order( Request $request,  orders $orders ){
		$det=[];
		$or=$orders::create($det);
		if($or){
			return "order created successfully";
			
		}
		else{
			return "failed to create order";
		}
		
	}
	//view orders
	public function view_order( Request $request,  orders $orders ){
	     $o=$orders::orderBy('created_at','desc')->SimplePaginate(5);
		 return view("orders.view",["orders"=>$o]);
		
	}
	//delete order
	public function del_order( int $id,Request $request,  orders $orders ){
	     $o=$orders::destroy($id);
		 if($o){
			 return "order deleted successfully";
		    }
	     else{
			 return "Error.Failed to delete order.";
		 }
	}
	
}
