<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//create msg
Route::post('/new/message', 'msg@create_msg');
//view msg
Route::get('/view/message', 'msg@view_msg');
//delete msg
Route::get('/del/message/{id}', 'msg@delete_msg');
//create order
Route::post('/new/order', 'order@create_order');
//view order
Route::get('/view/order', 'order@view_order');
//delete order
Route::get('/del/order/{id}', 'order@del_order');
//create post
/*Route::get('/new/post', '');
//view post
Route::get('/new/post', '');
//edit post form
Route::get('/up/form', '');
//save edit post form
Route::post('/save/up', '');
//create comment
Route::post('/new/comment', '');
//create comment form
Route::post('/form/cmt', '');
//view comment
Route::get('/cmt/view', '');
//delete comment
Route::post('/del/cmt', '');
//reply form
Route::get('/reply/form', '');
//save reply
Route::post('/new/reply', '');
//del reply
Route::post('/del/reply', '');*/
//Admin routes
Route::get('/admin', function(){
	return view("admin.welcome");
});
//admin homepage
Route::get('/admin/home', function(){
	return view("admin.home");
});


