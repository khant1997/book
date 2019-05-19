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

Route::get('/', array('as'=>'frontend','uses'=>'FrontendController@allCategories'));
//Route::get('/test', array('as'=>'frontend','uses'=>'FrontendController@index'));
Auth::routes();
// Route::get('/backend', function () {
//     return view('admin.index');
// });
Route::get('/backend', 'FrontendController@backend');
Route::get('/dashboard',        			array('as'=>'dashboard','uses'=>'DashboardController@index'));

Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/register', function () {
    return view('admin.register');
});
Route::get('/admin/Forgot', function () {
    return view('admin.forgot-password');
});


Route::get('user', array('as'=>'user','uses'=>'UserController@index'));
Route::get('user/create', array('as'=>'user/create','uses'=>'UserController@create'));
Route::post('user/store', array('as'=>'user/store','uses'=>'UserController@store'));
Route::get('user/dectivate/{id}', 'UserController@dectivate');
Route::get('user/edit/{id}', array('as'=>'user/edit','uses'=>'UserController@edit'));
Route::post('user/update', array('as'=>'user/update','uses'=>'UserController@update'));

Route::get('editprofile/{id}', array('as'=>'editprofile','uses'=>'UserController@editprofile'));









Route::get('book', array('as'=>'book','uses'=>'BookController@index'));
Route::get('book/create', array('as'=>'book/create','uses'=>'BookController@create'));
Route::post('book/store', array('as'=>'book/store','uses'=>'BookController@store'));
Route::get('book/edit/{id}', array('as'=>'book/edit','uses'=>'BookController@edit'));
Route::post('book/update/{id}', array('as'=>'book/update','uses'=>'BookController@update'));
Route::get('book/delete/{id}', array('as'=>'book/delete','uses'=>'BookController@destroy'));

Route::get('category', array('as'=>'category','uses'=>'CategoryController@index'));
Route::get('category/create', array('as'=>'category/create','uses'=>'CategoryController@create'));
Route::post('category/store', array('as'=>'category/store','uses'=>'CategoryController@store'));
Route::get('category/edit/{id}', array('as'=>'category/edit','uses'=>'CategoryController@edit'));
Route::post('category/update/{id}', array('as'=>'category/update','uses'=>'CategoryController@update'));
Route::get('category/delete/{id}', array('as'=>'category/delete','uses'=>'CategoryController@destroy'));
Route::get('book/details/{id}', array('as'=>'book/details','uses'=>'BookdetailControllr@detail'));


Route::get('bookregister', array('as'=>'bookregister','uses'=>'BookRegisterController@index'));
Route::get('bookregister/create/{id}', array('as'=>'bookregister/create','uses'=>'BookRegisterController@create'));
Route::post('bookregister/store', array('as'=>'bookregister/store','uses'=>'BookRegisterController@store'));
Route::get('bookregister/approve/{book_id}/{user_id}', array('as'=>'bookregister/approve','uses'=>'BookRegisterController@approve'));

Route::get('bookrent', array('as'=>'bookrent','uses'=>'BookRentListController@index'));


Route::get('category/books/{id}', array('as'=>'category/books','uses'=>'CategoryBookController@categorybook'));
Route::get('/logout', 'Auth\LoginController@logout');





Route::get('report', array('as'=>'report','uses'=>'ReportController@index'));
Route::get('bookreport', array('as'=>'bookreport','uses'=>'BookReportController@index'));
Route::get('orderreport', array('as'=>'orderreport','uses'=>'BookOrderReortController@index'));
Route::get('categoryreport', array('as'=>'categoryreport','uses'=>'CategoryReportController@index'));