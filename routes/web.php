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

Route::get('/', function () {
    return view('pages.index');
});