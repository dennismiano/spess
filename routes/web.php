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

Route::get('/email', function () {
    return view('emails.confirm.co');
});

Route::get('logistics', function () {
    return view('logistics');
});
Route::get('machinery', function () {
    return view('machinery');
});
Route::get('protective-equipment', function () {
    return view('ppe');
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
Route::post('/new/post', 'blog@create_post');
//view post
Route::get('/view/post', 'blog@view_post');
//Admin view one post
Route::get('/one/post/{id}', 'blog@one_post');
//del post
Route::get('/del/post/{id}', 'blog@del_post');

 //edit post form
Route::get('/update/form/{id}', 'blog@up_form');
//save edit post form
Route::post('/save/up', 'blog@save_up');
 //create comment
Route::post('/new/comment', 'blog@create_cmt');
//view comment
Route::get('/cmt/view/{id}', 'blog@view_cmt');
//delete comment
Route::get('/del/cmt/{id}', 'blog@del_cmt');

//view uploaded pics
Route::get('/view/pic/{cat}', 'blog@del_cmt');
//save uplodaded pic
Route::get('/save/pic', 'blog@del_cmt');
//delete uploaded pics
Route::get('/del/pic', 'blog@del_cmt');
//user view post
Route::get('/user/blog', 'blog@u_view');
//user view cmt
Route::get('/user/cmt/{id}', 'blog@user_cmt');
//user create cmt
Route::post('/new/user/cmt', 'blog@user_create_cmt');
//user view one blog
Route::get('/user/view/blog/{id}', 'blog@user_view_blog');







 /*
//reply form
Route::get('/reply/form', '');
//save reply
Route::post('/new/reply', '');
//del reply
Route::post('/del/reply', '');*/
//Admin routes

//generate a admin instance
Route::get("/add/{email}/{password}/{name}","login@add_admin");

//log in form
Route::get("/login","login@login_form");
//log in admin
Route::post("/admin/login","login@login_admin");
//log out admin
Route::get("/admin/logout","login@log_out");



Route::get('/admin', function(){
	return view("admin.welcome");
})->name("admin");
//admin homepage
Route::get('/admin/home', function(){
	return view("admin.home");
});
