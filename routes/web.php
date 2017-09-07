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

Route::get('/posts',function(){

	$response =  \App\Facades\Wprestapi::posts("http://demo.wp-api.org/wp-json/wp/v2/posts?per_page=5");
		
	$posts = json_decode($response,true);
		
	print_r($posts);
	
});
