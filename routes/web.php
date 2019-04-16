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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get("/{minh}/{nam}",function($minh,$nam="nam"){
// 	return "Hoàng Minh $minh và $nam";
// });
// Route::get("/{minh1}",function($minh1){
// 	return view('demo',compact('minh1'));
// 	});
// Route::get("/1/1/1","ControllerDemo@demo");
// Route::get("de-mo",["as"=>"demo2",function(){
// 	 return view('welcome');
// }]);
// Route::group(["prefix"=>"mon-an"],function(){
// 	Route::get("trung/1",function(){
// 		echo "trung";
// 	});
// 	Route::get("ga/2",function(){
// 		echo "ga";
// 	});
// 	Route::get("vit/3",function(){
// 		echo "vit";
// 	});
// });
// View::share("share","Lap trinh laravel");
Route::get('/blade',function(){
	return view('2');

});
Route::get('/','PageController@menu');
Route::get('/dangnhap','PageController@getdangnhap');
Route::post('/dangnhap','PageController@postdangnhap');
Route::get('/loaitin/{id}','PageController@getloaitin');
Route::get('/chitiet/{id}','PageController@getchitiet');
Route::get('/login','PageController@getdangnhap');
Route::post('/dangnhap','PageController@postdangnhap');
Route::get('/admin/theloai/them','PageController@getthemtheloai');

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'pages'],function(){
		Route::group(['prefix'=>'theloai'],function(){
             Route::get('danhsach','TheloaiController@getDanhSach');
             Route::get('getthem','TheloaiController@getThem');
             Route::post('postthem','TheloaiController@postThem');
             Route::get('sua','TheloaiController@getSua');
		});
		Route::group(['prefix'=>'tintuc'],function(){
             Route::get('danhsach','TintucController@getDanhSach');
             Route::get('them','TintucController@getThem');
             Route::get('sua','TintucController@getSua');
		});
		Route::group(['prefix'=>'user'],function(){
             Route::get('danhsach','UserController@getDanhSach');
             Route::get('them','UserController@getThem');
             Route::get('sua','UserController@getSua');
		});
	});

});

