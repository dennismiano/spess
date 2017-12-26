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
Route::get('/del/message', 'msg@delete_msg');
//create order
Route::post('/new/order', 'order@create_order');
//view order
Route::get('/view/order', 'order@view_order');
//delete order
Route::get('/del/order', 'order@del_order');
//create post
Route::get('/new/post', 'order@del_order');
