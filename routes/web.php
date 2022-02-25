<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/user/{id}/{name?}', function ($id,$name="Zubby") {
//     return 'Your id is '.$id. " and your name is ".$name;
// })->where('id','[0-9]+');

Route::get('/','App\Http\Controllers\PagesController@index');
Route::get('/category','App\Http\Controllers\PagesController@category');
Route::get('/post','App\Http\Controllers\PagesController@post');
Route::get('/query','App\Http\Controllers\DbController@index');
Route::get('/joining','App\Http\Controllers\DbController@join');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/','App\Http\Controllers\Admin\DashboardController@index');
    Route::get('/category','App\Http\Controllers\Admin\CategoryController@index');
    Route::get('/category/create','App\Http\Controllers\Admin\CategoryController@create');
    Route::get('/category/edit','App\Http\Controllers\Admin\CategoryController@edit');
    Route::get('/permission','App\Http\Controllers\Admin\PermissionController@index');
    Route::get('/permission/create','App\Http\Controllers\Admin\PermissionController@create');
    Route::post('/permission/store','App\Http\Controllers\Admin\PermissionController@store');
    Route::get('/permission/edit/{id}',['uses'=>'App\Http\Controllers\Admin\PermissionController@edit', 'as'=>'permission-edit']);
    Route::put('/permission/edit/{id}',['uses'=>'App\Http\Controllers\Admin\PermissionController@update', 'as'=>'permission-update']);
    Route::delete('/permission/delete/{id}',['uses'=>'App\Http\Controllers\Admin\PermissionController@destroy', 'as'=>'permission-delete']);
    Route::get('/role','App\Http\Controllers\Admin\RoleController@index');
    Route::get('/role/create','App\Http\Controllers\Admin\RoleController@create');
    Route::post('/role/store','App\Http\Controllers\Admin\RoleController@store');
    Route::get('/role/edit/{id}',['uses'=>'App\Http\Controllers\Admin\RoleController@edit', 'as'=>'role-edit']);
    Route::put('/role/edit/{id}',['uses'=>'App\Http\Controllers\Admin\RoleController@update', 'as'=>'role-update']);
    Route::delete('/role/delete/{id}',['uses'=>'App\Http\Controllers\Admin\RoleController@destroy', 'as'=>'role-delete']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
