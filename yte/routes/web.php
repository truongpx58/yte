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
    return view('app');
});

// Route::get('/login', function () {
//     return view('admin.login.login');
// });
//Route::get('/', 'Auth\LoginController@getLogin');
// Route::get('login',['as'=>'getLogin', 'uses'=>'LoginController@getLogin']);
// Route::post('login',['as'=>'postLogin', 'uses'=>'LoginController@postLogin']);

//Route::get('/', 'Auth\LoginController@getLogin');
Route::get('/login', 'Auth\LoginController@getLogin');
Route::post('/login', 'Auth\LoginController@postLogin')->name('postLogin');

// Route::get('/bn', 'HomeController@getBn');
// Route::get('/bs', 'HomeController@getBs');
Route::get('logout', 'HomeController@getLogout');

// Route::group(['middleware' => 'auth'], function () {
// 	// Route::get('/logout', function(){
// 	// 	Auth::logout();
// 	// 	return redirect('/');
// 	// });
//     Route::get('/admin', function () {
//         dd('hi! im an administrator!');
//     });
//     Route::get('/doctor', function () {
//         dd('hi! im an administrator!');
//     });
//     Route::get('/patient', function () {
//         dd('hi! im an administrator!');
//     });
// });

// Route::get('benhdtd',function(){
// 	return view('users.benhdtd');
// });
// Route::get('benhtha',function(){
// 	return view('users.benhtha');
// });

Route::get('dangkybn',['as'=>'getDangkybn','uses'=>'Auth\RegisterController@getDangkybn']);
Route::post('dangkybn',['as'=>'postDangkybn','uses'=>'Auth\RegisterController@postDangkybn']);

Route::get('dangkybs',['as'=>'getDangkybs','uses'=>'Auth\RegisterController@getDangkybs']);
Route::post('dangkybs',['as'=>'postDangkybs','uses'=>'Auth\RegisterController@postDangkybs']);

Route::get('doctorList', ['as'=>'getDoctorList','uses'=>'UserController@getDoctorList']);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'bn'],function(){
    	Route::get('/','HomeController@getBn');
    	Route::group(['prefix' => 'benhdtd'],function(){
    		Route::get('/', ['as'=>'getBenhdtd','uses'=>'UserController@getBenhdtd']);
    		Route::post('/',['as'=>'postBenhdtd','uses'=>'UserController@postBenhdtd']);
    	});
    	Route::group(['prefix' => 'benhtha'],function(){
    		Route::get('/', ['as'=>'getBenhtha','uses'=>'UserController@getBenhtha']);
    		Route::post('/',['as'=>'postBenhtha','uses'=>'UserController@postBenhtha']);
    	});
    	Route::group(['prefix' => 'dsBs'],function(){
    		Route::get('/',['as'=>'getDoctorList','uses'=>'UserController@getDoctorList']);
    		Route::get('detail/{id}',['as'=>'getDoctorDetail', 'uses'=>'UserController@getDoctorDetail']);
    		//Route::post('dangky',['as'=>'getDoctor','uses'=>'UserController']);
    	});
    });
    Route::group(['prefix' => 'bs'],function(){
    	Route::get('/','HomeController@getBs');
    });
});